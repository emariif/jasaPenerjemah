<?php

namespace App\Http\Controllers;

use App\Models\Detailjob;
use App\Models\Kategori_Bahasa;
use App\Models\Job;
use App\Models\User;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // $jobs = Job::all();
        $jobs = Job::orderBy('id', 'desc')->paginate(9);
        $users = User::all();
        return view('joblist.index',compact('jobs','users'));
        
    }
    public function cari(Request $request)
    {
        // $jobs = Job::all();
        $jobs = Job::where('nama_job', 'like', '%'.$request->cari.'%')->orderBy('id', 'desc')->paginate(9);
        $users = User::all();
        return view('joblist.index',compact('jobs','users'));
        
    }
    public function test()
    {
        // $jobs = Job::take(2)->get();
        $jobs = Job::all();
        $users = User::all();
        return view('joblist.index',compact('jobs','users'));
        // $jobs = Job::with('kategori_bahasa')->get();

        // $jobs = Job::with('kategori_bahasa')->get();

        // $Job = $jobs->take('10');
        // return $Job->kategori_bahasa;
        // return view('test',compact('jobs'));
        // return $jobs;
        // dump($jobs);
        // dd($jobs);


        // $kategori_bahasa = Bahasa::all();
        // $kategori_bahasa  = $kategori_bahasa->find(1);
        // dump($kategori_bahasa);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $jobs = Job::all();
        $kategori_bahasa = Kategori_Bahasa::all();
        return view('joblist.create',compact('kategori_bahasa','jobs'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
			'file' => 'required|file|mimes:pdf,doc,docx,zip',
            'kategori_bahasa_id' => 'required|max:255',
            'nama_job' => 'required',
            'deskripsi' => 'required',
            'durasi' => 'required',
            'jumlah_halaman' => 'required',
            'total_harga' => 'required',
        ],[
            // pesan error
            'kategori_bahasa_id.required' => 'data tidak boleh kosong' ,
            'deskripsi.required' => 'data tidak boleh kosong' ,
            'durasi.required' => 'data tidak boleh kosong' ,
            'jumlah_halaman.required' => ' data tidak boleh kosong' ,
            'total_harga.required' => ' data tidak boleh kosong' ,
        ]);
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".Auth::user()->id.".".$file->getClientOriginalExtension();;
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
        $data = [
            'users_id'=>Auth::user()->id,
            'userDetails' => User::find('users_id'),
            'nama_job' =>$request->nama_job,
            'deskripsi' => $request-> deskripsi,
            'durasi' => $request-> durasi,
            'jumlah_halaman' => $request-> jumlah_halaman,
            'total_harga' => $request-> total_harga,
            'kategori_bahasa_id' => $request-> kategori_bahasa_id,
			'file' => $nama_file,
            ];
            $bahasa = Kategori_Bahasa::all()->where('id',$data['kategori_bahasa_id'])->first();
            $data['kategori_bahasa'] = $bahasa->nama_kategori_bahasa;
            //         $jobs = Job::create([
            // 'nama_job' =>$request->nama_job,
            // 'deskripsi' => $request-> deskripsi,
            // 'durasi' => $request-> durasi,
            // 'jumlah_halaman' => $request-> jumlah_halaman,
            // 'total_harga' => $request-> total_harga,
            // 'kategori_bahasa_id' => $request-> kategori_bahasa_id,
            // ]);
            return view('checkout_payment')->with('data',$data);
            // return $request;

       
        // return $request;
    }public function confirm(Request $request)
    {
            $jobs = Job::create([
            'users_id'=>Auth::user()->id,
            'userDetails' => User::find('users_id'),
            'nama_job' =>$request->nama_job,
            'deskripsi' => $request->deskripsi,
            'durasi' => $request->durasi,
            'jumlah_halaman' => $request->jumlah_halaman,
            'total_harga' => $request->total_harga,
            'kategori_bahasa_id' => $request->kategori_bahasa_id,
			'file' => $request->file,
            ]);
            return redirect('joblist');
    }

    public function proposal(Request $request){
        
        $validated = request([
            'deskripsi' => 'required',
            'jobs_id' => 'required',
            'users_id' => 'required',
        ]);

        $proposals = [
            'users_id'=>Auth::user()->id,
            'jobs_id' =>$request->jobs_id,
            'deskripsi' => $request-> deskripsi,
        ];

        $jobs = Job::all()->where('id',$proposals['jobs_id'])->first();
        $proposals['jobs'] = $jobs->id;
        $proposals = Proposal::all()->where('users_id', '$user_id');

        // Proposal::create($proposals);

        $proposals = Proposal::create([
            'users_id'=>Auth::user()->id,
            'jobs_id' =>$request->jobs_id,
            'deskripsi' => $request-> deskripsi,
        ]);
        
        //coba
        // dd($proposals);
        return redirect()->back();
        // $proposals = Proposal::get();
        // return view('joblist')->with('proposals',$proposals);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $joblist, Proposal $proposals)
    {
        $user=Auth::user();
        $jobs_id = $joblist->id;
        $proposals = Proposal::where('jobs_id', $joblist->id)->get();
        $is_proposals = Proposal::where('jobs_id', $joblist->id)->first();
        $is_taken = Proposal::where('jobs_id', $joblist->id)->where('users_id', $user->id)->first();
        if($is_proposals != null){
            $proposals['is_taken']='false';
            $proposals['is_onprogress']='false';
            if($is_taken != null){
                if($is_taken['users_id'] == Auth::user()->id){
                $proposals['is_taken']='true';
                }
            }
            if($joblist['translator_id'] != null){
                $proposals['is_onprogress']='true';
            }

        }
        else{
            $proposals['is_taken']='false';
            $proposals['is_onprogress']='false';
        }
        return view('joblist.show',compact('joblist','proposals') );
        // return $joblist;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function submit(Request $request)
    {
         
        $jobs_id = Job::find($request->id);
        $jobs_id->translator_id = $request->translator_id;
        $jobs_id->save();
        return redirect('/jobtransaction/'.$request->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

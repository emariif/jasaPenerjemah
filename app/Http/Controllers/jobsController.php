<?php

namespace App\Http\Controllers;

use App\Models\Detailjob;
use App\Models\Kategori_Bahasa;
use App\Models\Job;
use App\Models\User;
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
        $jobs = Job::get();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
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
            // create
        $data = [
            'users_id'=>Auth::user()->id,
            'userDetails' => User::find('users_id'),
            'nama_job' =>$request->nama_job,
            'deskripsi' => $request-> deskripsi,
            'durasi' => $request-> durasi,
            'jumlah_halaman' => $request-> jumlah_halaman,
            'total_harga' => $request-> total_harga,
            'kategori_bahasa_id' => $request-> kategori_bahasa_id,
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
            'deskripsi' => $request-> deskripsi,
            'durasi' => $request-> durasi,
            'jumlah_halaman' => $request-> jumlah_halaman,
            'total_harga' => $request-> total_harga,
            'kategori_bahasa_id' => $request-> kategori_bahasa_id,
            ]);
            return redirect('joblist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $joblist)
    {
        return view('joblist.show',compact('joblist') );
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

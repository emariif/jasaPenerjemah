<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobTransaction extends Controller
{
        public function index($id){
            $jobs = Job::find($id);
            $jobs['status']='pending';
            $jobs['color']='bg-danger';
            if($jobs['translator_id']!=null){
                if($jobs['file_translated']!=null){
                    $jobs['status']='finish';
                    $jobs['color']='bg-success';
                }else{
                    $jobs['status']='progress';
                    $jobs['color']='bg-warning';

            }
        }
        return view('jobtransaction.index')->with('job',$jobs);
    }

    public function file(Request $request,$id)
    {
        $validated = $request->validate([
			'file' => 'required|file|mimes:pdf,doc,docx,zip',
        ]);
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_translated_".Auth::user()->id.".pdf";
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        $jobs_id = Job::find($id);
        $jobs_id->file_translated = $nama_file;
        $jobs_id->save();
        return redirect('/jobtransaction/'.$request->id);
    }

}

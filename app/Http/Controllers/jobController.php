<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('profile_translator',['users' => $users]);

        // $jobs = DB::table('jobs')->get();
        // return view('profile_translator',['jobs' => $jobs]);
    }
 
   public function landingpage(){
       return view('landing_page');
   }

   public function faq(){
       return view('faq');
   }

   public function clientdetailjob(){
    return view('clientDetailjob');
    }

    public function payment(){
        return view('checkout_payment');
    }
    public function upload(){
        return view('upload_page');
    }

    public function joblist(){
        return view('joblist');
    }
    
    public function profile(){
    return view('profile_translator');
    }
       
}

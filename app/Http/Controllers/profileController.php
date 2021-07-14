<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (Auth::user()->level != 'Translator') {
            $jobs = Job::where('users_id', $user->id)->get();
            $data[] = [];
            $data['active'] = Job::where('users_id', $user->id)->where('file_translated', null)->orderBy('id', 'desc')->paginate(10);
            $data['finish'] = Job::where('users_id', $user->id)->where('file_translated', '!=', null)->orderBy('id', 'desc')->paginate(10);
            $data['bids'] = Proposal::where('users_id', $user->id)->get();
            return view('profile.profile')->with('job', $jobs)->with('data', $data);
        }
        $jobs = Job::where('translator_id', $user->id)->get();
        $data[] = [];
        $data['active'] = Job::where('translator_id', $user->id)->where('file_translated', null)->orderBy('id', 'desc')->paginate(10);
        $data['finish'] = Job::where('translator_id', $user->id)->where('file_translated', '!=', null)->orderBy('id', 'desc')->paginate(10);
        $data['bids'] = Proposal::where('users_id', $user->id)->get();
        return view('profile.profile')->with('job', $jobs)->with('data', $data);
    }
}
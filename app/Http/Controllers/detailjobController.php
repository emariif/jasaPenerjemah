<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Detailjob;

use App\Models\User;
use Illuminate\Http\Request;

class detailjobController extends Controller
{

    protected $table ='detailjob';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $jobs = Job::all();
    //    $jobs = Job::with('id');
       $users = User::all();
       $detailjob = Detailjob::all();

       return view('joblist.index',compact('jobs','users'));
        // return $jobs;
       
    }

    public function test(Job $jobs)
    {
       $detailjob = Detailjob::all();
       $users = User::all();
    //    return view('clientDetailjob',compact('detailjob','users'));
        return $detailjob;
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Detailjob $joblist)
    {
        return view('joblist.show',compact('joblist'));
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

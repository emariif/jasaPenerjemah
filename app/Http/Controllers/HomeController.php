<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('landing_page');
    }

    public function userHome()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    public function translatorHome()
    {
        return view('translatorHome');
    }
}

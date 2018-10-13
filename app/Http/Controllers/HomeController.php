<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Thread\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $threads = Thread::latest()->simplePaginate(5);

        return view('home',compact('threads'));
    }
}

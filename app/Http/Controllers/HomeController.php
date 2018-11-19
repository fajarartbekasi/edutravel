<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Activity\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(User $user)
    {
        return view('home',[
            'profileUser' => $user,
             'activities'     => Activity::feed($user)
        ]);
    }
    public function show(User $user)
   {
       return view('home',[
           'profileUser' => $user,
            'activities'     => Activity::feed($user)
       ]);

   }
}

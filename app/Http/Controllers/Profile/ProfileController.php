<?php

namespace App\Http\Controllers\Profile;

use App\User;
use App\Models\Activity\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
   public function show(User $user)
   {
       

       return view('home',[
           'profileUser' => $user,
            'activities'     => Activity::feed($user)
       ]);

   }
}

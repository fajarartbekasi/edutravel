<?php

namespace App\Http\Controllers\Profile;

use App\User;
use App\Models\Activity\Activity;
use Laravolt\Avatar\Avatar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('verified');
    }

   public function show(User $user)
   {
       return view('home',[
           'profileUser' => $user,
            'activities'     => Activity::feed($user)
       ]);

   }
}

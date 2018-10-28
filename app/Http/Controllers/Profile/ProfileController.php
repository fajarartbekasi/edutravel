<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
   public function show(User $user)
   {
       

       return view('home',[
           'profileUser' => $user,
            'activities'     => $this->getActivity($user)
       ]);

   }
   protected function getActivity(User $user)
   {
        return $user->activity()->latest()->with('subject')->take(3)->get()->groupBy(function ($activity) {
            return $activity->created_at->format('Y-m-d');
        });

        
   }
}

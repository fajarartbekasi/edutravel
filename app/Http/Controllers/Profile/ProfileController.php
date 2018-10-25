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
           'threads'     => $user->threads()->paginate(5)
       ]);

   }
}

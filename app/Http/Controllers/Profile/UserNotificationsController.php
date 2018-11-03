<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserNotificationsController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }

   public function index()
   {

        return auth()->user()->unreadNotifications;

   }

   public function destroy(User $user, $notificationId)
   {

        auth()->user()->notifications()->findOrFail($notificationId)->markAsRead();

   }
}

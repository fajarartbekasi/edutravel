<?php

namespace App\Http\Controllers;

use App\User;
use App\Channel;
use App\Models\Thread\Thread;
use App\Models\Activity\Activity;
use App\Filters\ThreadFilters;
use App\Http\Requests\ThreadReaquest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\VerifiesEmails;

class HomeController extends Controller
{
    use VerifiesEmails;

    public function __construc(){

        return $this->middleware('signed')->only('verify');
    }

    public function index(Channel $channel, ThreadFilters $filters)
    {

        $threads = $this->getThreads($channel, $filters);

        if (request()->wantsJson()) {
           return $threads;
        }

        return view('contents.discussions.index',compact('threads'));

    }
    public function show(User $user)
   {
       return view('home',[
           'profileUser' => $user,
            'activities'     => Activity::feed($user)
       ]);

   }
   protected function getThreads(Channel $channel, ThreadFilters $filters)
    {
        $threads = Thread::latest()->filter($filters);

        if ($channel->exists) {

            $threads->where('channel_id', $channel->id);

        }


       return $threads->get();
    }
}

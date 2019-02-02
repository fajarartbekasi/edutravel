<?php

namespace App\Http\Controllers\Thread;

use App\Models\Thread\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class ThreadSubscriptionsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('verified');
    }

    public function store($channelId, Thread $thread)
    {
        $thread->subscribe();
    }

    public function destroy($channelId, Thread $thread)
    {

        $thread->unsubscribe();

    }
}

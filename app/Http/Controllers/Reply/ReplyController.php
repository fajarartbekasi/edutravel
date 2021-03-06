<?php

namespace App\Http\Controllers\Reply;

use App\User;
use App\Channel;
use App\Models\Thread\Thread;
use App\Models\Reply\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified', ['except' => 'index']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $channelId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index($channelId, Thread $thread)
    {

        return $thread->replies()->paginate(2);

    }

    public function store($channelId, Thread $thread)
    {
        if(Gate::denies('create', new Reply)){
            return response(

                'You are posting too frequently. Please take a break. :)', 429
            );

        }
        $this->validate(request(), [

            'body' => 'required'
        ]);
        $reply = $thread->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        if(request()->expectsJson()) {

            return $reply->load('owner');

        }

        return back()->with('flash', 'Your reply has been left.');
    }

    public function update(Reply $reply)
    {
        $this->authorize('update', $reply);

        $reply->update(['body' => request('body')]);

    }

    public function destroy(Reply $reply)
    {

        $this->authorize('update', $reply);

        $reply->delete();

        if(request()->expectsJson()) {

            return response(['status' => 'Reply deleted']);
        }

        return back();
    }

}

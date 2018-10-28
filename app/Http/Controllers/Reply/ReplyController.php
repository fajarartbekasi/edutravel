<?php

namespace App\Http\Controllers\Reply;

use App\User;
use App\Channel;
use App\Models\Thread\Thread;
use App\Models\Reply\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param $channelId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($channelId, Thread $thread)
    {
        $this->validate(request(), [

            'body' => 'required'
        ]);
            
        $thread->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back()->with('flash', 'Your reply has been left.');
    }
    public function destroy(Reply $reply)
    {   

        $this->authorize('update', $reply);
       
        $reply->delete();

        return back();
    }

}

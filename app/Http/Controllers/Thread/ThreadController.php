<?php

namespace App\Http\Controllers\Thread;

use App\User;
use App\Channel;
use App\Models\Thread\Thread;
use App\Models\Reply\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filters\ThreadFilters;

class ThreadController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @param Channel $Channel
     * 
     * @param ThreadFilters $filters
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Channel $channel, ThreadFilters $filters)
    {
        
        $threads = $this->getThreads($channel, $filters);

        if (request()->wantsJson()) {
           return $threads;
        }

        return view('contents.discussions.index',compact('threads'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.form.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

                'title' => 'required',
                'channel_id' => 'required|exists:channels,id',
                'body' => 'required'
            ]
        );

        $thread = Thread::create([

            'user_id'       => auth()->id(),
            'channel_id'    => request('channel_id'),
            'title'         => request('title'),
            'body'          => request('body')

        ]);

        return redirect($thread->path());
    }

    /**
     * Display the specified resource.
     *
     * @param $channelId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($channel,Thread $thread)
    {

      
        return view('contents.discussions.show', [
            'thread'    => $thread,
            'replies'   => $thread->replies()->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($channel, Thread $thread)
    {   

       
        $this->authorize('update', $thread);

        $thread->delete();

        if(request()->wantsJson()){

            return response([], 204);
        }

        return redirect('/threads');
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

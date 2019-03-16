<?php

namespace App\Models\Thread;

use App\Notifications\ThreadWasUpdated;
use Illuminate\Database\Eloquent\Model;

class ThreadSubscription extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTO(\App\User::class);
    }

    public function thread()
    {

        return $this->belongsTo(\App\Models\Thread\Thread::class);

    }

    public function notify($reply)
    {
        $this->user->notify(new ThreadWasUpdated($this->thread, $reply));
    }

}

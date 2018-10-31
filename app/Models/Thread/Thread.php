<?php

namespace App\Models\Thread;

use App\Models\Reply\Reply;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{   

    use \App\RecordsActivity;

    protected $guarded = [];

    protected $with = ['creator', 'channel'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($thread){

            $thread->replies->each->delete();
        
        });


    }
    
    public function creator()
    {

        return $this->belongsTo(\App\User::class, 'user_id');

    }

    public function replies()
    {    

       return $this->hasMany(\App\Models\Reply\Reply::class);

    }

    public function addReply($reply)
    {

       return $this->replies()->create($reply); 

    }

    public function path()
    {

        return "/threads/{$this->channel->slug}/{$this->id}";

    }
    public function channel()
    {

        return $this->belongsTo(\App\Channel::class, 'channel_id');

    }

    public function scopeFilter($query ,$filters)
    {

        return $filters->apply($query);

    }
    public function subscribe($userId = null)
    {

        $this->subscriptions()->create([
            'user_id'   => $userId ?: auth()->id()
        ]);

    }
    public function subscriptions()
    {
      return  $this->hasMany(\App\Models\Thread\ThreadSubscription::class);

    }
    public function unsubscribe($userId = null)
    {
        $this->subscriptions()
             ->where('user_id', $userId ?: auth()->id())
             ->delete();
    }
    
}

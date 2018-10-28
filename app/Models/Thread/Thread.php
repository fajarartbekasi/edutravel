<?php

namespace App\Models\Thread;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{   

    use \App\RecordsActivity;

    protected $guarded = [];

    protected $with = ['creator', 'channel'];

    protected static function boot()
    {
        parent::boot();
        
        static::addGlobalScope('replyCount', function($builder){
            $builder->withCount('replies');
        });

        static::deleting(function($thread){

            $thread->replies()->delete();
        
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

        $this->replies()->create($reply);

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
    
}

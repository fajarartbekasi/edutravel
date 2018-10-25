<?php

namespace App\Models\Thread;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{   

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('replyCount', function($builder){
            $builder->withCount('replies');
        });
    }
    
    public function creator()
    {

        return $this->belongsTo(\App\User::class, 'user_id');

    }

    public function replies()
    {    

       return $this->hasMany(\App\Models\Reply\Reply::class)
                   ->withCount('favorites')
                   ->with('owner');

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

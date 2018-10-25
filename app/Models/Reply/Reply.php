<?php

namespace App\Models\Reply;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $guarded = [];

    public function owner()
    {
    return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function thread()
    {
        return $this->belongsTo(\App\Models\Thread\Thread::class);
    }

    public function favorites()
    {
        return $this->morphMany(\App\Models\Favorite\Favorite::class, 'favorited');
    }

    public function favorite()
    {
       

        if (! $this->favorites()->where(['user_id' => auth()->id()])->exists()) {

            $this->favorites()->create(['user_id' => auth()->id()]);
        }
        
    }

    public function isFavorited()
    {
        return $this->favorites()->where('user_id', auth()->id())->exists();
    }
}

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
}

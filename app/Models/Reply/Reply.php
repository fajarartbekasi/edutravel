<?php

namespace App\Models\Reply;

use App\FavoriteTable;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    use FavoriteTable;
    
    protected $guarded = [];

    protected $with = ['owner','favorites'];

    public function owner()
    {
    return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function thread()
    {
        return $this->belongsTo(\App\Models\Thread\Thread::class);
    }

    
}

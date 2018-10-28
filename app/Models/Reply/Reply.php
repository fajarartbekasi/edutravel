<?php

namespace App\Models\Reply;

use App\FavoriteTable;
use Illuminate\Database\Eloquent\Model;
use App\RecordsActivity;

class Reply extends Model
{

    use FavoriteTable, RecordsActivity;
    
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function threads()
    {
        return $this->hasMany(\App\Models\Thread\Thread::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

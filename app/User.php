<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    use FavoriteTable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $with = ['favorites'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email',
    ];

    public function threads()
    {
        return $this->hasMany(\App\Models\Thread\Thread::class)->latest();
    }
    public function replies()
    {
        return $this->hasMany(\App\Models\Reply\Reply::class);
    }

    public function activity()
    {
        return $this->hasMany(\App\Models\Activity\Activity::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

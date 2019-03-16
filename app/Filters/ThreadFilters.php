<?php

namespace App\Filters;

use App\User;

class ThreadFilters extends Filters
{

    protected $filters = ['by', 'popular','unanswered'];

    /**
    * Filters the query by a given username.
    *
    *@param string $username
    *
    *@return mixed
    */
    public function by($username)
    {

        
        $user = User::where('name', $username)->firstOrFail();

        return $this->builder->where('user_id', $user->id);

    }

    /**
     * Filter the query according to most popular threads.
     * 
     * @return $this
     */
    public function popular($username)
    {

        $this->builder->getQuery()->orders = [];

        return $this->builder->orderBy('replies_count','desc');
        
    }

    public function unanswered($username)
    {

        $this->builder->getQuery()->orders = [];

        return $this->builder->where('replies_count', 0);

    }

}


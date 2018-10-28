<?php

namespace App\Policies;

use App\User;
use App\Models\Reply\Reply;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Reply $reply){

        return $reply->user_id == $user->id;
        
    }
}

<?php

namespace App\Http\Controllers\Favorite;


use App\Models\Favorite\Favorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reply\Reply;

class FavoriteController extends Controller
{


    public function store(Reply $reply)
    {

       $reply->favorite();

    }
    public function destroy(Reply $reply)
    {
        $reply->unfavorite();
    }
}

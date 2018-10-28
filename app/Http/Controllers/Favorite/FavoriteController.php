<?php

namespace App\Http\Controllers\Favorite;

use App\Models\Favorite\Favorite;
use App\Models\Reply\Reply;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function store(Reply $reply)
    {

       $reply->favorite();

       return back();
    }
    public function destroy(Reply $reply)
    {
        $reply->unfavorite();
    }
}

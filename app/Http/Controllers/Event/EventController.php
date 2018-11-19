<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{

    public function index()
    {
       return abort(404);
        // return view('contents.Events.index');
    }
    public function show()
    {
        return view('contents.Events.show');
    }

}

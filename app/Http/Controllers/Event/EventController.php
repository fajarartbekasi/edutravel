<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class EventController extends Controller
{
    public function __construct()
    {
        return $this->middleware('verified')->except(['index','show']);
    }

    public function create()
    {

    }

}

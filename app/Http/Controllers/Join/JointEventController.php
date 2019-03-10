<?php

namespace App\Http\Controllers\Join;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JointEventController extends Controller
{
    public function __construct()
    {
        return $this->middleware('verified');
    }
    public function create()
    {

    }
}

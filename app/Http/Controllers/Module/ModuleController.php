<?php

namespace App\Http\Controllers\Module;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function index()
    {
        return view('contents.modules.index');
    }

    public function show()
    {

        return view('contents.modules.show.show');

    }
}

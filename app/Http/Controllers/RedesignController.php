<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedesignController extends Controller
{
   public function index()
   {
       return view('ui.contents.threads.index');
   }
}

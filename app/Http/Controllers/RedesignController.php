<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedesignController extends Controller
{
   public function index()
   {
       return view('ui.contents.threads.index');
   }
    public function events()
    {
        return view('ui.contents.events.index');
    }
    public function showthread()
    {
        return view('ui.contents.threads.show');
    }
    public function createthread()
    {
        return view('ui.contents.threads.create');
    }
    public function eventsshow()
    {
        return view('ui.contents.events.show');
    }
}

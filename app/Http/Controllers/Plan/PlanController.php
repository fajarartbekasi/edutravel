<?php

namespace App\Http\Controllers\Plan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    public function index()
    {
        return view('contents.plans.index');
    }
    public function create()
    {
        return view('contents.plans.create');
    }
}

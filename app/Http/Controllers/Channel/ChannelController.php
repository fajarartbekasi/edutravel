<?php

namespace App\Http\Controllers\Channel;

use App\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelRequest;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class ChannelController extends Controller
{

    public function __construct()
    {
        return $this->middleware('verified');
    }

    public function create()
    {
        return view('contents.channels.create');
    }
    public function store(ChannelRequest $request)
    {
        Channel::create($request->formChannel());

        return redirect()->back()->with('flash', 'Channel succes added');
    }
}

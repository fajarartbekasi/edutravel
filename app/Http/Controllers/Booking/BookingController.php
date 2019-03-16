<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        return view('contents.bookings.index');
    }

    public function show()
    {
        return view('contents.bookings.show');
    }
}

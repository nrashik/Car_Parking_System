<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    public function booking()
    {
        return view('frontend.pages.Booking.booking');
    }

    public function store(Request $request)
    {
        Booking::create
        ([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'vehicle'=>$request->vehicle,
            'date'=>$request->date,
            'time'=>$request->time,
            'comment'=>$request->comment
        ]);
        return redirect()->back()->with('msg','Booking Confirmed Successfully');
    }
}

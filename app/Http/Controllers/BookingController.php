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
        $redirecturl='https://l.facebook.com/l.php?u=https%3A%2F%2Fshop.bkash.com%2Ffashion-world01518918592%2Fpaymentlink%2Fdefault-payment%3Ffbclid%3DIwAR3Ft6uQ3lfprbQ5YQZV-mXrjYJwe41I6VqC644TR9z7UrwDi0c9hrOG_wM&h=AT24fJlM44Lz20-DKpGdpmmkA8O0D7COdE-RmaU7xewI1ns3Ybs3banWHwhYyR0ORmua3snHNG8XaoBf0joqmwo0352SfmQQiDRBGfw6lMpiCVERAvfX9rMDQnH8OsP1nifgjw';
        return redirect($redirecturl)->with('msg','Booking Confirmed Successfully');
    }
}

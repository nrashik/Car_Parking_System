<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CustomerReportController extends Controller
{
    public function report()
    {
        
        return view('frontend.pages.customerReport');
    }
    public function customerReport(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $from=$request->start_date;
        $to=$request->end_date;
        $customer_id=$request->customer_id;
        // dd($customer_id);
        $report=Booking::where('customer_id',$customer_id)->whereBetween('created_at',[$from , $to])->get();
        return view('frontend.pages.customerReport',compact('report'));
    }

    
   
}

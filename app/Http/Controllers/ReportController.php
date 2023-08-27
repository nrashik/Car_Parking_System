<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        return view('backend.pages.report.report');
    }
    public function reportSearch(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $from=$request->start_date;
        $to=$request->end_date;
        $report=Booking::whereBetween('created_at',[$from , $to])->get();
        return view('backend.pages.report.report',compact('report'));
    }



}

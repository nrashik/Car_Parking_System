<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function totallBillReport()
    {
        return view('backend.pages.report.totalBillReport');
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
        return view('backend.pages.report.totalBillReport',compact('report'));
    }

    public function reportpage()
    {
        return view('backend.pages.report.reportPage');
    }

    public function generalReport()
    {
        return view('backend.pages.report.generalReport');
    }

    

}

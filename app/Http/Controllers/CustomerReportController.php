<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerReportController extends Controller
{
    public function report()
    {
        return view('frontend.pages.customerReport');
    }

    
   
}

<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Locations;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }


    public function search()
    {
       
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function allLocation()
    {
        $allLocation=Locations::all();
        return view('frontend.pages.allLocation',compact('allLocation'));
    }
}

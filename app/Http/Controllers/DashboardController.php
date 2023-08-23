<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;
use App\Models\Area;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $location=Locations::all()->count();
        $area=Area::all()->count();
        return view('backend.pages.dashboard.dashboard',compact('location','area'));
    }
}

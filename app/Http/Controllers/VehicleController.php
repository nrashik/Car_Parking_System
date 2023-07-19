<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function vehicle()
    {
        return view('backend.pages.vehicle.list');
    }
}

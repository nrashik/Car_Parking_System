<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Locations;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function list()
    {
        $locations=Locations::with('areashow')->get();
        return view('backend.pages.ParkingLocation.list',compact('locations'));
    }

    public function add()
    {
        $area=Area::all();
        return view('backend.pages.ParkingLocation.add',compact('area'));
    } 

    public function store(Request $request)
    {
      
        Locations::create
        ([
            'area_id'=>$request->area,
            'location'=>$request->location,
            'address'=>$request->address,
            'cc_camera'=>$request->cc_camera,
            'guard'=>$request->guard
        ]);
       
        return redirect()->back()->with('msg','New location added Successfully');
    }

    public function areaWiseLocations($id)
    {

        $locations=Locations::where('area_id',$id)->get();
        // // dd($id);
        // $area=Locations::where('area_id',$id)->get();
        return view('frontend.pages.Booking.area-location',compact('locations'));
    }

}

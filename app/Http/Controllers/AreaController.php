<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function list()
    {
        //@dd('habijhabi');
        $areas=Area::all()::with('areaShow')->all();
        return view('backend.pages.ParkingArea.list',compact('areas'));
    }

    public function add()
    {
       //dd('habijhabi');
        return view('backend.pages.ParkingArea.add');
        $areas=Area::all();

        return view('backend.pages.ParkingArea.add',compact('ares'));
    }

    public function store(Request $request)
    {
        Area::create
        ([
            'area_name'=>$request->area_location,
            'area_zone'=>$request->area_spot,
            'area_address'=>$request->area_address
        ]);

        return redirect()->back()->with('msg','New Area Added Successfuly!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function list()
    {
        //@dd('habijhabi');
        $areas=Area::all();
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
            'area_zone'=>'default',
            'area_address'=>$request->area_address
        ]);

        return redirect()->back()->with('msg','New Area Added Successfuly!');

    }
    public function edit($id)
    {
        //@dd('habijhabi');
        $areas=Area::find($id);
        return view('backend.pages.ParkingArea.edit',compact('areas'));
    }

    public function update(Request $request ,$id)
    {
        $area=Area::find($id);

        $area->update
        ([
            'area_name'=>$request->area_location,
            'area_zone'=>'default',
            'area_address'=>$request->area_address
        ]);

        return redirect()->back()->with('msg','New Area update Successfuly!');

    }
    public function delete($id)
    {
        $area=Area::find($id);
        $area->delete();
        return redirect()->back()->with('msg','Area Deleted Successfylly.');
    }

 




}

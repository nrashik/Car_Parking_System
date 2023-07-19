<?php

namespace App\Http\Controllers;
use app\Models\CarParkingSystem;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function info()
    {
        
        return view('backend.pages.user.list');
    }

    public function create()
    {
        return view('backend.pages.user.create');
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
       CarParkingSystem::create
       ([
        'name'=>$request->name,
        'contact'=>$request->contact_number,
        'address'=>$request->address

       ]);
       return redirect()->route('create.list');
    }
}

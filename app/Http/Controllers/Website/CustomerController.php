<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required|min:6'
        ]);

        Customer::create([
            'name'=>$request->name,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
        ]);

return redirect()->route('home')->with('msg','Registration success.');

    }

    public function dologin(Request $request)
    {
        $request->validate
        ([
            'email'     =>'required|email',
            'password'  =>'required|min:6'
        ]);

        //dd($request->all());

        $credential=$request->except('_token');
    }

    public function customerList()
    {
        $customers=Customer::all();
        return view('backend.pages.customer.list',compact('customers'));
    }

}

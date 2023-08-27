<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Customer;

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

return redirect()->route('homepage')->with('msg','Registration success.');

    }


    public function login()
    {
       return view('frontend.pages.login');
    }

    public function dologin(Request $request)
    {
        // dd($request>);
        $request->validate
        ([
            'email'     =>'required|email',
            'password'  =>'required|min:6'
        ]);

        // dd($request->all());

        $credential=$request->except('_token');

        if(auth()->guard('customer')->attempt($credential)){
            return redirect()->route('booking');
        }else{
            return redirect()->route('dashboard');
        }

    }

    public function customerList()
    {
        $customers=Customer::all();
        return view('backend.pages.customer.list',compact('customers'));
    }

        public function logout()
        {
            auth()->guard('customer')->logout();
            return redirect()->route('homepage');
        }
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('backend.pages.login.login');
    }

    public function dologin(Request $request)
    {
        // dd($request->all());
       $credentials=$request->only(['email','password']);

        if(auth()->attempt($credentials))

        {
            return redirect()->route('dashboard')->with('msg','Login Successful');
        }
        return redirect()->route('user.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('user.login')->with('msg','You have logged out successfylly!');
    }
}

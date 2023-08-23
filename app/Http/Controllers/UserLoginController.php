<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('backend.pages.login.login');
    }

    public function dologin(Request $request)
    {
        if(auth()->attempt(Request()->only(['email','password'])))

        {
            return redirect()->rout('dashboard');
        }
        return redirect()->route('user.login');
    }
}

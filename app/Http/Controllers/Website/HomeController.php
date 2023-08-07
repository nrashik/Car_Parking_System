<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function login()
    {
       return view('frontend.pages.login');
    }

    public function search()
    {
        return view('');
    }
}

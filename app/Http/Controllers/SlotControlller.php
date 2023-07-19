<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlotControlller extends Controller
{
   public function slot()
   {
    return view('backend.pages.slot');
   }
    
}

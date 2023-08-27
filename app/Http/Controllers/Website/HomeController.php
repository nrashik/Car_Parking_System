<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Locations;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }


    public function search()
    {
       
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function allLocation()
    {
        $allLocation=Locations::all();
        return view('frontend.pages.allLocation',compact('allLocation'));
    }

    public function store(Request $request)
    {
        Contact::create
        ([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
            
        ]);
            
        return redirect()->back()->with('msg','Contact Request send Successfuly!');

    }

    public function list()
    {
        $contacts=Contact::all();
        return view('backend.pages.contact.contactList', compact('contacts'));
    }

    public function delete($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('msg','Contact Request Deleted Successfylly.');
    }
}

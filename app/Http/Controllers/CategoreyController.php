<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoreyController extends Controller
{
    public function categorey()
    {
        $categories=Category::all();
        return view('backend.pages.categorey.list',compact('categories'));
    }

    public function create()
    {
        return view('backend.pages.categorey.create');
    }

    public function store(Request $request)
    
    {
        
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/category',$fileName);
        }

        Category::create 
        ([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$fileName
        ]);

        return redirect()->back()->with('msg','New Category Created Successfully!');
       
    }
}

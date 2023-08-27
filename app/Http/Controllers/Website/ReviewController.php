<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
       Reviews::create
       ([
            'name'=>$request->name,
            'email'=>$request->email,
            'review'=>$request->review
       ]);
        return redirect()->back()->with('msg','Review Submitted Successfully');
    }

    public function list()
    {
        $reviews=Reviews::all();
        return view('backend.pages.review.reviewList',compact('reviews'));
    }

    public function delete($id)
    {
        $review=Reviews::find($id);
        $review->delete();
        return redirect()->back()->with('msg','Review Deleted Successfylly.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReviewsController extends Controller
{
   
    public function store(Request $request)
    {
        $review = new Reviews();
        $review->user_id = auth()->user()->id;
        $review->product_id = $request->product_id;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->created_at = Carbon::now('WIB');
        $review->save();
        return redirect()->route('product.show', $request->product_id);
    }
}

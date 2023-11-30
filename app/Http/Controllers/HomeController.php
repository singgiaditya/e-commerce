<?php

namespace App\Http\Controllers;

use App\Models\Carts_item;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * isplay a listing of the resource.
     */
    public function index()
    {
        $data = Products::all();
        if(Auth::check()){
            
            $cartItems = Auth::user()->cart->cartsItem()->with('products')->get();
            
            return view('home', compact('data','cartItems'));
        }else{
            return view('home', compact('data'));
        }
    }

    public function addProduct(Request $request){
        if (Auth::check()) {
            $cart_item = new Carts_item();
            $cart_item->cart_id = Auth::user()->cart->id;
            $cart_item->product_id = $request->product_id;
            $cart_item->quantity = $request->quantity;
            $cart_item->save();
            return response()->json(['message' => 'Product added to cart successfully'], 200);
        } else {
            return response()->json(['message' => 'User not authenticated'], 401);
        }
    }

    public function deleteProduct(Request $request){
        if(Auth::check()){
            $cart_item = Auth::user()->cart->cartsItem()->where('product_id', $request->product_id);
            $cart_item->delete();
            return response()->json(['message' => 'Product added to cart successfully'], 200);
        }else{
            return response()->json(['message' => 'User not authenticated'], 401);
        }
    }
    
}

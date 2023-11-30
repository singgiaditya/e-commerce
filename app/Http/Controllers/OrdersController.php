<?php

namespace App\Http\Controllers;

use App\Models\OrderLines;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            // $cartItems = Carts_item::where("cart_id", Auth::user()->cart->id)->get();
            $cartItems = Auth::user()->cart->cartsItem()->with('products')->get();
            
            return view('shoping-cart', compact('cartItems'));
        }
    }

    public function store(Request $request)
    {
        $order = new Orders();
        $order->user_id = auth()->user()->id;
        $order->address = $request->address;
        $order->setCreatedAt(Carbon::now('WIB'));
        $order->save();
        for( $i = 0; $i < count($request->product_id); $i++){
            $order_lines = new OrderLines();
            $order_lines->order_id = $order->id;
            $order_lines->product_id = $request->product_id[$i];
            $order_lines->quantity = $request->quantity[$i];
            $order_lines->save();
            $product = Products::find( $request->product_id[$i]);
            $product->update([
                'quantity' => $product->quantity - $request->quantity[$i]
            ]);
        }
        $cart_items = Auth::user()->cart->cartsItem();
        $cart_items->delete();
        return response()->json(['message' => 'Check Out Success'], 200);
    }

    public function trackOrder(){
        $myOrder = Auth::user()->orders()->with('orderLines.products')->get();
        return view('track-order', compact('myOrder'));
    }
    
}

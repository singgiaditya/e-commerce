<?php

namespace App\Http\Controllers;

use App\Models\Carts_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsItemController extends Controller
{
    public function update(Request $request)
    {
    $cartItem = Auth::user()->cart->cartsItem()->where("product_id", $request->product_id)->first();

    if ($cartItem) {
        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Cart item updated successfully']);
    }

    return response()->json(['error' => 'Cart item not found'], 404);
    }
}

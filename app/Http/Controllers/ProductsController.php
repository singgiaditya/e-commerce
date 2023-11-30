<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    
    public function index()
    {
        $data = Products::all();
        return view('admin.product.product', compact('data'));
    }

    public function create(){
        return view('admin.product.addProduct');
    }

    public function store(Request $request)
    {
            //Proses Membahkan File Image Secara Lokal
            $fileName = $request->title . '.jpg';
            $request->file('image')->storeAs('public/images', $fileName);

            Products::create([
                'title' => $request->title,
                'picture' => $fileName,
                'description' => $request->description,
                'category' => $request->category,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);

        return redirect()->route('product.index')->with('message', 'Add Product Success');
    }

    public function show($product_id)
    {
        $product = Products::find($product_id);

        if(Auth::check()){
        if(Auth::user()->role === 'admin'){
        return view('admin.product.editProduct', compact('product'));
        }elseif(Auth::check()){
            $cartItems = Auth::user()->cart->cartsItem()->with('products')->get();
            $related = Products::where('category' , $product->category)->get();
            $reviews = $product->reviews()->with('user')->get();
            return view('product-detail', compact('product', 'cartItems', 'related', 'reviews'));    
        }
    }else{
        $related = Products::where('category' , $product->category)->get();
            $reviews = $product->reviews()->with('user')->get();
            return view('product-detail', compact('product', 'related', 'reviews'));  
    }
        

    }

    public function update(Request $request, $product)
    {
        $product = Products::find($product);

        if ($request->image) {
            //Proses Membahkan File Image Secara Lokal
            $fileName = $request->product_name . '.jpg';
            $request->file('image')->storeAs('public/images', $fileName);

            $product->update([
                'title' => $request->title,
                'picture' => $fileName,
                'description' => $request->description,
                'category' => $request->category,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);
        } else {
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->route('product.index')->with('message', 'Edit Product Success');

    }

    
    public function destroy($product)
    {
        $product = Products::find($product);
        Storage::delete('public/images/' . basename($product->gambar));
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Delete Product Success');
    }
}

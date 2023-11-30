<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view ("login");
    }

    public function register(){
        return view ("register");
    }

    public function prosesLogin(Request $request){
        if(Auth::attempt($request->only(['email','password']))){
            session(['user' => Auth::user()]);
            if(Auth::user()->role == "admin"){
                return redirect(route('dashboard'));
            }
            return redirect(route('/'));
        }
        
        return redirect(route('login'))->with('failed', 'Email or Password Wrong');
    }

    public function prosesRegister(Request $request){
        $user = new User();
        $user->role = "user";
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $cart = new Carts();
        $cart->created_by = $user->id;
        $cart->save();

        return redirect(route("login"))->with("success", "Register Success");
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

}

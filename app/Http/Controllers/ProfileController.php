<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        if(isset(Auth::user()->role)){
            return view("profile");
        }else{
            return redirect(route("login"))->with("failed","you must login first");
        }
        
    }

    public function update(Request $request)
    {
        $dataUser = Auth::user();
        $dataUser->name = $request->name;
        $dataUser->email = $request->email;

        if($request->picture){
            $fileName = $request->name . '.jpg';
            $request->file('picture')->storeAs('public/images', $fileName);
            $dataUser->picture = $fileName;
        }

        if ($request->password) {
            
            $dataUser->password = bcrypt($request->password);
            $dataUser->update();

            Auth::logout();
            return redirect(route('login'))->with('success', 'Password Changed Successfully, please login again');
        } else {
            $dataUser->update();

            return redirect(route('profile'));
        }
    }
    
    public function destroy()
    {
        $dataUser = Auth::user();
        Auth::logout();
        $dataUser->delete();
        
        return redirect(route('login'))->with('success', 'Account has been deleted');
    }
}

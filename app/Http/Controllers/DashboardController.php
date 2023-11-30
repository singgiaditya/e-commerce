<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $productCount = Products::count();
        $userCount = User::count();
        return view("admin.dashboard", compact("productCount", "userCount"));
    }


}

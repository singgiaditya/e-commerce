<?php

use App\Http\Controllers\CartsItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('/');

Route::get('login', [UserController::class, 'login'])->name('login');

Route::get('register', [UserController::class,'register'])->name('register');

Route::post('register', [UserController::class,'prosesRegister'])->name('prosesRegister');

Route::post('login', [UserController::class,'prosesLogin'])->name('prosesLogin');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile', [ProfileController::class,'update'])->name('profile.update');
Route::get('profile/delete', [ProfileController::class,'destroy'])->name('profile.delete');

Route::get('logout', [UserController::class,'logout'])->name('logout');

Route::get('product/{product}', [ProductsController::class, 'show'])->name('product.show');


Route::group(['middleware' => ['admin']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //product
    Route::get('product', [ProductsController::class, 'index'])->name('product.index');
    Route::post('product', [ProductsController::class, 'store'])->name('product.store');
    Route::get('product-create', [ProductsController::class, 'create'])->name('product.create');
    Route::put('product/{product}', [ProductsController::class, 'update'])->name('product.update');
    Route::delete('product/{product}', [ProductsController::class, 'destroy'])->name('product.delete');

});

Route::group(['middleware' => ['user']], function () {
    Route::post('/',[HomeController::class, 'addProduct'])->name('/.addProduct');
    Route::delete('/',[HomeController::class, 'deleteProduct'])->name('/.deleteProduct');
    Route::get('checkout',[OrdersController::class,'index'])->name('checkout');
    Route::post('checkout',[OrdersController::class,'store'])->name('checkout.store');
    Route::put('/',[CartsItemController::class, 'update'])->name('/.updateProduct');
    Route::get('myOrder',[OrdersController::class,'trackOrder'])->name('myOrder');
    Route::post('review', [ReviewsController::class,'store'])->name('review');
});





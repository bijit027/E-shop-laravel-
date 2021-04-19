<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\CreateProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::post("/adminlogin",[AdminController::class,'adminLogin']);
Route::get("/adminhome",[AdminHomeController::class,'index']);
Route::get("/adminview",[AdminViewController::class,'index']);
Route::get("/createproduct",[CreateProductController::class,'index']);
Route::post("/created",[CreateProductController::class,'create']);
Route::get("/delete/{id}",[CreateProductController::class,'delete']);
Route::get("edit/{id}",[CreateProductController::class,'editDetail']);
Route::post("edited/{id}",[CreateProductController::class,'edited']);
Route::get("search",[ProductController::class,'search']);
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/actionlogin',[AuthController::class,'actionlogin']);
Route::middleware(['auth:web'])->group(function () {
Route::get('logout',[AuthController::class,'logout']);
Route::get('/product',[ProductController::class,'index']);
Route::post('/product',[ProductController::class,'create']);
Route::get('/product/{id}',[ProductController::class,'edit']);
Route::patch('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'delete']);
Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'create']);
Route::get('/customer/{id}',[CustomerController::class,'edit']);
Route::patch('/customer/{id}',[CustomerController::class,'update']);
Route::delete('/customer/{id}',[CustomerController::class,'delete']);
Route::get('/service',[ServiceController::class,'index']);
Route::post('/service',[ServiceController::class,'create']);
Route::get('/service/{id}',[ServiceController::class,'edit']);
Route::patch('/service/{id}',[ServiceController::class,'update']);
Route::delete('/service/{id}',[ServiceController::class,'delete']);
});
Route::get('/',[HomeController::class,'index']);
Route::get('/detail-product/{id}',[HomeController::class,'product']);
Route::get('/detail-service/{id}',[HomeController::class,'services']);

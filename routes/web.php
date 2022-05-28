<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/',HomeController::class);

Auth::routes();


Route::resource('/dashboard-admin',AdminController::class);
Route::resource('/dashboard-admin/category',CategoryController::class);
Route::resource('/dashboard-admin/products',ProductController::class);
Route::resource('/dashboard-admin/orders',OrderController::class);
Route::resource('/order-products',OrderController::class);
Route::get('/order-product/{id}',[App\Http\Controllers\OrderController::class,'order']);
Route::get('/detail-product/{id}',[App\Http\Controllers\ProductController::class,'detail']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

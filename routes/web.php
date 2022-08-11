<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
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

Route::resource('/dashboard-admin/category',CategoryController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/products',ProductController::class)->middleware('can:admin');
Route::resource('/dashboard-admin/orders',OrderController::class)->middleware('can:admin');
Route::resource('/order-products',OrderController::class);
Route::resource('/dashboard-admin',AdminController::class)->middleware('can:admin');
Route::get('/order-product/{id}',[App\Http\Controllers\OrderProductController::class,'order']);
Route::post('/order-products-cart',[App\Http\Controllers\OrderProductController::class,'orderPanier']);
Route::post('/order-product',[App\Http\Controllers\OrderProductController::class,'orderProduct']);
Route::get('/detail-product/{id}',[App\Http\Controllers\OrderProductController::class,'detail']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/category-products/{id}',[App\Http\Controllers\OrderProductController::class,'categoryProducts']);
Route::get('/search',[App\Http\Controllers\SearchController::class,'globalSearch']);
Route::get('view-orderlines/{id}', [OrderController::class, 'orderLine']);
//cart Route

Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('order-to-cart/{id}', [CartController::class, 'orderToCart'])->name('order.to.cart');
Route::patch('update-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
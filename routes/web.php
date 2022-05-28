<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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
Route::get('/commande', function () {
    return view('add-commande');
});

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});
Route::resource('/dashboard-admin/category',CategoryController::class);
Route::resource('/dashboard-admin/products',ProductController::class);

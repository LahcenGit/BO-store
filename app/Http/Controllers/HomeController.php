<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function index(){
        $products = Product::all();
        $categories = Category::all();
        return view('welcome',compact('products','categories'));
    }
}

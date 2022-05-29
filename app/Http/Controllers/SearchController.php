<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function globalSearch(Request $request){
        $categories = Category::all();
        $keyword = $request->keyword;

        $products  = Product::where('name', 'LIKE', "%{$keyword}%") 
        ->orWhere('description', 'LIKE', "%{$keyword}%") 
        ->get();

        return view('search-result',compact('products','categories','keyword')) ;
    }
}

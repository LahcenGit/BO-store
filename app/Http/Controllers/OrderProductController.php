<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Wilaya;
use App\Models\Category;
class OrderProductController extends Controller
{
    //
    public function order($id){
        $product = Product::find($id);
        $wilayas = Wilaya::all();
        $categories = Category::all();
        return view('order-product',compact('product','wilayas','categories'));
    }
    public function detail($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('detail-product',compact('product','categories'));
    }

    public function categoryProducts($id){

        $products = Product::where('categorie_id',$id)->get();
        $categories = Category::all();
        $category = Category::find($id);
        return view('category-product',compact('products','categories','category'));

     }
     public function orderPanier(Request $request){
        $products = $request->products;
        $qtes = $request->qtes;
        $prices = $request->prices;
        $total = $request->total;
        $wilayas = Wilaya::all();
        $categories = Category::all();
        return view('order-product',compact('products','wilayas','categories','qtes','prices','total'));
     }
}

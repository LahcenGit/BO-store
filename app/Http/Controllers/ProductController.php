<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function index(){
     $products = Product::with('category')->get();
     return view('admin.products',compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.add-product',compact('categories'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->categorie_id = $request->category;
        $product->qte = $request->qte;
        $product->price = $request->price;
        $product->description = $request->description;

        $hasFile = $request->hasFile('photo');
        $lien = '';

        if($hasFile){
            
            $path =  $request->file('photo');
            $name = $path->store('productimage');
            $lien = Storage::putFile('productimage',$path); 
            $product->photo = $lien;
            
         }
        $product->save();
        return redirect("dashboard-admin/products");
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
}

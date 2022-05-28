<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }

    public function create(){
        return view('admin.add-category');
    }

    public function store(Request $request){
      $category = new Category();
      $category->name = $request->name;
      $category->description = $request->description;
      $category->save();
      return redirect('dashboard-admin/category');
    }
}

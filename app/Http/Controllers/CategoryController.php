<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
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

    public function edit($id){
        $category = Category::find($id);
        return view('admin.edit-category',compact('category'));
    }

    public function update(Request $request , $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
      return redirect('dashboard-admin/category');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('dashboard-admin/category');
    }
}

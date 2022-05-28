<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $countproduct = Product::count();
        $revenue = Order::selectRaw('sum(total) as s')->first();
        $countorders = Order::count();
        $orderwaiting = Order::where('status', 'En Attente')->count();
        $ordervalidate = Order::where('status', 'Validé')->count();
        $ordercancel = Order::where('status', 'Annulé')->count();
        $orders = Order::with('product','wilaya')->limit('5')->orderBy('created_at','desc')->get();
        return view('admin.dashboard-admin',compact('countproduct','revenue','countorders','orderwaiting','ordervalidate','ordercancel','orders'));
    }
}

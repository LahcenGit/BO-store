<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $countproduct = Product::count();
        $revenu = OrderLine::selectRaw('sum(total) as s')->first();
        $countorders = Order::count();
        $orderwaiting = Order::where('status', 'En Attente')->count();
        $ordervalidate = Order::where('status', 'Validé')->count();
        $ordercancel = Order::where('status', 'Annulé')->count();
        $orders = Order::with('wilaya')->limit('5')->orderBy('created_at','desc')->get();
        return view('admin.dashboard-admin',compact('countproduct','countorders','orderwaiting','ordervalidate','ordercancel','orders','revenu'));
    }
}

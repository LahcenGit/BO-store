<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $orders = Order::with('product','wilaya')->get();
        return view('admin.orders',compact('orders'));
    }
    public function order($id){
        $product = Product::find($id);
        $wilayas = Wilaya::all();
        return view('order-product',compact('product','wilayas'));
    }

    public function store(Request $request){
        $order = new Order();
        $product = Product::where('id',$request->product)->first();
        $order->product_id = $request->product;
        $order->firstname =  $request->firstname;
        $order->lastname = $request->lastname;
        $order->status = 'En Attente';
        $order->wilaya_id = $request->wilaya;
        $order->adresse = $request->adresse;
        $order->phone = $request->phone;
        $order->qte = $request->qte;
        $order->total = $request->qte * $product->price;
        $order->save();
        $name = $request->firstname;
        return view('order-success',compact('name'));
    }

    public function edit($id){
        $order = Order::find($id);
        return view('admin.edit-order',compact('order'));
    }

    public function update(Request $request, $id){
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect('dashboard-admin/orders');
    }
}

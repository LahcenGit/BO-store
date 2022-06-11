<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    
   
    public function index(){
        $orders = Order::with('wilaya')->get();
        return view('admin.orders',compact('orders'));
    }
  

    public function store(Request $request){
        $order = new Order();
        $categories = Category::all();
        $order->firstname =  $request->firstname;
        $order->lastname = $request->lastname;
        $order->status = 'En Attente';
        $order->wilaya_id = $request->wilaya;
        $order->adresse = $request->adresse;
        $order->phone = $request->phone;
        $order->save();
        
        $count = count($request->qtes);
        for($i=0; $i<$count; $i++){
           $product = Product::where('name',$request->products[$i])->first();
           $orderline = new OrderLine();
           $orderline->order_id = $order->id;
           $orderline->product_id = $product->id;
           $orderline->qte = $request->qtes[$i];
           $orderline->price = $product->price;
           $orderline->total = $request->qtes[$i]*$product->price;
           $orderline->save();
          }
        $name = $request->firstname;
        return view('order-success',compact('name','categories'));
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

    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('dashboard-admin/orders');
    }

    public function orderLine($id){
        $orderlines = OrderLine::with('product')->where('order_id',$id)->get();
        $total = 0;
        foreach($orderlines as $orderline){
            $total = $total + $orderline->total;
        }

        
        return view('admin.modal-orderline',compact('orderlines','total'));
    }
}

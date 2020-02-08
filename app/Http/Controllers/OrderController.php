<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders= Order::all();
        return view('admin.order.index')->with('orders',$orders);
    }

    
    public function create()
    {
        $orders= Order::all();
        return view('admin.order.create')->with('orders',$orders);
    }

    
    public function store(Request $request)
    {
        $validation= $request->validate([
            'buyer'=>'required',
            'order_number'=>'required'
        ]);
        $order= new Order();
        $order->buyer=$request->input('buyer');
        $order->order_number=$request->input('order_number');
        $order->save();

        return redirect()->back()->with('success','You Buyer and Order id create successfully');
    }


    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

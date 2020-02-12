<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;
use App\Model\Gate;
use App\Model\Order;
use App\Model\Merchandiser;

class StoreController extends Controller
{
    
    public function index()
    {
        $store=Store::all();
        return view('admin.store.index')->with('store',$store);
    }

   
    public function create()
    {

        $gate_id = Gate::pluck('gate_seria','id'); 
        $order_number = Order::pluck('order_number','id'); 
        return view('admin.store.create')->with('order_number',$order_number)->with('gate_id',$gate_id);
    }

   public function h()
   {

    return 4587;
       # code...
   }
    
    public function store(Request $request)
    {
        $request->validate([
            'received_qty' => 'required||max:255',
            'mmr_no' => 'required',
        ]);

        $stores= new Store();
        $stores->gate_id=$request->input('gate_id');
        $stores->merchandiser_id=$request->input('merchandiser_id');
        $stores->received_qty=$request->input('received_qty');
        $stores->mmr_no=$request->input('mmr_no');
        $stores->save();

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

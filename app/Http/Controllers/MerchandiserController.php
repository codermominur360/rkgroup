<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Merchandiser;
use App\Model\Order;
use DB;

class MerchandiserController extends Controller
{
    
    public function index()
    {
        $order=Order::all();
        $merchendisar= Merchandiser::all();
         return view('admin.merchandiser.index')
                    ->with('merchendisar',$merchendisar)
                    ->with('order',$order);
                    
    }

    
    public function create()
    {        
        $buyer_name = DB::table('orders')->pluck('buyer', 'id');
        $order_number = DB::table('orders')->pluck('order_number', 'id');
        return view('admin.merchandiser.create')->with('buyer_name',$buyer_name)->with('order_number',$order_number);
    }

    //** buyer_id','order_id','item','size','qty','booking','actual_qty','file_no'* */

    public function store(Request $request)
    {
        
        $data= new Merchandiser();
        $data->buyer_id=$request->input('buyer_id');
        $data->order_id=$request->input('order_id');
        $data->item=$request->input('item');
        $data->size=$request->input('size');
        $data->qty=$request->input('qty');
        $data->booking=$request->input('booking');
        $data->actual_qty=$request->input('actual_qty');
        $data->file_no=$request->input('file_no');
        $data->save();
        dd($data);
        
        return redirect()->back()-with('message','Item created successfully !');

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

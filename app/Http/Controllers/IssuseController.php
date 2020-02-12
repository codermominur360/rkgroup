<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Issuse;
use App\Model\Store;
use App\Model\Order;
use App\Model\Merchandiser;
use DB;


class IssuseController extends Controller
{
   
    public function index()
    {
        $issuse = DB::table('issuses')
            ->join('orders', 'issuses.order_id', '=', 'orders.id')
            ->join('merchandisers', 'issuses.id', '=', 'merchandisers.id')
            ->join('gates', 'issuses.id', '=', 'gates.id')
            // ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        return view('admin.issuse.index')->with('issuse',$issuse);
    }

     
    public function create()
    {
       
        $store_rec_qty= Store::pluck('merchandiser_id');
        $actual_qty   = Merchandiser::pluck('actual_qty','id');
        $merchan_qty  = Merchandiser::pluck('qty');
        return view('admin.issuse.create')
            ->with('store_rec_qty',$store_rec_qty)
            ->with('actual_qty',$actual_qty)
            ->with('merchan_qty',$merchan_qty)
            ->with('order_num',$order_num);
    }
 
    public function store(Request $request)
    {
        //
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

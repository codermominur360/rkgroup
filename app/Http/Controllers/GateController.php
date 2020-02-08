<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Gate;

class GateController extends Controller
{
    
    public function index()
    {
        $gateData= Gate::all();
        return view('admin.gate.index')->with('gateData',$gateData);
    }

    
    public function create()
    {
        $gateData=Gate::all();
        return view('admin.gate.create')->with('gateData',$gateData);
    }

 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_number' => 'required',
            'chalan' => 'required',
            'gate_seria' => 'required',
        ]);

        $gate= new Gate();
        $gate->order_number=$request->input('order_number');
        $gate->chalan=$request->input('chalan');
        $gate->gate_seria=$request->input('gate_seria');
        $gate->save();

        return redirect()->back()->with('success','Current Order Id Match the Order list');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $data= Gate::find($id);
        return view('admin.gate.edit')->with('data', $data);
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

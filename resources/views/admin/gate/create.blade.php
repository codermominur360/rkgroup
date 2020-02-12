@extends('admin.layout.app')

@section('CssScript')

@stop

@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#"> Gate </a>
                </li>
                <li class="active"> / Create</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
        <h4 class="text-center">Course Insert Form</h4>
            @if (session()->has('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
         <hr>
            <div class="row justify-content-center">
                {!! Form::open(['action'=>'GateController@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => ' form-inline']) !!}
                    <div class="form-row">
                        <div class="col"> 
                            {{Form::select('order_number',$order_numeber,
                            null,
                            ['class' => ' form-control custom-select'], ['placeholder' => 'Please Select Status'])}}
                        </div>
                        <div class="col">
                        {{Form::text('chalan', '', ['class' => 'form-control', 'placeholder' => 'Enter Chalan'])}}
                        </div>
                        <div class="col">
                        {{Form::text('gate_seria', '', ['class' => 'form-control', 'placeholder' => 'Enter Gate serial'])}}
                        </div>
                        <div class="col">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <!--End Form Row   -->

            <!-- Start Oroder content list  -->
            <div class="content mt-3">
            <h4>Order list</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Serial Num</th>
                    <th scope="col">Order</th>
                    <th scope="col">Chalan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($gateData as $data)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$data->order_number}}</td>
                    <td>{{$data->gate_seria}}</td>
                    <td>{{$data->chalan}}</td>
                    <td>
                        <a href="/gate/{{$data->id}}/edit" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i></a>
                    </td>
                    </tr>
                @endforeach()    
                </tbody>
            </table>
            </div>
        </div><!-- /.page-content -->
    </div>
@endsection

@section('JScript')
     
@stop

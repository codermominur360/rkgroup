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
            <h4 class="text-center">Buyer and Order Create</h4>
                @if (session()->has('success'))
                <p class="alert alert-success sessionOut">{{ session('success') }}</p>
                @endif
            <hr>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                {!! Form::open(['action'=>'OrderController@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => ' form-']) !!}
                    <div class="form-group row">
                        {{Form::label('buyer', 'Buyer Name:',['class' => 'col-sm-3 text-right control-label col-form-label'])}}
                        <div class="col-sm-9">
                        {{Form::text('buyer', '', ['class' => 'form-control', 'placeholder' => 'Buyer Name'])}}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{Form::label('order_number', 'Order Number :',['class' => 'col-sm-3 text-right control-label col-form-label'])}}
                        <div class="col-sm-9">
                        {{Form::text('order_number', '', ['class' => 'form-control', 'placeholder' => 'Order Id'])}}
                        </div>
                    </div>

                    <hr>
                    <p class="text-center">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </p>

                    {!! Form::close() !!}
                </div>
            </div>
             
            <!--End Form Row   -->

            <!-- Start Oroder content list  -->
            <div class="content mt-3">
            <h4>Order list</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Buyer Name</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($orders as $order)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$order->buyer}}</td>
                    <td>{{$order->order_number}}</td>
                    <td>
                        <a href="/gate/{{$order->id}}/edit" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i></a>
                    </td>
                    </tr>
                @endforeach()    
                </tbody>
            </table>
            </div>
        </div><!-- /.page-content -->
    </div>
@endsection

@section('JsScript')
     
<script src="text/javascript">
 alert(dd);
</script>
@stop

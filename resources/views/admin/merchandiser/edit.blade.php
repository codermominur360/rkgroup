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
            
         <hr>
            <div class="row justify-content-center">
                {!! Form::open(['action' => ['GateController@update', $data->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-row">
                        <div class="col">
                            {{Form::text('order_number', $data->order_number, ['class' => 'form-control ', 'placeholder' => 'Order Number','disabled'])}}
                        </div>
                        <div class="col">
                        {{Form::text('chalan', $data->chalan, ['class' => 'form-control', 'placeholder' => 'Order Number'])}}
                        </div>
                        <div class="col">
                        {{Form::text('gate_seria', $data->gate_seria, ['class' => 'form-control', 'placeholder' => 'Serial Number'])}}
                        </div>
                        <div class="col">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
            <!--End Form Row   -->
        </div><!-- /.page-content -->
    </div>
@endsection

@section('JScript')
     
@stop

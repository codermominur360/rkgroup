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
        <h4 class="text-center msg">Course Insert Form</h4>
            @if (session()->has('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
         <hr>
         <!-- ['gate_id','merchandiser_id','received_qty','mmr_no']; -->
           <div class="row">
                <div class="col-lg-4">
                    <div class=" justify-content-center">
                        {!! Form::open(['action'=>'StoreController@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => ' ']) !!}
                            <div class="form-row">
                                <div class="col-lg-6 mt-1">
                                {{Form::select('order_id',
                                $order_num,
                                null,
                                ['class' => 'select2 form-control custom-select', 'placeholder'=>'Order Number','id'=>'merchendiserDataShow', 'onchange'=>'test(this.value)'])}}
                                </div>                              
                                {{-- <div class="col-lg-12 mt-1">
                                    {{Form::text('store_qty', $store_rec_qty, ['class' => 'form-control','id'=>'stor_qty','placeholder' => 'Receive Quantity'])}}
                                </div>

                                <div class="col-lg-12 mt-1">
                                    {{Form::text('marchen_qty', $merchan_qty, ['class' => 'form-control','id'=>'mar_qty','placeholder' => 'mmr '])}}
                                </div>

                                <div class="col-lg-12 mt-1">
                                    {{Form::text('total_qty', $actual_qty , ['class' => 'form-control', 'id'=>'act_qty','placeholder' => 'mmr '])}}
                                </div>
                                 --}}
                                <div class="col d-block mt-1">
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-8 "> 
                <table class="table ml-2">
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
                        <tr>
                           <td>dd</td>
                           <td>dd</td>
                           <td>dd</td>
                           <td>dd</td>
                           <td>dd</td>
                        </tr>
                    </tbody>
                </table>               
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
                    <th scope="col">Serial Num</th>
                    <th scope="col">Order</th>
                    <th scope="col">Chalan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
                        
                </tbody>
            </table>
            </div>
        </div><!-- /.page-content -->
    </div>


@endsection

@section('JsScript')
<script>
    const merchandiser_id= document.querySelector('#merchendiserDataShow');
    const stor_qty= document.querySelector('#stor_qty');
    const mar_qty= document.querySelector('#mar_qty');
    const act_qty= document.querySelector('#act_qty');
    const msg= act_qty.value+mar_qty.value;
    console.log(msg);
    
console.log();
    function test(val){
        console.log(val);
        
    // $.ajax({
    //     url:'/',
    //     method:'GET',
    //     dataType: 'JSON',
    //     data: val,
    //     success:function(data){
    //         console.log(data);
    //     }
    // });
        }
</script>
@stop

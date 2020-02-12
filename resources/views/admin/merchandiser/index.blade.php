@extends('admin.layout.app')

@section('CssScript')

@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">Company Member list<a href="merchandiser/create" class="btn btn-primary ml-5">Create</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Buyer name</th>
                                <th>Order Number</th>
                                <th>File Number</th>
                                <th>Item</th>
                                <th>Size</th>
                                <th>Qty</th>
                                <th>Booking</th>
                                <th>Actual QTy</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <!-- item','size','qty','booking','actual_qty','file_no' -->
                            <tbody>
                                @if(count($merchendisar) > 0) 
                                   @foreach($merchendisar as $data)
                                        <tr>
                                            <td>{{$data->i++}}</td>
                                            <td>{{$data->order->buyer}}</td>
                                            <td>{{$data->order->order_number}}</td>
                                            <td>{{$data->file_no}}</td>
                                            <td>{{$data->item}}</td>  
                                            <td>{{$data->size}}</td>  
                                            <td>{{$data->qty}}</td>  
                                            <td>{{$data->booking}}</td> 
                                            <td>{{$data->actual_qty}}</td>  
                                            <td>
                                            <a href="/member/{{$data->id}}/edit" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <h3 class="btn btn-danger d-block"> You have no data yet now! </h3>
                                @endif
                            
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection



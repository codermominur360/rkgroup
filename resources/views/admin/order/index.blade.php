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
                        <h3 class="box-title">Order Table<a href="/order/create" class="btn btn-primary ml-5">Create</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>buyer</th>
                                <th>order_number</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($orders) > 0)
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->i++}}</td>
                                            <td>{{$order->buyer}}</td>
                                            <td>{{$order->order_number}}</td> 
                                            <td>
                                            <a href="/member/{{$order->id}}/edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>  
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <h3 class="btn btn-denger"> Buyer and Order is empty</h3>
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

@section('JScript')
    

@stop

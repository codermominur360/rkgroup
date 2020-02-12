@extends('admin.layout.app')

@section('CssScript')

@stop

@section('content')
    <!-- Main content -->
    <section class="content card p-2">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">Company Member list<a href="/store/create" class="btn btn-primary ml-5">Create</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Buyer Name</th>
                                <th>Oerder Id </th>
                                <th>Received qty</th>
                                <th>Item</th>
                                <th>File No</th>
                                <th>Gate Serial</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th> Actual Quantity</th>
                                <th>Chalan Number</th>
                                <th>Gate Serial</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($issuse) > 0)
                                    @php($i=1)
                                    @foreach($issuse as $data)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$data->buyer}}</td>
                                            <td>{{$data->order_id}}</td>
                                            <td>{{$data->merchandiser_id}}</td>
                                            <td>{{$data->item}}</td>
                                            <td>{{$data->file_no}}</td>
                                            <td>{{$data->gate_id}}</td>
                                            <td>{{$data->size}}</td>
                                            <td>{{$data->qty}}</td>  
                                            <td>{{$data->actual_qty}}</td>
                                            <td>{{$data->chalan}}</td>
                                            <td>{{$data->gate_seria}}</td>
                                            <td>
                                            <a href="/gate/{{$data->id}}/edit" class="btn btn-info btn-sm">Edit</a>  
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <h3 class="btn btn-danger d-block">You Have Not Data Yet Now!</h3>
                                @endif
                            
                            </tbody> 
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

@section('JsScript')


@stop

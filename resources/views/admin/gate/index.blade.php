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
                        <h3 class="box-title">Company Member list<a href="gate/create" class="btn btn-primary ml-5">Create</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Order Number</th>
                                <th>Chalan </th>
                                <th>Gate Serial</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($gateData) > 0)
                                    @php(i==1);
                                    @foreach($gateData as $data)
                                        <tr>
                                            <td>{{$data->i++}}</td>
                                            <td>{{$data->order_number}}</td>
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
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Order Number</th>
                                <th>Chalan </th>
                                <th>Gate Serial</th>
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

@section('JsScript')
   

@stop

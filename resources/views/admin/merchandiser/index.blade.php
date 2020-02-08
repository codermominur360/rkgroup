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
                        <h3 class="box-title">Company Member list<a href="member/create" class="btn btn-primary ml-5">Create</a></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>name</th>
                                <th>position</th>
                                <th>image</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($merchendisar)>0)
                                    
                                    @foreach($merchendisar as $data)
                                        <tr>
                                            <td>{{$data->i++}}</td>
                                            <td>{{$data->order}}</td>
                                            <td>{{$data->position}}</td>  
                                            <td>{{$data->status}}</td>
                                            <td>
                                            <a href="/member/{{$data->id}}/edit" class="btn btn-info btn-sm">Edit</a> 
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



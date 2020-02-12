@extends('admin.layout.app')

@section('CssScript')

@stop

@section('content')
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#"> Merchandiser </a>
                </li>
                <li class="active"> / Create</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <h4 class="text-center message">Merchandiser Item Create</h4>

                @if (session()->has('success'))
                <p class="alert alert-success sessionOut">{{ session('success') }}</p>
                @endif
            <hr>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                {!! Form::open(['action'=>'MerchandiserController@store','method' => 'POST', 'enctype' => 'multipart/form-data','id'=>'insertmerchandiser', 'class' => ' form-']) !!}
                    <div class="form-group row">
                        {{Form::label('buyer', 'Course :',['class' => 'col-sm-3 text-right control-label col-form-label'])}}
                        <div class="col-sm-9">
                            {{Form::select('buyer_id',
                            $buyer_name,
                            null,
                            ['class' => 'select2 form-control custom-select', 'placeholder' => 'Please Select Status'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('buyer', 'Course :',['class' => 'col-sm-3 text-right control-label col-form-label'])}}
                        <div class="col-sm-9">
                            {{Form::select('order_id',
                            $order_number,
                            null,
                            ['class' => 'select2 form-control custom-select', 'placeholder' => 'Please Select Status'])}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{Form::label('file_no', 'File Number :',['class' => 'col-sm-3 text-right control-label col-form-label'])}}
                        <div class="col-sm-9">
                            {{Form::text('file_no','',['class' => 'select2 form-control custom-select', 'placeholder' => 'Please Select Status'])}}
                        </div>
                    </div>

                    <!-- mercherdiser Item added -->
                    <table>
                        <tbody>
                            <tr>
                                <td><input type="text" name="item" class="form-control" placeholder=" Item "></td>
                                <td><input type="text" name="qty" class="form-control" placeholder=" 1.5kg"></td>
                                <td><select name="size" id="" class="form-control">
                                    <option value="">Select One</option>
                                    <option value="s">s</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xxl">XXL</option>
                                </select></td>
                                <td><select name="booking" id="" class="form-control">
                                    <option value="">Select One</option>
                                    <option value="1">booking</option>
                                    <option value="0">pending</option>
                                </select></td>
                                <td><input type="text" name="actual_qty" class="form-control"  placeholder=" actual_qty"></td>
                                <td><button id="remove" class="btn btn-danger"> X </button></td>
                                <button id="addItem" class="btn btn-success"> + </button>

                            </tr>
                        </tbody>
                    </table>
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
             
            </div>
        </div><!-- /.page-content -->
    </div>
@endsection

@section('JsScript')
    <script scr="text/javascript">
        $(document).ready(function(){
            $('#addItem').on('click',function(e){
                e.preventDefault();
                var html='';
                html+='<tr>';
                html+='<td><input type="text" name="item" class="form-control" placeholder=" item Name"></td>';
                html+='<td><input type="text" name="qty" class="form-control" placeholder="qty"></td>';
                html+='<td><select name="size" id="" class="form-control"><option value="">Select One</option><option value="s">s</option><option value="m">M</option><option value="l">L</option><option value="xxl">XXL</option></select></td>';
                html+='<td><select name="booking" id="" class="form-control"><option value="">Select One</option><option value="1">booking</option><option value="0">pending</option></select></td>';
                html+='<td><input type="text" name="actual_qty" class="form-control" placeholder="actual_qty"></td>';
                html+='<td><button id="remove" class="btn btn-danger"> X </button></td>';

                html+='</tr>';
                $('tbody').append(html);
            });
        });
        $(document).on('click','#remove',function(e){
            e.preventDefault();
            $(this).closest('tr').remove();
        });
         
            $(document).on('submit','#insertmerchandiser',function(){ 
                var data=$(this).serialize();
                $.ajax({
                    url:"{{URL::to('MerchandiserController@store')}}",
                    method:'POST',
                    data:data,
                    type:'json',
                    success:function(data){
                        console.log(data);
                        // var html= '';
                        // if(data.errors){
                        //     html+='<div class="page-content">';
                        //     for(var i=0; i<data.rerrors.length; i++){
                        //         html+='<h4 class="text-center message">'+data.errors[i]+'</h4>';
                        //     }
                        //     html+='</div>';
                        // }
                        // if(data.success){
                        //     html='<h4 class="text-center message">'+data.errors[i]+'</h4>';
                        //     $('#insertmerchandiser')[0].reset();
                        // }

                    }
                })
            });
    
        


    </script>
@endsection()



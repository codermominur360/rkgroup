@extends('layout.app')

@section('CssScript')

@stop

@section('content')
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Supplier Profile</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">


                <div class="page-header">
                    <h1>
                        Supplier Profile
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <h1 class="text-center text-success text-capitalize">{{$supplier->supplier_name}}</h1>

                        <div>
                            <div id="user-profile-1" class="user-profile row">

                                <div class="col-xs-12 col-sm-2"></div>
                                <div class="col-xs-12 col-sm-8">

                                    <div class="space-12"></div>

                                    <div class="profile-user-info profile-user-info-striped">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Supplier Name </div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->supplier_name}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Supplier Code </div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->supplier_code}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Contact Person </div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->contact_person}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Primary Contact</div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->primary_contact}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Secondary Contact</div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->secondary_contact}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Designation</div>

                                            <div class="profile-info-value">
                                                <span class="text-capitalize">{{$supplier->designation}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name">Amount</div>

                                            <div class="profile-info-value">
                                                <span class="text-capitalize">{{$supplier->amount}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Address </div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span class="text-capitalize">{{$supplier->supplier_address}}</span>

                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Joined </div>

                                            <div class="profile-info-value">
                                                <span>{{$supplier->created_at}}</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Edit </div>

                                            <div class="profile-info-value">
                                                <a href="/supplier/{{$supplier->id}}/edit" class="btn btn-info">Edit</a>
                                                <a href="/supplier/create" class="btn btn-secondary">Add Anther Supplier</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-20"></div>

                                </div>
                            </div>
                        </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
@endsection

@section('JScript')

@stop

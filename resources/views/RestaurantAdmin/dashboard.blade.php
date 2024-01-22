@extends('RestaurantAdmin.layout.Restaurant2')
     

            
        
@section('content')



<div class="page-container2"style="margin-top:100px;">
    <!-- HEADER DESKTOP-->
   
    <!-- END HEADER DESKTOP-->

    <!-- BREADCRUMB-->
    {{-- <section class="au-breadcrumb m-t-75">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">{{$restname}}</li>
                                </ul>
                            </div>
                            
                            <a class="au-btn au-btn-icon au-btn--green" href="{{ route('dashboard.foodcreate')}}"><i class="zmdi zmdi-plus"></i>Add Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END BREADCRUMB-->

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Total orders</h6>
                                    <h2>{{$totalOrders}}</h2>
                                </div>
                                <div class="icon">
                                    {{-- <i class="ik ik-award"></i> --}}
                                    <i class="ik ik-calendar"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">6% higher than last month</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Customers</h6>
                                    <h2>{{$NumOfCustomer}}</h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-user"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">61% higher than last month</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Gain <small>this week</small></h6>
                                   
                                    <h2>{{$totalPrice}} {{$currency}} </h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-dollar"></i>
                                </div>
                            </div>
                            {{-- <small class="text-small mt-10 d-block">Total Events</small> --}}
                            <small class="text-small mt-10 d-block">70% higher than last month</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Comments</h6>
                                    <h2>3</h2>
                                </div>
                                <div class="icon">
                                    <i class="ik ik-message-square"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">Total Comments</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="state">
                                    <h6>Likes</h6>
                                    <h2>41</h2>
                                </div>
                                <div class="icon">
                                    {{-- <i class="ik ik-message-square"></i> --}}
                                    <i class="ik ik-thumbs-up"></i>
                                </div>
                            </div>
                            <small class="text-small mt-10 d-block">Total Comments</small>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- END STATISTIC-->



  


    <!-- END PAGE CONTAINER-->
</div>
             

@endsection
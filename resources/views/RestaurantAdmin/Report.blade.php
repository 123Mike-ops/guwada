      
@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')

      
            <div class="col-lg-9" style="margin-left:300px;">
                <h2 class="btn btn-primary" class="title-1 m-b-25">Reports this {{$status}} </h2><hr /><br />
                {{-- <h3 class="btn btn-info"class="title-1 m-b-25">Delivery Report</h3><br />
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                            <tr>
                                <th>Date</th>
                                <th>Total Orders</th>
                                <th>Total Items</th>
                                <th>Total Price Gain</th>
                                <th>More</th>
                            </tr>
                        <tbody>
                            <tr style="background-color:rgb(224, 202, 196)">
                            <td>{{$today}}</td>
                            <td>{{$totalOrders}}</td>
                            <td>{{$totalOrderQuantity}}</td>
                            <td>{{$totalOrderPrice}} Birr</td>
                            <td><a class="btn btn-info" style="color:white;">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div><br /> --}}
               
                <div class="table-responsive table--no-card m-b-40">
                    <h3 class="btn btn-success">Booking Report</h3><br />
                    <table class="table table-borderless table-striped table-earning">
                        <tr>
                        <th>Date</th>
                        <th>Total Bookings</th>
                        <th>Total Items</th>
                        <th>Total Price Gain</th>
                        <th>More</th>
                        </tr>
                    <tbody>
                        <tr>
                        <td>{{$today}}</td>
                        <td>{{$totalBookings}}</td>
                        <td>{{$totalBookingQuantity}}</td>
                        <td>{{$totalBookingPrice}} Birr</td>
                        <td><a class="btn btn-success" style="color:white;">Details</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <h3 class="btn btn-warning">All</h3><br />
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table table-borderless table-striped table-earning">
                        <tr>
                        <th>Date</th>
                        <th>Grand Total Orders</th>
                        <th>Grand Total Item</th>
                        <th>Grand Total Price Gains</th>
                        <th>More</th>
                        </tr>
                    <tbody>
                        <tr style="background-color:rgb(228, 199, 163)">
                        <td>{{$today}}</td>
                        <td>{{$GrandTotalBookingOrder}}</td>
                        <td>{{$GrandTotalQuantity}}</td>
                        <td>{{$GrandTotalPrice}} Birr</td>
                        <td><a class="btn btn-warning" style="color:white;">Details</a></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6" style="margin-left:300px;">
                <div class="au-card recent-report">
                    <div class="au-card-inner">
                        <h3 class="title-2">recent reports</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot--green"></span>
                                    <span>services</span>
                                </div>
                            </div>
                            <div class="chart-info__right">
                                <div class="chart-statis">
                                    <span class="index incre">
                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                    <span class="label">products</span>
                                </div>
                                <div class="chart-statis mr-0">
                                    <span class="index decre">
                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                    <span class="label">services</span>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>



@endsection
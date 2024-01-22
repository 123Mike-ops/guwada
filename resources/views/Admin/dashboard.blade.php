@extends('Admin.layout.Adminapp')


@section('content')
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


    

            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                            <h2 class="number">{{$NumberOfCustomer}}</h2>
                                <span class="desc">cutomers</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                            <h2 class="number">{{$RestaurantNumber}}</h2>
                                <span class="desc">Restaurants</span>
                                {{-- <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div> --}}
                                    <i class='fas fa-hamburger' style='font-size:48px;color:orange'></i>
                                
                            </div>
                        </div>
                     
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">388,688</h2>
                                <span class="desc">items Delivered</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">orders to All Restaurants this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total Comission earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            {{-- <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
              
                </div>
            </section> --}}
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container"style="margin-left:120px;">
                    <div class="row" >
                        <div class="col-md-12" >
                            <h3 class="title-5 m-b-35">Restaurant table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                  <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{route('create.restaurant')}}"><i class="zmdi zmdi-plus"></i>Add Restaurant</a>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2" >
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                             
                                            </th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>description</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>currency</th>
                                            <th>approximateDeliveryTime</th>
                                            <th>chargeType</th>
                                            <th>pricePerKm</th>
                                            <th>minOrderPrice</th>
                                            <th>minOrderAmount</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($restaurants as $restaurant)
                                        <tr class="tr-shadow">
                                            <td>
                                                {{-- <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label> --}}
                                            </td>
                                            <td>{{$restaurant['name']}}</td>
                                            <td>
                                                <span class="block-email">{{$restaurant['email']}}</span>
                                            </td>
                                            <td class="desc">{{$restaurant['description']}}</td>
                                            <td>{{$restaurant['phone']}}</td>
                                            <td>{{$restaurant['address']}}</td>
                                            <td>{{$restaurant['currency']}}</td>
                                            <td>{{$restaurant['approximateDeliveryTime']}}</td>
                                            <td>{{$restaurant['chargeType']}}</td>
                                            <td>{{$restaurant['pricePerKm']}}  {{$restaurant['currency']}}</td>
                                            <td>{{$restaurant['minOrderPrice']}} {{$restaurant['currency']}} </td>
                                            <td>{{$restaurant['minOrderAmount']}}</td>
                                            <td>
                                                <span class="status--process">Processed</span>
                                            </td>
                                        
                                            <td>
                                                <div class="table-data-feature">
                                                    <a ><button  class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button></a>
                                                    <a href="{{ route('restaurant.edit',['id'=>$restaurant['id']])}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
    <br /><br /><br />


                      
                    </div>
                </div>
            </section>
        
            @endsection
       
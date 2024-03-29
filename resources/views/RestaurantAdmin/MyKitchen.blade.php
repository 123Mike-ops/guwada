@extends('RestaurantAdmin.layout.Restaurant2')
@section('content')
<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30" style="width:800px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Main Kitchen</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Managment</li>
                            </ul>
                        </div>
                        
                    <a href="{{route('mykitchen.modifyitem',['name'=>$name])}}"style="color:white" class="au-btn au-btn-icon au-btn--green">
                        <i class="zmdi zmdi-plus"></i>Modify Item</a>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="statistic statistic2">
    <div class="container">
        <div class="row" style="margin-left:100px;">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--green">
                    <h2 class="number">10,368</h2>
                    <span class="desc">Kitchen Response To Orders</span>
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">388,688</h2>
                    <span class="desc">Current Orders</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--orange">
                    <h2 class="number">388,688</h2>
                    <span class="desc">Stock Status</span>
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--blue">
                    <h2 class="number">1,086</h2>
                    <span class="desc">Chefs Status</span>
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item statistic__item--red">
                    <h2 class="number">$1,060,386</h2>
                    <span class="desc">Ingrident needed</span>
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
@extends('MainBox.layout.app')
@section('content')

<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>You Subscribed to this Restaurants</h2>
                    <p>Simply you can get them and get more benefit</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($subscription as $subscribe)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-box-inner">
                        <div class="blog-img-box">
                            <img class="img-fluid" src="{{asset('live-dinner/images/blog-img-01.jpg')}}" alt="">
                        </div>
                        <div class="blog-detail">
                            <h4>{{$subscribe->restname}}</h4>
                            <ul>
                                <li><span>Found in:</span></li>
                                <li>|</li>
                                <li><span>{{$subscribe->address}}</span></li>
                            </ul>
                        
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('myrestaurant.show',['restId'=>$subscribe->restaurantId,'useremail'=>$subscribe->email,'restname'=>$subscribe->restname])}}">Join us Today</a>
                        </div>
                    </div>
                <a class="btn btn-info" href="{{route('unsubscribe.me',['email'=>$subscribe->email,'restId'=>$subscribe->restaurantId])}}"> UNSUBSCRIBE </a>
                </div>
            @endforeach
            
            
            
            
           
    
        </div>
    </div>
</div>
@endsection
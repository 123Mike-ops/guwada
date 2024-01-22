@extends('MainBox.layout.app')
@section('content')
	@if(Auth::check())
		<div class="blog-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="padding-top: 100px;">
						<div class="heading-title text-center">
							{{-- <h2>Blog</h2> --}}
							<h1>Best  Restauranat For <h2  style="color:orange;"+><b>{{$foodname}}</b></h2> Near By you !</h1>
						</div>
					</div>
				</div>
				
				<hr >
				
				{{-- <div class="row">
					@foreach($restaurants as $restaurant)
					<div class="blog-box-inner" style="width:350px;">
						
							<div class="blog-img-box">
								<img class="img-fluid" src="{{ asset('uploads/Restaurant/'.$restaurant->image)}}" style="height:250px;width:330px;"  alt="image">
							</div>
							
							<div class="blog-detail">

					
								<h1>{{$restaurant->name}}</h1>

								<ul>
									<li><h4> Mode:</h4></li>
									<li>|</li>
									<li><h5>{{$restaurant->description}}</h5></li>
								</ul>

								<p><h2>{{ $restaurant->address}}</h2> </p>
							
								<a class="btn btn-lg btn-circle btn-outline-new-white" href="{{ route('kitchen.show', ['id'=>$restaurant->id] ) }}">Go there</a>
							</div>
					</div>
					@endforeach	
				</div> --}}
				<div class="row">
					@foreach($restaurants as $restaurant)
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="{{ asset('uploads/Restaurant/'.$restaurant->image)}}" alt="Card image cap">
							<div class="card-body">
							<h5 class="card-title">{{$restaurant->name}}</h5>
							<p class="card-text">{{$restaurant->address}}</p>
							<a href="{{ route('kitchen.show', ['id'=>$restaurant->id,'foodId'=>$foodId])}}" class="btn btn-warning">Go there</a>
							</div>
						</div>
						<br />
					@endforeach	
				</div>
			</div>
		</div>
	@endif

@endsection

@extends('MainBox.layout.app')
@section('content')


	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				@foreach($foods as $food)
				<div class="col-lg-12" style="height:0px;">
				<h1>{{$food->restaurant}}</h1>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!-- End All Pages -->
	
	<!-- Start blog -->
	
	<div class="blog-box">
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2></h2>
						<p>we are found anywhere you are...</p>
						<span style="width:300px;">Your Cart Seesion <h2 style="color:orange;">{{$restname}}</h2><a href="{{route('RemoveAll.Cart',['id'=>$userId])}}"class="btn btn-danger">Cancel</a></span>
				<br />
					</div>
				</div>
			</div>
			<h2 style="color:orange;">If You Need More Add To your cart from the Following,  Else Check and Confirm Your Cart!</h2><hr />
				
			<div class="row">
	
                @foreach($foods as $food)
					<div class="col-lg-4 col-md-6 col-12" >
						<div class="blog-box-inner"  >
							<div class="blog-img-box">
								<img class="img-fluid" src="{{ asset('uploads/Food/'.$food->image)}}" alt="">
							</div>
							<div class="blog-detail">
								<h4>{{$food->name}}</h4>
								<ul>
									<li><span>Price</span></li>
									<li>|</li>
									<li><span>{{$food->unitPrice}}</span></li>
								</ul>
								
								<p>{{$food->description}} </p>
								<a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('kitchen.show', ['id'=>$restId,'foodId'=>$food->id])}}">Get</a>
							</div>
						</div>
					</div>
                @endforeach
			</div>
		</div>
	</div>

@endsection
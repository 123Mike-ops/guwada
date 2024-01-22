@extends('MainBox.layout.app')
@section('content')


	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="margin-top:90px;">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<br ><br >
						
						{{-- <div class="blog-search-form">
							<input name="search" placeholder="Search for Foods and Drinks" type="text">
							<button class="search-btn">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div> --}}

						<form action="{{ route('Chooser.search')}}" method="POST" role="search">
							{{ csrf_field() }}
							<div class="input-group">
								<input type="text" class="form-control" name="q"
									placeholder="Search foods"> <span class="input-group-btn">
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-search">Search</span>
									</button>
								</span>
							</div>
						</form>
						
						<div class="container">
							@if(isset($details))
								<p> Here Are Restaurants for your need <b> {{ $query }} </b> </p>
								{{-- <h2>Sample User details</h2> --}}
								<table class="table table-striped">
									<thead>
										<tr>
											{{-- <th>Name</th> --}}
											{{-- <th>Type</th> --}}
										
										
										</tr>
									</thead>
									<tbody>
										@foreach($details as $foods)
									
											<tr style="background-color: rgb(207, 195, 184)">
										
											<td ><h3><b>{{$foods->name}}</b></h3></td>
											<td ><h3  class="btn btn-success" >Available On Enat Guwada</h3></td>
											<td><a class="btn btn-warning" href="{{ route('restaurant.show',['id'=>$foods->id])  }}">Find Best Restaurant</a></td>
											</tr>
									  	@break
										@endforeach
									</tbody>
								</table>
							@else
							{{-- <p> There is no results for your search </p> --}}

							@endif
						</div>
				
					</div>
				</div>
			</div>

		@if(Auth::check())

			<div class="row inner-menu-box" style="height:700px;">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Menus</a>
						{{-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Drinks</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lunch</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dinner</a> --}}
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
							
					
							
				
								
							@foreach ($myfood as $food)
							
								<div class="col-lg-4 col-md-6 special-grid lunch">
									
									<div class="gallery-single fix">
										<img src="{{ asset('uploads/Food/'.$food->image)}}" style="height:250px;"class="img-fluid" alt="Image">
										<div class="why-text">

										
											

										</div>
									</div>
									</a>
									<h3>{{$food->name}}</h3>
											{{-- <h4>{{$food['name']}}</h4> --}}
												<p style="color:orange;">{{$food->description}}</p>
												<h5> {{$food->unitPrice}} Birr</h5>
												<h6> {{$food->rate}}<h6>
													<a class="btn btn-success btn-sm" href="{{ route('restaurant.show',['id'=>$food->id])}}">Order</a>
								</div>
								
							@endforeach
							
								<hr>
								
					
								
							
							</div>
							
						</div>



				


	
					</div>
				</div>
			</div>
		@endif
		</div>
	</div>


@endsection
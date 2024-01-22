@extends('Guest.layout')
@section('content')
	
	<div style="margin-left:0px;" class="content">
			{{-- <p class="info">Please choose a category</p> --}}
			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				
						<div class="row">]
							@foreach ($myfood as $food)
							
													<div class="col-lg-4 col-md-6 special-grid lunch">
														<div class="gallery-single fix">
															<img height=100px width=250px src="{{ asset('uploads/Food/'.$food->image)}}" style="height:250px;"class="img-fluid" alt="Image">
															<div class="why-text">	</div>
														</div>
														</a>
														<h3>{{$food->name}}</h3>
																{{-- <h4>{{$food['name']}}</h4> --}}
																	<p style="color:orange;">{{$food->description}}</p>
																	<h5> {{$food->unitPrice}} Birr</h5>
															
																<a class="btn btn-success" href="{{ route('type.showGuest',['food_id'=>$food->id,'restId'=>1,'userId'=>Auth::user()->id])}}">Order</a>
													</div>
												
											@endforeach
						</div>
						
					</div>
				</div>
			</div>
			<!-- Ajax loaded content here -->
		</div>
	
@endsection
	
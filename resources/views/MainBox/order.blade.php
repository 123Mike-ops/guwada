@extends('MainBox.layout.app')
@section('content')
<body>
	


	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">	
							<div class="col-lg-6"  style="margin-left:23%;margin-top:200px;">
								<div class="card">
									<div class="card-header">Delivery Card</div>
									<div class="card-body">
										<div class="card-title">
											<h3 class="text-center title-2">Confirm</h3>
										</div>
										<hr>
									@if($check=="[]")
										<div class="col-lg-3 col-md-6">
											<h3>Subscribe Us </h3>
											<div class="subscribe_form">
												<form class="subscribe_form">
													{{-- <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email"> --}}
												<a href="{{route('Add.Customer',['restId'=>$restId,'userId'=>Auth::user()->id])}}" type="submit" class="submit">SUBSCRIBE</a>
													<div class="clearfix"></div>
												</form>
											</div>
										
										</div>
									@endif 
									
									
										

										
										
										

										<form action="{{route('delivery.post',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'restname'=>$restname])}}" method="post" novalidate="novalidate">
											@csrf
											{{-- <div class="form-group">
												<label for="cc-payment" class="control-label mb-1"><b>Ordered By: </b></label>

												<label for="cc-payment" class="control-label mb-1"></label>
												
											</div>
											<div class="form-group has-success">
												<label for="cc-name" class="control-label mb-1"><b>Item:</b></label>
												<label for="cc-name" class="control-label mb-1"></label>
											</div>
											<div class="form-group has-success">
												<label for="cc-name" class="control-label mb-1"><b>Deliverd From:</b></label>
												<label for="cc-name" class="control-label mb-1"></label>
											</div>
											 --}}
											
											<div class="row">
											
												<div class="col-6">
													<label for="x_card_code" class="control-label mb-1">Quantity</label>
													<div class="input-group">
														<input id="x_card_code" name="quantity" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
															data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

													</div>
												</div>
											</div>
											<br /><br />
									
								
									
										
											<div>
												<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
													{{-- <i class="fa fa-lock fa-lg"></i>&nbsp; --}}
													<span id="payment-button-amount">Add To Cart</span>
													<span id="payment-button-sending" style="display:none;">Sending…</span>
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End details -->
	
	<!-- Start Contact info -->
@endsection
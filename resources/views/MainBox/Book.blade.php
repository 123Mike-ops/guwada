<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
	<title>Order Confirmation</title>  
	
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="live-dinner/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="live-dinner/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('live-dinner/css/bootstrap.min.css')}}"> 
	   
	<!-- Site CSS -->
	<link rel="stylesheet" href="{{asset('live-dinner/css/style.css')}}"> 
	   
    <!-- Responsive CSS -->
	<link rel="stylesheet" href="{{asset('live-dinner/css/responsive.css')}}">
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="{{asset('live-dinner/images/logo.png')}}" alt="" />
			</a>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
					{{-- <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li> --}}
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					{{-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="reservation.html">Reservation</a>
							<a class="dropdown-item" href="stuff.html">Stuff</a>
							<a class="dropdown-item" href="gallery.html">Gallery</a>
						</div>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="blog.html">blog</a>
							<a class="dropdown-item" href="blog-details.html">blog Single</a>
						</div>
					</li> --}}
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<body>
	


	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">	
							<div class="col-lg-6"  style="margin-left:23%;margin-top:200px;">
								<div class="card">
									<div class="card-header">Book Card</div>
									<div class="card-body">
										<div class="card-title">
											<h3 class="text-center title-2">Amount Of Meal in Reservation</h3>
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
									
									
										

										
										
										

										<form action="{{route('book.cart',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'restname'=>$restname])}}" method="post" novalidate="novalidate">
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
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{asset('live-dinner/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/popper.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	
	<script src="{{asset('live-dinner/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/images-loded.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/isotope.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('live-dinner/js/form-validator.min.js')}}"></script>
    <script src="{{asset('live-dinner/js/contact-form-script.js')}}"></script>
    <script src="{{asset('live-dinner/js/custom.js')}}"></script>
</body>
</html>
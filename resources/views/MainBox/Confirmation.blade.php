<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Confirmation</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('live-dinner/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('live-dinner/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/style.css')}}">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/classic.css')}}">    
	<link rel="stylesheet" href="{{asset('live-dinner/css/classic.date.css')}}">    
	<link rel="stylesheet" href="{{asset('live-dinner/css/classic.time.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('live-dinner/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
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
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						{{-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
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
	<!-- End header -->
	
	<!-- Start All Pages -->
	{{-- <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="padding-top: 100px;">
					<div class="heading-title text-center">
						<h2><b>Confirmed</b></h2>
				
					</div>
				</div>
			</div>

			
		


			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						
								<form action="{{ route('confirm.home',['Id'=>$Id,'price'=>$price]) }}" method="post" style="background-color:rgb(255, 255, 255);">
									@csrf	
									<div class="form-group">
										<label for="cc-payment" class="control-label mb-1" >Ordered By: </label>

									<label for="cc-payment" class="control-label mb-1"> {{   $user->name}}</label>
										
									</div>
									<div class="form-group has-success">
										
										<label for="cc-name" class="control-label mb-1">Item:</label>
										<label for="cc-name" class="control-label mb-1"> {{   $item->name}}</label>
										
									</div>
									<div class="form-group has-success">
										<label for="cc-name" class="control-label mb-1" >Deliverd From:</label>

										<label for="cc-name" class="control-label mb-1">{{   $restaurant->name}}</label>
									</div>
										 <table>
											 <tr>
												 <td><label>Pay With</label></td>
												 <td>
												<select name="paymentType" class="dropdown-toggle btn btn-primary" >
													<option type="button" value="Cash" >Cash</option>
													<option type="button" value="CBE Birr" c>CBE Birr</option>
													
											
												</select>
												 </td><br />
												 <td>
									
												<h3>Total Price.</h3>
												 </td>
												 <td>
												<div class="col-md-12">
													<div class="form-group">
													<label >{{$price}}</label>
													<label>{{$currency}}</label>
												</div>     
											</td>
											 </tr> 
										 </table>      <br />
										 <br />
												                      
								
													<button type="submit" class="btn btn-common" id="submit" type="submit">Pay & Finish</button>
											
								</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Reservation -->
	

	<!-- End Customer Reviews -->
	
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
	<script src="{{asset('live-dinner/js/picker.js')}}"></script>
	<script src="{{asset('live-dinner/js/picker.date.js')}}"></script>
	<script src="{{asset('live-dinner/js/picker.time.js')}}"></script>
	<script src="{{asset('live-dinner/js/legacy.js')}}"></script>
	<script src="{{asset('live-dinner/js/form-validator.min.js')}}"></script>
    <script src="{{asset('live-dinner/js/contact-form-script.js')}}"></script>
    <script src="{{asset('live-dinner/js/custom.js')}}"></script>
</body>
</html>
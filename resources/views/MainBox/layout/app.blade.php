<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Home Menu</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
	<link rel="shortcut icon" href="{{ asset('live-dinner/images/favicon.ico" type="image/x-icon')}}">
	
    <link rel="apple-touch-icon" href="{{ asset('live-dinner/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('live-dinner/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('live-dinner/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('live-dinner/css/responsive.css')}}">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('live-dinner/css/custom.css')}}">
	@yield('style')
	

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	


	{{-- <script src= 
	"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
		</script> 
		<script src= 
	"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> 
		</script> 
		<script src= 
	"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> 
		</script> 
		<script src= 
	"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"> 
		</script> --}}

</head>

<body>
	{{-- <script> 
    
		// Use find() function to extract the badge  
		// count from '#group' container. 
		$(document).ready(function() { 
			$(".btn").click(function() { 
				var val = parseInt($('#group').find('.badge').text()); 
	  
				// Check for the button clicked 
				if ($(this).hasClass('bi bi-cart')) { 
					$('#cart').find('.bi bi-cart').text(val - 1); 
				} else if ($(this).hasClass('btn-success')) { 
					$('#cart').find('.bi bi-cart').text(val + 1); 
				} 
			}); 
		}); 
	</script>  --}}

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="{{ asset('live-dinner/images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
				
						<li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('show.subscription',['email'=>Auth::user()->email])}}">Subscriptions</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Account</a>

							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="nav-item dropdown" href="blog.html"> Deposit </a>
                                         
								{{-- <a class="dropdown-item" href="blog-details.html">Add Money</a> --}}
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
						<br /><br /><br />
					</ul>
				</div>
				<table  style="width:250px;color:black;">

					<tr>
						<td><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg></td><td> <label>{{ Auth::user()->name }}</label></td>	
					</tr>
					<tr>
							<td>
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card-2-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
							<path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zM1 9h14v2H1V9z"/>
						  </svg>
						</td><td>Balance :</td>	
					</tr>
		
				</table>
				<li>
				<a href="{{route('show.cart',['userId'=>Auth::user()->id])}}">
					<svg width="50px"  id="cart" height="50px" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						
						<path  fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
					  </svg>
					</a>Delivery Cart

					<span class="badge badge-pill badge-danger">{{Auth::user()->unreadNotifications->where('type',"App\Notifications\CartDone")->count()}}</span>
				
				</li>
				<li>|</li>
				<li>|</li>
				<li>|</li>
				<li>|</li>
				<li>|</li>
				<li>|</li>

				<li>|</li>
				<li>|</li>
				<li>
					<a href="{{route('show.Bookcart',['userId'=>Auth::user()->id])}}">
					
						<svg width="50px"  id="cart" height="50px" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					
							<path  fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg>
						</a>Reservation Cart
						<span class="badge badge-pill badge-danger">{{Auth::user()->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->count()}}</span>
					
				</li>
				
				<li class="nav-item">
				<a  class="nav-link" class="dropdown-item" class="btn btn-warning" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
					 {{ __('Logout') }}
				 </a>

				 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					 @csrf
				 </form></a>
				</li>
			
                
			</div>
		
		</nav>
		<a class="btn btn-warning" href="{{route('show.subscription',['email'=>Auth::user()->email])}}">Subscriptions</a>
		
    </header>
    <body>

			


		@yield('content')
    </body>

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
							Geeztech@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
						    Kazanchis Addis Ababa , Ethiopia
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
					<p class="lead">Ipsum Street, Addis Ababa</p>
					<p class="lead"><a href="#">+251-11534556</a></p>
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
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">EnatGuwada</a> Design By : 
					<a href="https://Gee'z.et/">Gee'z Tech</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{ asset('live-dinner/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('live-dinner/s/popper.min.js')}}"></script>
	<script src="{{ asset('live-dinner/js/bootstrap.min.js')}}"></script>
	@yield('script')
    <!-- ALL PLUGINS -->
	<script src="{{ asset('live-dinner/js/jquery.superslides.min.js')}}"></script>
	<script src="{{ asset('live-dinner/js/images-loded.min.js')}}"></script>
	<script src="{{ asset('live-dinner/js/isotope.min.js')}}"></script>
	<script src="{{ asset('live-dinner/js/baguetteBox.min.js')}}"></script>
	<script src="{{ asset('live-dinner/js/form-validator.min.js')}}"></script>
    <script src="{{ asset('live-dinner/js/contact-form-script.js')}}"></script>
	<script src="{{ asset('live-dinner/js/custom.js')}}"></script>
	
</body>
</html>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Guwada</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="{{asset('Guest/favicon.ico')}}">
	<!-- food icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('Guest/css/organicfoodicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('Guest/css/bootstrap.min.css')}}">   
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('Guest/css/demo.css')}}" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('Guest/css/component.css')}}" />
	<script src="{{asset('Guest/js/modernizr-custom.js')}}"></script>
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon foodicon foodicon--coconut"></div>
				<h2 class="dummy-heading">Guwada</h2>
			</div>
			<div class="bp-header__main">
				<span class="bp-header__present">Guwada<span class="bp-tooltip bp-icon bp-icon--about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
                <h1 class="bp-header__title" style="color:orange;">Table Status</h1>
				Status :<label>{{ Auth::user()->name }}</label>
				<a style="color:black" class="nav-link" class="dropdown-item" class="btn btn-warning" href="{{ route('logout') }}"
				onclick="event.preventDefault();
							  document.getElementById('logout-form').submit();">
				 {{ __('Logout') }}
			 </a>

			 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				 @csrf
			 </form></a>
				<nav class="bp-nav">
					
					
				
					{{-- <a class="bp-nav__item bp-icon bp-icon--prev" href="http://tympanus.net/Blueprints/PageStackNavigation/" data-info="previous Blueprint"><span>Previous Blueprint</span></a>
					<!--a class="bp-nav__item bp-icon bp-icon--next" href="" data-info="next Blueprint"><span>Next Blueprint</span></a-->
					<a class="bp-nav__item bp-icon bp-icon--drop" href="http://tympanus.net/codrops/?p=25521" data-info="back to the Codrops article"><span>back to the Codrops article</span></a>
					<a class="bp-nav__item bp-icon bp-icon--archive" href="http://tympanus.net/codrops/category/blueprints/" data-info="Blueprints archive"><span>Go to the archive</span></a> --}}
				</nav>
            </div>
			
		</header>
        <button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<a style="color:black;"href="{{route('GuestShow.Cart',['userId'=>Auth::user()->id])}}">
			<svg width="50px"  id="cart" height="50px" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" >
				
				<path  fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
			  </svg>
			</a>Order Cart

			<span class="badge badge-pill badge-danger">{{Auth::user()->unreadNotifications->where('type',"App\Notifications\ReserveCartDone")->count()}}</span>
		<br /><br />
		<nav id="ml-menu" class="menu">
		
		
					<ul>
						<a class="btn btn-warning" href="{{route('HomeGuest')}}"style="font-size:20px;width:200px;color:white;">Main Menus</a>
					</ul>
					<br />
					<p>We are here to Serve Your Needs</p>
					<hr >

					<a class="btn btn-success btn-sm" style="color:white;" href="{{route('see.orders',['userId'=>Auth::user()->id])}}">My Orders</a>
					<hr >
					<ul style="color:black;">
						<li>Drinks</li>
						<ol style="color:red;">
							<li> Avocado Juice </li>
							<li> Mango Juice </li>
							<li> Soya Juice </li>
							<li> Menderin Juice </li>

						</ol>
					</ul>
			
		</nav>
	
            {{-- <p class="info">Please choose a category</p> --}}
                @yield('content')
			<!-- Ajax loaded content here -->
		
	</div>
	<!-- /view -->
	<script src="{{asset('Guest/js/classie.js')}}"></script>
	<script src="{{asset('Guest/js/dummydata.js')}}"></script>
	<script src="{{asset('Guest/js/main.js')}}"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
			closeMenuCtrl.focus();
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
			openMenuCtrl.focus();
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>
</body>

</html>

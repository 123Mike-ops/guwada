<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Restaurant</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset(' Admin/css/font-face.css ')}}" rel="stylesheet" media="all" >
    <link href="{{ asset('Admin/vendor/font-awesome-4.7/css/font-awesome.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/font-awesome-5/css/fontawesome-all.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/mdi-font/css/material-design-iconic-font.min.css ')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.css ')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('Admin/vendor/animsition/animsition.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/wow/animate.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/css-hamburgers/hamburgers.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/slick/slick.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/select2/select2.min.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.css ')}}" rel="stylesheet" media="all">
    <link href="{{ asset('Admin/vendor/vector-map/jqvmap.min.css ')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('Admin/css/theme.css' )}}" rel="stylesheet" media="all">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body class="animsition"  style="background-color: white;">
    <div class="page-wrapper">
        <header class="header-desktop2" style="background-color: rgb(207, 133, 72);">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap2" >
                        <div class="logo d-block d-lg-none">
                            <a>
                                <img src="{{ asset('Admin/images/icon/logo-white.png')}}" alt="CoolAdmin" >
                            </a>
                        </div>
                        <div class="header-button2">
                            <div class="header-button-item js-item-menu">
                                <i class="zmdi zmdi-search"></i>
                                <div class="search-dropdown js-dropdown">
                                    <form action="">
                                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                        <span class="search-dropdown__icon">
                                            <i class="zmdi zmdi-search"></i>
                                        </span>
                                    </form>
                                </div>
                            </div>
                            <div class="header-button-item has-noti js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <div class="notifi-dropdown js-dropdown">
                                    <div class="notifi__title">
                                        <p>You have 3 Notifications</p>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c1 img-cir img-40">
                                            <i class="zmdi zmdi-email-open"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a email notification</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your account has been blocked</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__item">
                                        <div class="bg-c3 img-cir img-40">
                                            <i class="zmdi zmdi-file-text"></i>
                                        </div>
                                        <div class="content">
                                            <p>You got a new file</p>
                                            <span class="date">April 12, 2018 06:50</span>
                                        </div>
                                    </div>
                                    <div class="notifi__footer">
                                        <a href="#">All notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                            <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                    <a href="{{route('Profile.Edit',['userId'=>Auth::user()->id])}}">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                    <a class="btn btn-info" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                    
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <aside class="menu-sidebar2" style="background-color: rgb(224, 156, 67);color:white;">
            <div class="logo" style="background-color: rgb(32, 17, 6);">
                <a href="{{route('restaurantadmin.dashboard')}}">
                    <img src="{{asset('Admin/images/icon/logo-white.png')}}" alt="Cool Admin" />
                    {{-- <img class="card-img-top" src="{{ asset('uploads/Restaurant/'.$restaurant->image)}}" alt="Card image cap"> --}}
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2" >
                    <div class="image img-cir img-120">
                        <img src="{{ asset('uploads/Profile/'.Auth::user()->image)}}" alt="John Doe" />
                  
                     
                    </div>
                   
                    <p class="name"><b>{{Auth::user()->name}}</p>
                    <p style="color:white;">{{Auth::user()->status }}</p><hr >
               

                  
                
                    {{-- <a href="#">Sign out</a> --}}
                </div>
                
             
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('restaurantadmin.dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Tool</a>

                            <ul style="background-color: lightslategrey;color:white;" class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{route('dashboard.itemshow',['name'=>Auth::user()->status ])}}">

                                        <i ></i>Items Managment</a>
                                </li>
                                <li>
                                    <a href="{{route('dashboard.customershow',['name'=>Auth::user()->status ])}}">

                                        <i ></i>Customers Managment</a>
                                </li>
                            
                                <li>
                                <a href="{{route('dashboard.messageshow',['name'=>Auth::user()->status])}}">
                                        <i ></i>Messages Managment</a>
                                </li>

                                <li>
                                    <a>
                                        <i></i>Alarms Managment</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="{{route('dashboard.menushow',['name'=>Auth::user()->status ])}}">
                         
                                <i class="far fa-clipboard" class="fas" style='font-size:20px;color:#008000'></i>
                                Update Menus</a>
                        </li> --}}

                        {{-- <li>
                            <a  href="{{route('mydelivery.show',['name'=>Auth::user()->status,'userid'=>Auth::user()->id ])}}">
                                <i class="fas fa-chart-bar"></i>Delivery Orders</a>

                            <span class="inbox-num">3</span>
                        </li> --}}
                        <li>
                        <a href="{{route('mykitchen.show',['name'=>Auth::user()->status])}}">

                                <i class="fas fa-shopping-basket"></i>Kitchen Status</a>
                        </li>
                        <li>
                            <a href="{{route('mybooking.show',['name'=>Auth::user()->status,'userid'=>Auth::user()->id ])}}">
    
                                    <i class="fas fa-shopping-basket"></i>Orders</a>
                                    <span class="inbox-num">3</span>
                            </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Reports
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{route('daily.report',['status'=>'Day','name'=>Auth::user()->status,'userid'=>Auth::user()->id ])}}">
                                        <i class="fas fa-table"></i>Daily Report</a>
                                </li>
                                <li>
                                    <a href="{{route('weekly.report',['status'=>'Week','name'=>Auth::user()->status,'userid'=>Auth::user()->id ])}}">
                                        <i class="far fa-check-square"></i>Weekly Report</a>
                                </li>
                                <li>
                                    <a href="{{route('monthly.report',['status'=>'Month','name'=>Auth::user()->status,'userid'=>Auth::user()->id ])}}">
                                        <i class="fas fa-calendar-alt"></i>Monthly Report</a>
                                </li>
                              
                            </ul>
                        </li>
                        {{-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Delivery Managment
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a><br />
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">
                                        <i class="fas fa-sign-in-alt"></i>Deliver Man</a>
                                </li>
                                <li>
                                    <a href="register.html">
                                        <i class="fas fa-user"></i>Adjust Delivery Session </a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">
                                        <i class="fas fa-unlock-alt"></i>Allocation</a>
                                </li>
                            </ul>
                        </li> --}}
                      
                    </ul>
                </nav>
            </div>
        </aside>
   
  

</div>
@yield('content')

    <!-- Jquery JS-->
    <script src="{{ asset('Admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('Admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('Admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('Admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('Admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/select2/select2.min.js')}}">
    </script>
    <script src="{{ asset('Admin/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{ asset('Admin/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('Admin/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('Admin/vendor/vector-map/jquery.vmap.world.js')}}"></script>

    <!-- Main JS-->
    <script src="{{ asset('Admin/js/main.js')}}"></script>


</body>

</html>
<!-- end document-->





























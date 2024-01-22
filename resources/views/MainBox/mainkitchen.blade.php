
@extends('MainBox.layout.app')
@section('content')
@if(Auth::check())
	
	<!-- Start blog details -->
	<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="padding-top: 100px;">
					<div class="heading-title text-center">
						<h2 style="color:orange;">{{$myrestaurant->name}}</h2>
						<p>Thanks For Choosing us ! </p>
					</div>
				</div>
			</div>
	  
		
			<div class="row" style="background-image: url({{asset('uploads/Restaurant/'.$myrestaurant->image)}})">
				<div class="col-xl-8 col-lg-8 col-12">
					<div class="blog-inner-details-page">

						<div class="blog-inner-box">
							{{-- <div class="side-blog-img">
								<img style="height:300px;" class="img-fluid" src="live-dinner/images/inner-blog-img.jpg" alt="">							
								<div class="date-blog-up">
									Rank Number
								</div>
							</div> --}}
							<table><tr><td>
							<div class="inner-blog-detail details-page">
							
								<ul>
									<li><i class="zmdi zmdi-account"></i>Active Chef : <span>Mikiyas Ahmed</span></li>
									<li>|</li>
									<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
								</ul>

								<p>Hello i am Your chef Please. know lets cook our Meal !</p>
								
								<blockquote>

									<p>Every thing is neat and clean! Feel safe!</p>

								</blockquote>
								
							</div>
							</td>
						
							</tr></table> 
                           
						</div>
						
                       
                 
                       
                        {{-- <li class="nav-item dropdown">
							<a style="background-color:orange;border-radius:5px;width:190px;height:60px;font-size:17px;"class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown"> Get Meal</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="">Reservation</a>
								<a class="dropdown-item" href="order">Delivery</a>
							
							</div>
						</li> --}}
						{{-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Get the Meal</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="blog.html">Reservation</a>
                                         
								<a class="dropdown-item" href="blog-details.html">Delivery</a>
							</div>
						</li> --}}

						<br />
						<table><tr>
						
						<td><a  href="{{route('Reservation',['foodId'=>$foodId,'restId'=>$myrestaurant->id,'typeId'=>0,'userId'=>Auth::user()->id])}}"class="btn btn-warning" style="color:white;">Reservation</a></td><td>            </td> 
						<td><a  href="{{route('delivery',['foodId'=>$foodId,'restId'=>$myrestaurant->id,'typeId'=>0,'userId'=>Auth::user()->id])}}"class="btn btn-secondary" style="color:white;">Delivery</a></td><td>               </td>
						<td><a  href="{{route('mainkitchen.pan',['foodId'=>$foodId,'restId'=>$myrestaurant->id,'userId'=>Auth::user()->id])}}"class="btn btn-primary" style="color:white;">Cook and Choose Varities</a></td>
						</tr> </table>
                    
                      
                    
                        {{-- <a href="getthemeal">Get the Meal</a> --}}
                        <br /><br />
						{{-- <div class="comment-respond-box">
							<h3>Leave your comment </h3>
							<div class="comment-respond-form">
								<form id="commentrespondform" class="comment-form-respond row" method="post">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input id="name_com" class="form-control" name="name" placeholder="Name" type="text">
										</div>
										<div class="form-group">
											<input id="email_com" class="form-control" name="email" placeholder="Your Email" type="email">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<textarea class="form-control" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<button class="btn btn-submit">Submit comment</button>
									</div>
								</form>
							</div>
						</div> --}}
					</div>
				</div>
			
			
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					{{-- <div class="right-side-blog">
						<h3>Search</h3>
						<div class="blog-search-form">
							<input name="search" placeholder="Search blog" type="text">
							<button class="search-btn">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						<h3>Categories</h3>
						<div class="blog-categories">
							<ul>
								<li><a href="#"><span>Food</span></a></li>
								<li><a href="#"><span>Pizza</span></a></li>
								<li><a href="#"><span>Drink</span></a></li>
								<li><a href="#"><span>Lorem Sit</span></a></li>
								<li><a href="#"><span>Burger</span></a></li>
								<li><a href="#"><span>Music</span></a></li>
							</ul>
						</div>
						<h3>Recent Post</h3>
						<div class="post-box-blog">
							<div class="recent-post-box">
								<div class="recent-box-blog">
									<div class="recent-img">
										<img class="img-fluid" src="images/post-img-01.jpg" alt="">
									</div>
									<div class="recent-info">
										<ul>
											<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
											<li>|</li>
											<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
										</ul>
										<h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
									</div>
								</div>
								<div class="recent-box-blog">
									<div class="recent-img">
										<img class="img-fluid" src="images/post-img-02.jpg" alt="">
									</div>
									<div class="recent-info">
										<ul>
											<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
											<li>|</li>
											<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
										</ul>
										<h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
									</div>
								</div>
								<div class="recent-box-blog">
									<div class="recent-img">
										<img class="img-fluid" src="images/post-img-03.jpg" alt="">
									</div>
									<div class="recent-info">
										<ul>
											<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
											<li>|</li>
											<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
										</ul>
										<h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
									</div>
								</div>
								<div class="recent-box-blog">
									<div class="recent-img">
										<img class="img-fluid" src="images/post-img-01.jpg" alt="">
									</div>
									<div class="recent-info">
										<ul>
											<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
											<li>|</li>
											<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
										</ul>
										<h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
									</div>
								</div>
							</div>
						</div>
						<h3>Recent Tag</h3>
						<div class="blog-tag-box">
							<ul class="list-inline tag-list">
								<li class="list-inline-item"><a href="#">Food</a></li>
								<li class="list-inline-item"><a href="#">Drink</a></li>
								<li class="list-inline-item"><a href="#">Nature</a></li>
								<li class="list-inline-item"><a href="#">Italian</a></li>
								<li class="list-inline-item"><a href="#">Bootstrap4</a></li>
								<li class="list-inline-item"><a href="#">Fashion</a></li>
							</ul>
						</div>
					</div> --}}
				</div> 
			
			</div>

		</div>
	</div>
	<!-- End details -->
	
	<!-- Start Contact info -->
	@endif

	@endsection
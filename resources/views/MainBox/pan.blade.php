{{-- 

@extends('MainBox.PanLayout.layout')
@section('content')   --}}

{{-- @extends('MainBox.layout.app')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Favourite</title>
<!--

Template 2097 Pop

https://www.tooplate.com/view/2097-pop

-->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('cooker2/css/bootstrap.min.css')}}">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('cooker2/fontawesome/css/fontawesome-all.min.css')}}">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="{{asset('cooker2/text/css" href="slick/slick.css')}}"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="{{asset('cooker2/text/css" href="slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('cooker2/css/tooplate-style.css')}}">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
    
</head>
<body>  
  
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="{{ asset('live-dinner/images/logo.png')}}" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			
			
                
			</div>
		
		</nav>
		
    


<div id="tm-bg"></div>

<div id="tm-wrap" >
    <div class="tm-main-content">
        <div class="container tm-site-header-container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                    <div class="tm-site-header">
                        <h1 class="mb-4">here with varities for Your needs</h1>
                        <img src="img/underline.png" class="img-fluid mb-4">
                        <p>choose your best</p>        
                    </div>                        
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="content">
                        <div class="grid">
                            @foreach($foodType as $foodtype)
                                <div class="grid__item" id="team-link">
                                    <div class="product">  
                                        <div class="tm-nav-link">
                                            <b>{{$foodtype->name}}</b>
                                           <i><img src="{{asset('uploads/FoodType/'.$foodtype->image)}}" height=150px width=150px class="img-fluid"></i>
                                      
                                            <div class="product__bg"> </div>              
                                        </div>  
                                                                         
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Looks Like</h2>        
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p>{{$foodtype->description}}</p>
                                   
                                                        <a href="{{route('pan.startcook',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$foodtype->id,'userId'=>$userId])}}" class="btn tm-btn-gray">get it</a>        
                                                    </div>                                                
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                        <img src="{{asset('uploads/FoodType/'.$foodtype->image)}}" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> 
                    </div>                       
                </div>
            </div>                
        </div>
      
        {{-- <table style="margin-top:100px;">
                             
            <tr>
               
                <td>
                 
                        <table width=750px font-size=30px;>
                            @foreach($foodType as $foodtype)
                            <tr>
                               
                                    <td>
                                
                                        <div class="recent-box-blog">
                                            <div class="recent-img">
                                                <img class="img-fluid"  alt="{{$foodtype->name}}"height=90px width=100px src="{{asset('uploads/FoodType/'.$foodtype->image)}}" alt="">
                                            </div>
                                            <div class="recent-info">
                                                <ul>
                                                    
                                                    <li><h3 style="color:orange;">{{$foodtype->name}}</h3></li>
                                                    <li>|</li>
                                     
                                                </ul>
                                                <h4> Description:</h4> <span style="color:orange;">{{$foodtype->description}}</span>
                                            </div>
                                        </div>
                                    <a href="{{route('pan.startcook',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$foodtype->id,'userId'=>$userId])}}" class="btn btn-warning">Get</a> 
                                    
                                </td>
                            </tr>
                            @endforeach
                        </table> 
                  

                </td>
                
              
              
            </tr>
          
        </table> --}}
  
         <footer>
            <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> Your Company. 
            
            Design: <a rel="nofollow" href="https://www.tooplate.com" class="tm-text-highlight">Tooplate</a></p>
        </footer>
    </div> <!-- .tm-main-content -->  
</div>
<script src="{{asset('cooker2/js/jquery-3.2.1.slim.min.js')}}"></script>         <!-- https://jquery.com/ -->    
    <script src="{{asset('cooker2/slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="{{asset('cooker2/js/anime.min.js')}}"></script>                     <!-- http://animejs.com/ -->
    <script src="{{asset('cooker2/js/main.js')}}"></script>  
</body>
</html>
     
    
    <!-- load JS -->
    {{-- @endsection --}}
   
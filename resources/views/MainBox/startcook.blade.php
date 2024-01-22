

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main Kitchen</title>
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
    <link rel="stylesheet" href="{{asset('cooker2/css/tooplate-style.css')}}">    
    
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"><!-- Templatemo style --> --}}

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
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Here is Main Kitchen</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>choose Your Favourite</p>        
                        </div>                        
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                              
                             
                            
                            @foreach($stages as  $stage)
                        

                                        <div class="grid__item">
                                            <div class="product">
                                                <div class="tm-nav-link">
                                                    {{-- <i class="fas fa-handshake fa-3x tm-nav-icon"></i> --}}
                                                
                                                    <span class="tm-nav-text">{{$stage->description}}</span>
                                                    <div class="product__bg"></div>             
                                                </div>                                                                 
                                                <div class="product__description">
                                                    <div class="p-sm-4 p-2">
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <h2 class="tm-page-title">{{$stage->description}}</h2>        
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <p>Choose your best</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="p-sm-4 p-2 tm-img-container">
                                                                    <div class="tm-img-slider" id="tmImgSlider">
                                                                     
                                                                        
                                                                        
                                                                        <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident1])}}" class="tm-slider-img-link" style="color:white;"> <img src="{{asset('uploads/RecipeStage/'.$stage->image1)}}" width=90px height=90px alt="Image 1" class="img-fluid tm-slider-img">{{$stage->ingrident1}}</a>
                                                                        <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident2])}}" class="tm-slider-img-link"style="color:white;">  <img src="{{asset('uploads/RecipeStage/'.$stage->image2)}}"   width=90px height=90px alt="image 2" class="img-fluid tm-slider-img">{{$stage->ingrident2}}</a>
                                                                        <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident3])}}"class="tm-slider-img-link"style="color:white;"> <img src="{{asset('uploads/RecipeStage/'.$stage->image3)}}" width=90px height=90px alt="image 3" class="img-fluid tm-slider-img">  {{$stage->ingrident3}}</a>
                                                                        <a href="{{ route('ingrident.store',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>$userId,'stageId'=>$stage->id,'ingrident'=>$stage->ingrident4])}}" class="tm-slider-img-link"style="color:white;"><img src="{{asset('uploads/RecipeStage/'.$stage->image4)}}"   width=90px height=90px alt="Image 4" class="img-fluid tm-slider-img"> {{$stage->ingrident4}}</a>
                                                                    
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>       
                                            </div>
                                        </div>
                                      

                            @endforeach
          
                                                    <br />

                                                <p>After you adjust Your Meal,<br /> please Choose way to get you! </p>
                                 
                                        <a class="btn btn-warning" href="{{ route('delivery',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>Auth::user()->id])}}"> Delivery</a>
                                        <a class="btn btn-success" href="{{ route('Reservation',['foodId'=>$foodId,'restId'=>$restId,'typeId'=>$typeId,'userId'=>Auth::user()->id])}}"> Reservation</a>
                                     
                              
                  
                 
                                    
                </div> 
            </div>                       
        </div>
                     

                </div>                
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2020</span> Your Company. 
                
                Design: <a rel="nofollow" href="https://www.tooplate.com" class="tm-text-highlight">Tooplate</a></p>
            </footer>
        </div> <!-- .tm-main-content -->  
    </div>
    <!-- load JS -->
    <script src="{{asset('cooker2/js/jquery-3.2.1.slim.min.js')}}"></script>         <!-- https://jquery.com/ -->    
    <script src="{{asset('cooker2/slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="{{asset('cooker2/js/anime.min.js')}}"></script>                     <!-- http://animejs.com/ -->
    <script src="{{asset('cooker2/js/main.js')}}"></script>  

    <script src="{{asset('cooker2/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('cooker2/js/popper.min.js')}}"></script>
	<script src="{{asset('cooker2/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('cooker2/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('cooker2/js/images-loded.min.js')}}"></script>
	<script src="{{asset('cooker2/js/isotope.min.js')}}"></script>
	<script src="{{asset('cooker2/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('cooker2/js/form-validator.min.js')}}"></script>
    <script src="{{asset('cooker2/js/contact-form-script.js')}}"></script>
    <script src="{{asset('cooker2/js/custom.js')}}"></script>
    <script>      

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');   
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

    </script>             

</body>
</html>

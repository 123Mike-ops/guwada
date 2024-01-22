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
	
   
    
    @yield('content')

 

    {{-- <script>      

        function `() {
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

    </script>              --}}
	<script src="{{asset('cooker2/js/jquery-3.2.1.slim.min.js')}}"></script>         <!-- https://jquery.com/ -->    
    <script src="{{asset('cooker2/slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->  
    <script src="{{asset('cooker2/js/anime.min.js')}}"></script>                     <!-- http://animejs.com/ -->
    <script src="{{asset('cooker2/js/main.js')}}"></script>  
</body>
</html>

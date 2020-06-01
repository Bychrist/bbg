<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="author" content="Crescent Theme" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="" />

<title>Bristish Business Group</title>

<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/favicon-1.png">
<link rel="icon" type="image/png" href="assets/images/favicon/favicon-2.png" sizes="32x32">
<link rel="icon" type="image/png" href="assets/images/favicon/favicon-3.png" sizes="16x16">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/jquery.bootstrap-touchspin.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/flaticon.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/nouislider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/nouislider.pips.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

<style>
    /* the pricing table */

</style>


</head>
<body >
<div class="boxed_wrapper">

<header class="top-bar" style="background:#fff;">
<div class="container" style="">
    <div class="clearfix">

        <ul class="top-bar-text float_left  d-none d-md-block" style=" padding:3px 0px -0px 2px;margin-bottom:-10px" >
        
            <li><a href="javascript:void(0)" ><i style="color: #ccc" class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i  style="color: #ccc" class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)"><i  style="color: #ccc" class="fa fa-linkedin"></i></a></li> 
            <li><a href="javascript:void(0)"><i  style="color: #ccc" class="fa fa-youtube"></i></a></li>
        </ul>
        <ul class="social-style-one float_right" style="padding-bottom: -10px;">

        <li>
         @if(!Auth::check()) 
        <a href="{{url('/login')}}" style="font-size: 10px !important;padding:5px" class="btn-style-one"> <i class="fa fa-user" aria-hidden="true"></i> MEMBERSHIP LOGIN</a>
        @endif

        </li>
        <li>
                @if(!Auth::check()) 
                <a href="{{url('/register')}}" style="font-size: 10px !important;padding:5px" class="btn-style-one">APPLY FOR MEMBERSHIP</a>
                @endif

                 @if(Auth::check()) 
                <a href="{{url('/home')}}" style="font-size: 10px !important;padding:5px" class="btn-style-one">Go To Admin</a>
                @endif
        
        </li>
        </ul>
    </div>
</div>
<hr>
</header>


<section class="mainmenu-area stricky">
<div class="container" style="margin-top: -30px;">
    <div class="">
    <nav class="navbar main-menu navbar-expand-lg p-0" style="padding-top:-20px;">
    <a class="navbar-brand" href="{{url('/')}}">
    <img src="{{asset('assets/images/logo/logo.png')}}" alt="">
    </a>
    <button class="navbar-toggler" id="iconmenu" type="button" data-toggle="collapse" data-target="#sitemenu" aria-controls="sitemenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bar1"></span>
    <span class="navbar-toggler-icon bar2"></span>
    <span class="navbar-toggler-icon bar3"></span>
    </button>
    <div class="collapse navbar-collapse" id="sitemenu">
        <ul class="navigation main_menu ml-auto clearfix">
            <li class="{{Request::is('/') ? "current" : ""}} "><a href="{{url('/')}}">Home </a></li>
            <li class="{{Request::is('about') ? "current" : ""}} "><a href="{{url('/about')}}">About BBG</a></li>
            <li class="{{Request::is('membership') ? "current" : ""}}  "><a href="{{url('/membership')}}">Membership</a></li>
            <li class="{{Request::is('event') ? "current" : ""}}  "><a href="{{url('/event')}}">Events</a></li>
            <li class="{{Request::is('directory') ? "current" : ""}}  "><a href="{{url('/directory')}}">Directory</a></li>
            <li class="{{Request::is('news') ? "current" : ""}}  "><a href="{{url('/news')}}">News</a></li>
            <li class="{{Request::is('contact') ? "current" : ""}}  "><a href="{{url('/contact')}}">Contact Us</a></li>

        </ul>
     
    </div>
    </nav>
    </div>
</div>
</section>





 @yield('content')


<footer class="main-footer">

<div class="widgets-section">
<div class="container">
<div class="row">

    <div class="footer-column col-lg-2 col-md-6 col-sm-12">
        <div class="footer-widget links-widget">
        <div class="section-title">
        <h3>Navigation</h3>
        </div>
        <div class="widget-content">
        <ul class="list">
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('/membership')}}">Membership</a></li>
        <li><a href="{{url('/events')}}">Events</a></li>
        <li><a href="our-projects.html">Directory</a></li>
        <li><a href="{{url('news')}}">News</a></li>
        <li><a href="{{url('contact')}}">Contact Us</a></li>
        </ul>
        </div>
        </div>
     </div>

<div class="footer-column col-lg-3 col-md-6 col-sm-12">
<div class="footer-widget service-widget">
<div class="section-title">
<h3>Contact</h3>
</div>
<div class="widget-content">
 Telephone: +123 456 789 <br>
 Email: info@bbg.com
 <div class="list-inline" style="color: #fff">
    <a href="#" class="list-inline-item"><i style="color: #ccc" class="fa fa-facebook"></i></a>
    <a href="#" class="list-inline-item"><i  style="color: #ccc" class="fa fa-twitter"></i></a>
    <a href="#" class="list-inline-item"><i  style="color: #ccc" class="fa fa-linkedin"></i></a>
    <a href="#" class="list-inline-item"><i  style="color: #ccc" class="fa fa-youtube"></i></a>
  </div>
</div>
</div>
</div>

<div class="footer-column col-lg-2 col-md-6 col-sm-12">
<div class="footer-widget links-widget">
<div class="section-title">
<h3>ADDRESS</h3>
</div>
<div class="widget-content">
    123, abc street, <br>
    Lagos, <br>
    Nigeria
</div>
</div>
</div>

<div class="footer-column col-lg-4 col-md-6 col-sm-12">
<div class="footer-widget contact-widget">
<div class="section-title">
<h3>Join our mailing list</h3>
</div>
<div class="footer-widget gallery-widget">
    <form action="">
        <div class="form-group">
            <input type="text" placeholder="first name" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" placeholder="email" class="form-control">
        </div>

        <input type="submit" class="btn btn-sm mailbtn" value="Send" >
    </form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copy-text text-center">
<p>Copyrights © {{date("Y")}} British Business Group All rights reserved </p>
<p>Designed and developed by <a href="https://midlanddigitalsolutions.com/"> Midland Digital Solutions.</a></p>
</div>
</div>
</div>
</div>
</div>
</footer>


<button class="scroll-top tran3s color2_bg">
<span class="fa fa-long-arrow-up"></span>
</button>

<div class="preloader"></div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>

<script>
    $(document).ready(function () {

        $('#iconmenu').click(function (e) { 
           $('#sitemenu').show();

            
        });
    });
 </script>

 @yield('scripts')

<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.bootstrap-touchspin.js')}}"></script>


<script src="{{asset('assets/js/jquery-ui.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/js/wow.js')}}"></script>

<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>

<script src="{{asset('assets/js/nouislider.js')}}"></script>

<script src="{{asset('assets/js/isotope.js')}}"></script>

<script src="{{asset('assets/js/jquery.appear.js')}}"></script>

<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>

<script src="{{asset('assets/js/imagezoom.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>



</div>
</body>


</html>
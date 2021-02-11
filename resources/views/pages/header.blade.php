@extends('master')
@section('head')
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Finder </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
       
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public/assets/css/style.css')}}">

   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                   <!-- <img src="{{asset('frontend/images/templatemo_200x100_banner.jpg')}}" alt="banner 1" /> -->
                    <img src="{{URL::asset('public/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{URL::to('/')}}"><img src="{{URL::asset('public/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{URL::to('/')}}">Home</a></li>
                                            <li><a href="{{URL::to('/JobList')}}">Find a Jobs </a></li>
                                            <li><a href="{{URL::to('/about')}}">About</a></li>
                                      <!--      <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>  -->
                                            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{URL::to('/userRegister')}}" class="btn head-btn1">Register</a>
                                    <a href="{{URL::to('/userLogin')}}" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
      @endsection
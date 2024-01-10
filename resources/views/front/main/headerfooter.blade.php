<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from themepure.net/html/blackwood-prv/blackwood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 14:25:14 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" height="300" width="300" href="{{ asset('frontend/assets/img/favicon.png') }}">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/backtotop.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/flaticon/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="first_object"></div>
                    <div class="object" id="second_object"></div>
                    <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div>
        <!-- prealoder area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <header>
                <div class="header__middle header__border d-none d-md-block" style="background-color:#8DC63E ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8" >
                                <div class="header__social" >
                                    <ul>
                                        <li><a href="tel:+91 76240 23457"><i class="fas fa-phone-alt" style="color:black"></i>   {{ config('constants.front.number') }}</a></li>
                                        <li><a href="mailto:india.waxwing@gmail.com"><i class="fas fa-map-marker-alt" style="color:black"></i> <span class="__cf_email__" data-cfemail="6f060109002f0c00021f0e0116410c0002">{{ config('constants.front.email') }}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4">
                                <div class="header__middle-right d-flex align-items-center justify-content-end">
                                    <div class="main-menu main-menu-border main-menu-4" style="display: none;">
                                        <nav id="mobile-menu" >
                                            <ul>
                                                <li>
                                                    <a href="{{ route('index') }}">Home</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shop') }}">Shop</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontblog')}}">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">Contact Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about')}}">About Us</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                   
                                </div>
                            </div> 
                            
                        </div>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                                <div class="logo ">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" style="height: 50px;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block">
                                <div class="category__menu d-flex align-items-center">
                                    <div class="category__btn mr-20">
                                        <button class="cat-btn" type="button"><i class="far fa-bars"></i>All Category</button>
                                        <div class="side-submenu transition-3">
                                            <nav>
                                                <ul>
                                                    @foreach($ProductCategory as $item)
                                                    <li>
                                                    <a href="{{ route('frontproduct',$item->id) }}"><i class=" far fa-arrow-right"></i>{{ $item->name }}</a>
                                                    </li> 
                                                    @endforeach                                                   
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ route('index') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Shop</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('frontblog')}}">Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about')}}">About Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-1 col-6">
                                <div class="header__bottom-right-wrapper d-flex justify-content-end align-items-center">
                                  <div class="header__bottom-right d-none d-xl-flex align-items-center justify-content-end">
                                        <div class="header__search">
                                            <form action="#">
                                               
                                            </form>
                                        </div>
                                    </div> 
                                    <div class="header-bar ml-20 d-xl-none">
                                        <button type="button" class="header-bar-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->


<div class="body-overlay"></div>
<!-- cart mini area end -->

<!-- sidebar area start -->
<section class="offcanvas__area">
    <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                        <div class="logo">
                            <a href="{{ Route('index') }}">
                            <img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="logo" style="height: 60px;">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas__close-btn" data-bs-dismiss="modal" data-bs-target="#offCanvasModal">
                                <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                    s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                    C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                   
                    <div class="offcanvas__content p-relative z-index-1">
                        <div class="canvas__menu">
                            <div class="mobile-menu fix"></div>
                        </div>
                        <div class="offcanvas__social mt-15">
                            <ul>
                                @if ($socialmedia[0]['facebook_link'] != '')
                                <li><a  href="{{ $socialmedia[0]['facebook_link'] }}"><i class="fab fa-facebook-f "></i></a></li>
                                @endif
                    
                                @if ($socialmedia[0]['youtube_link'] != '')
                                <li><a href="{{ $socialmedia[0]['youtube_link'] }}"><i class="fab fa-youtube"></i></a></li>
                                @endif
                    
                                @if ($socialmedia[0]['intragram_link'] != '')
                                <li><a href="{{ $socialmedia[0]['intragram_link'] }}"><i class="fab fa-instagram"></i></a></li>
                                @endif

                                @if ($socialmedia[0]['google_link'] != '')
                                <li><a href="{{ $socialmedia[0]['google_link'] }}"><i class="fab fa-google"></i></a></li>
                                @endif

                                @if ($socialmedia[0]['printrest_link'] != '')
                                <li><a  href="{{ $socialmedia[0]['printrest_link'] }}"><i class="fab fa-printrest"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- sidebar area end -->
      
        @yield('content')

                <!-- footer area start -->
                <footer>
                    <div class="footer__area footer-bg">
                        <div class="footer__top footer__top-space pb-50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                        <div class="footer__widget footer__widget-border footer-col-1 pb-30">
                                            <div class="footer__info">
                                                <div class="logo footer__logo mb-55">
                                                    <a href="/">
                                                        <img src="{{ asset('frontend/assets/img/logo/logo-white.png') }}" width="250" alt="">
                                                    </a>
                                                </div>
                                                <div class="footer__opening">
                                                    <p>Monday - Friday: 9:00-20:00</p>
                                                    <p>Saturady: 11:00 - 15:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                        <div class="footer__widget footer-col-2 pb-30">
                                            <h3 class="footer__widget-title">Like Me</h3>
                                            <div class="footer__widget-content">
                                                <div class="footer__contact">
                                                    <h3 class="footer__contact-phone"><a href="tel:+91 76240 23457">{{ config('constants.front.number') }}</a></h3>
                                                    <div class="footer__contact-email">
                                                        <p><a href="mailto:india.waxwing@gmail.com"><span class="__cf_email__" data-cfemail="c8aaa9a4aba3bfa7a7ac88bbbdb8b8a7babce6aba7a5">{{ config('constants.front.email') }}</span></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                        <div class="footer__widget footer-col-4 pb-30">
                                            <h3 class="footer__widget-title">Help Me...!</h3>
                                            <div class="footer__widget-content">
                                                <div class="footer__links">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('contact') }}">Contact Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('about') }}">About Us</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('faq') }}">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('shop') }}">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('frontblog')}}">Blog</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                        <div class="footer__widget footer-col-5 pb-30">
                                            <h3 class="footer__widget-title">Letest's Category</h3>
                                                <div class="footer__widget-content">
                                                    <div class="footer__links">
                                                        <ul>
                                                            @foreach($ProductCategory as $item)
                                                                <li>
                                                                <a href="{{ route('frontproduct',$item->id) }}">{{ $item->name }}</a>
                                                                </li> 
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                        <div class="footer__widget footer-col-3 pb-30">
                                            <h3 class="footer__widget-title">Useful Links</h3>
                                            <div class="footer__widget-content">
                                                <div class="footer__social">
                                                    <ul>
                                                        @if ($socialmedia[0]['facebook_link'] != '')
                                                        <li><a  href="{{ $socialmedia[0]['facebook_link'] }}"><i class="fab fa-facebook-f"></i></a></li>
                                                        @endif
                                            
                                                        @if ($socialmedia[0]['youtube_link'] != '')
                                                        <li><a href="{{ $socialmedia[0]['youtube_link'] }}"><i class="fab fa-youtube"></i></a></li>
                                                        @endif
                                            
                                                        @if ($socialmedia[0]['intragram_link'] != '')
                                                        <li><a href="{{ $socialmedia[0]['intragram_link'] }}"><i class="fab fa-instagram"></i></a></li>
                                                        @endif

                                                        @if ($socialmedia[0]['google_link'] != '')
                                                        <li><a href="{{ $socialmedia[0]['google_link'] }}"><i class="fab fa-google"></i></a></li>
                                                        @endif

                                                        @if ($socialmedia[0]['printrest_link'] != '')
                                                        <li><a  href="{{ $socialmedia[0]['printrest_link'] }}"><i class="fab fa-printrest"></i></a></li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </footer>
                <!-- footer area end -->


      <!-- JS here -->
      <script data-cfasync="false" src="{{ asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/vendor/waypoints.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap-bundle.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/swiper-bundle.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/parallax.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/backtotop.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/isotope-pkgd.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
   </body>

<!-- Mirrored from themepure.net/html/blackwood-prv/blackwood/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 14:25:37 GMT -->
</html>

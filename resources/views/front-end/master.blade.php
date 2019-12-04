<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Taliva - Hotel HTML Template Preview</title>
        <!-- Stylesheets -->
        <link href="{{asset('front-end/')}}//css/bootstrap.css" rel="stylesheet">
        <link href="{{asset('front-end/')}}/css/style.css" rel="stylesheet">
        <link href="{{asset('front-end/')}}/css/owl.css" rel="stylesheet">
        <link href="{{asset('front-end/')}}/css/responsive.css" rel="stylesheet">
        <link rel="icon" href="{{asset('front-end/')}}/images/favicon.ico" type="image/x-icon">
    </head>
    <!-- page wrapper -->
    <body class="body_area">
        <div class="loader-container" id="page-loader">
            <div class="loading-wrapper">
                <div class="loader-animation" id="loader-animation">
                    <span class="loader"><span class="loader-inner"></span></span>
                </div>
                <!-- Edit With Your Name -->
                <div class="loader-name" id="loader-name">
                    TALIVA <strong>HOTEL</strong>
                </div>
                <!-- /Edit With Your Name -->
                <!-- Edit With Your Job -->
                <p class="loader-job" id="loader-job">A BEST PLACE TO ENJOY YOUR LIFE</p>
                <!-- /Edit With Your Job -->
            </div>
        </div>
        <!-- Main Header -->
        <header class="main-header clearfix">
            <!-- header-top -->
            @isset($pageoption)
            <div class="header-top">
                <div class="container clearfix">
                    <div class="header-right-area">
                        <ul>
                            <li>
                                <div class="single-header-right-area">
                                    <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                    <div class="text-box">
                                        <p>{{$pageoption->address}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-header-right-area">
                                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                                    <div class="text-box">
                                        <p>+ 389 72 2705345</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-header-right-area">
                                    <div class="icon-box"><i class="fa fa-inbox"></i></div>
                                    <div class="text-box">
                                        <p>{{$pageoption->email}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header-left-area">
                        <div class="link">
                            <a href="{{route('room.list')}}" class="search-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
            <!-- include main menu -->
            @include('front-end.inc.nav')
        </header>
        <!-- End Main Header -->
        @yield('main-content')
        <footer id="footer-area" class="site-footer">
            <div class="footer">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0.5s">
                        <div class="col-sm-6">
                            <div class="contact-area">
                                <div class="contact-main">
                                    @isset($logo)
                                    <img src="{{asset('back-end/images/logos')}}/{{$logo->main_logo}}" alt="{{$logo->main_logo}}" />
                                    @endisset
                                    <p>You have questions regarding our services? Contact us, we will be happy to help you
                                    out!</p>
                                    @isset($pageoption)
                                    <ul class="info">
                                        <li><i class="fa fa-link"></i> <span>{{$pageoption->address}}</span></li>
                                        <li><i class="fa fa-phone"></i><a href="tel:8812345678">(+88) 12-345-678</a></li>
                                        <li><i class="fa fa-address"></i><a>{{$pageoption->email}}</a></li>
                                    </ul>
                                    @endisset
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="widget-menu">
                                <h3 class="widget-title">Booking</h3>
                                <ul class="menu">
                                    <li><a href="#">Rooms & Suites</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Spa & Fitness</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="widget-menu">
                                <h3 class="widget-title">About Us</h3>
                                <ul class="menu">
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Blog & Events</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="widget-menu">
                                <h3 class="widget-title">Connect Us</h3>
                                <ul class="list-social">
                                    <li><a class="facebook" href="https://www.facebook.com/thimpress">Facebook</a></li>
                                    <li><a class="twitter" href="https://www.twitter.com/thimpress">Twitter</a></li>
                                    <li><a class="instagram" href="http://www.thimpress.com/">Instagram</a></li>
                                    <li><a class="youtube" href="http://www.thimpress.com/">Youtube</a></li>
                                    <li><a class="google" href="http://www.thimpress.com/">Google +</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @isset($pageoption)
            <div class="copyright">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0.5s">
                        <div class="copyright-content col-sm-12">
                            <p class="copyright-text">{{$pageoption->copyright}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
        </footer>
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-long-arrow-up"></span>
        </button>
        <!--jquery js -->
        <script src="{{asset('front-end/')}}/js/jquery.js"></script>
        <script src="{{asset('front-end/')}}/js/bootstrap.js"></script>
        <script src="{{asset('front-end/')}}/js/owl.carousel.min.js"></script>
        <script src="{{asset('front-end/')}}/js/wow.js"></script>
        <script src="{{asset('front-end/')}}/js/validation.js"></script>
        <script src="{{asset('front-end/')}}/js/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="{{asset('front-end/')}}/js/SmoothScroll.js"></script>
        <script src="{{asset('front-end/')}}/js/html5lightbox/html5lightbox.js"></script>
        <script src="{{asset('front-end/')}}/js/gmaps.js"></script>
        <script src="{{asset('front-end/')}}/js/map-helper.js"></script>
        <script src="{{asset('front-end/')}}/js/isotope.js"></script>
        <script src="{{asset('front-end/')}}/js/jquery-ui.js"></script>
        <!-- main-js -->
        <script src="{{asset('front-end/')}}/js/script.js"></script>
        <!-- stripe js  -->
        <script src="{{asset('front-end/')}}/js/stripe.js"></script>
        <script src="{{asset('front-end/')}}/js/stripe-cdn.js"></script>
        <!-- sweet alert -->
        <script src="{{asset('front-end/')}}/js/sweet-alart.js"></script>
        @include('sweet::alert')
        </body><!-- End of .page_wrapper -->
    </html>
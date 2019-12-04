@extends('front-end.master')
@section('main-content')
 <!-- Main slider -->
  <section class="hero_in hotels_detail">
        <div class="wrapper">
            <div class="container">
                <h1 class="hero-header text-center"><span></span>Hotel detail page</h1>
            </div>
            <div class="badcump-area text-center">
                <a href="" class="btn_photos">Hotel</a>
                <a href="" class="btn_photos">Hotel</a>
                <a href="" class="btn_photos">Room Details</a>

            </div>
        </div>
    </section>
    <!--/hero_in-->
    @if($aboutus)
    <!-- About area start -->
    <section class="about_us_area sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="{{asset('back-end/images/about')}}/{{$aboutus->image}}" alt="{{$aboutus->image}}" class="w-100 img-fulid" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about_us_text">
                        <h1>{{$aboutus->title}}</h1>
                        <span>{{$aboutus->stitle}}</span>
                        <p>{{$aboutus->text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us area end -->
    @endif

    <!-- service area start -->
    <div class="about_service_area sec-ptb">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="hotel-service active">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>


                <div class="col-sm-4">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>


                <div class="col-sm-4">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa fa-cogs"></i>
                        </div>

                        <div class="content">

                            <h3>Quality Assured</h3>
                            <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- about service area end -->

    <!-- Team area start -->
    <div class="team_area sec-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team_title">
                        <h2>Our <span class="header_color">Team Mamber</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team_member">
                        <div class="team_img">
                            <img src="images/blog/b1.jpg" alt="" class="w-100 img-fulid" />
                        </div>
                        <div class="team_text text-center">
                            <h3>Mr: Qayum Hasan</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_member">
                        <div class="team_img">
                            <img src="images/blog/b1.jpg" alt="" class="w-100 img-fulid" />
                        </div>
                        <div class="team_text text-center">
                            <h3>Mr: Qayum Hasan</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_member">
                        <div class="team_img">
                            <img src="images/blog/b1.jpg" alt="" class="w-100 img-fulid" />
                        </div>
                        <div class="team_text text-center">
                            <h3>Mr: Qayum Hasan</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team_member">
                        <div class="team_img">
                            <img src="images/blog/b1.jpg" alt="" class="w-100 img-fulid" />
                        </div>
                        <div class="team_text text-center">
                            <h3>Mr: Qayum Hasan</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
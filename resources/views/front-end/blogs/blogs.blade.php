@extends('front-end.master')
@section('main-content')
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
    <!-- Blog-item start -->
    <section id="blog-details-area" class="sec-pad">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="blog-section">
                        <div class="row">

                            @if($blogs)
                            @foreach($blogs as $blog)
                            <div class="col-lg-6 col-sm-12 col-md-6 pb-5">
                                <article class="blog-post card">
                                    <div class="blog-img">
                                        <img src="images/blog/b1.jpg" alt="b1.jpg" class="img-fluid w-100">
                                    </div>
                                    <div class="blog-details text-left">
                                        <div class="blog-title">
                                            <h3>Awesome Car Cleaning</h3>
                                        </div>
                                        <ul class="blog-content">
                                            <li class="post-by"><a href="#"> <i class="fa fa-user-o text-thm1"> </i> Z Lopez</a>
                                            </li>
                                            <li class="post-by"><a href="#"> |</a></li>
                                            <li class="post-by"><a href="#"> <i class="fa fa-calendar text-thm1"> </i> 25, Jun
                                                    2017</a></li>
                                        </ul>
                                        <div class="blog-text clearfix">
                                            <p>Rando You consider your auto as a decent friend that has been with all of you along
                                                the street of life. You revere your four-wheeler and love to show it off to your
                                                companions. <a class="blog-btn" href="#"> Read More...</a></p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-side-categ">
                    <form>
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="Type Your Keywords">
                        </div>
                    </form>
                    <div class="resent-sidebar">
                        <div class="card2">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="popular-area" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">popular</a></li>
                                <li role="popular-area"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recent</a></li>
                                <li role="popular-area"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content sec-ptb">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b1.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciate</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b1.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciate</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b1.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciate</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciatefdhgfdsg</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciate</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be Apriciate</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be area</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be area</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                    <div class="row blog-popular-area">
                                        <div class="col-md-4">
                                            <div class="popular-img">
                                                <img src="images/blog/b10.jpg" alt="popular1" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-md-8 popular-text">
                                            <a href="">
                                                <h4>Best E-commerce Ever , You’ll be area</h4>
                                            </a>
                                            <span><i class="fa fa-comments-o"></i> 1.5K Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
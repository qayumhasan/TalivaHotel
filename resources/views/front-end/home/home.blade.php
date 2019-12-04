@extends('front-end.master')
@section('main-content')
 <!-- Main slider -->
    <section class="main-slider">
        <div class="container-fluid text-center">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                @foreach($sliders as $slider)
                <li class="slider-area clearfix">

                    <div class="image"><img src="{{asset('back-end/images/slider')}}/{{$slider->image}}" alt="{{$slider->image}}"></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="tp-title">{{$slider->heading}}</div>
                            <div class="text">{{$slider->short_desc}} </div>
                        </div>
                    </div>
                    <div class="slide-overlay"></div>
                </li>

                @endforeach

            </ul>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- search-area -->
    <section class="search-area clearfix">
        <div class="container">
            <form method="post" action="{{route('room.search')}}" class="search-form clearfix">
                @csrf
                <div class="single-search">
                    <div class="form-group">
                        <i class="fa fa-angle-down"></i>
                        <input type="text" name="arrival" placeholder="Arrival date" id="datepicker">
                    </div>
                </div>
                <div class="single-search">
                    <div class="form-group">
                        <i class="fa fa-angle-down"></i>
                        <input type="text" name="departure" placeholder="Departure date" id="datepicker_1">
                    </div>
                </div>
                <div class="single-search">
                    <div class="form-group">
                        <i class="fa fa-angle-down"></i>
                        <input type="number" name="room_guest" placeholder="Guests" id="datepicker_1">
                    </div>
                </div>
                <div class="single-search">
                    <div class="form-group select-box">
                        <select class="custom-select-box" name="room_type">
                            <option selected="selected">Room Type</option>
                            @foreach($roomtypes as $roomtype)
                            <option value="{{$roomtype->id}}">{{$roomtype->room_type}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="single-search btn-search">
                    <div class="form-group">
                        <div class="link"><button type="submit" class="search-btn">Book Now</button></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- search-area end -->


    <!-- room-section -->
    <section class="room-section sec-pad clearfix">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-main text-center clearfix">
                        <div class="small-section">Wellcome to Taliva Hotel</div>
                        <h1 class="about-heading">A BEST PLACE TO ENJOY YOUR LIFE</h1>
                        <div class="about-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec maurisac orci
                            tincidunt faucibus nec nec est. Etiam dapibus ultrices accumsan. Vestibulum et dignissim
                            diam,vel vestibulumnisi. Nullam elementum tellus eu fermentum pharetra. In hac habitasse
                        </div>
                    </div>
                </div>
            </div>
            <div class="row three-column-carousel clearfix">



                @foreach($rooms as $room)

                <div class="single-search inner-box text-center clearfix wow fadeInUp" data-wow-delay="0.5s">
                    <figure class="image-box">
                        <img src="{{asset('back-end/images/room')}}/{{$room->room_img}}" alt="{{$room->room_img}}" class="img-fluid w-100">
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <a href="{{route('room.details',$room->id)}}" class="link"><i class="icon fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="room-text-area">
                        <h3><a href="{{route('room.details',$room->id)}}">{{$room->room_name}}</a></h3>
                        <span>
                            ${{$room->room_price}}.00
                        </span>
                        <div class="text">{{str_limit($room->room_desc,70)}}
                            </div>
                        <ul class="book-now">
                            <li class="link"><a href="{{route('room.details',$room->id)}}" class="room-btn">Book Now</a></li>
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- room-section end -->


    <!-- service section area -->
    <section class="service-section gray-bg sec-pad clearfix">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-12">
                    <div class="title-header">Our Services</div>
                    <div class="title-text">Excepteur sint occaecat cupidatat</div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="hotel-service">

                        <div class="icon">
                            <i class="fa {{$service->logo}}"></i>
                        </div>

                        <div class="content">

                            <h3>{{$service->title}}</h3>
                            <p>{{str_limit($service->text,150)}}</p>

                        </div>

                    </div>

                </div>
                @endforeach





            </div>
        </div>
    </section>

    <section class="counter-up clearfix" style="background: url('{{asset('front-end/')}}/images/main-slider/4.jpg');">
        <div class="overlay">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="item media">
                                <div class="item-icon mr-3"><i class="fa fa-user"></i></div><!-- /.item-icon -->
                                <div class="item-details">
                                    <span class="count">765</span><!-- /.count -->
                                    <h3 class="item-title">Total Guest</h3><!-- /.item-title -->
                                </div><!-- /.item-details -->
                            </div><!-- /.item -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="item media">
                                <div class="item-icon mr-3"><i class="fa fa-user"></i></div><!-- /.item-icon -->
                                <div class="item-details">
                                    <span class="count">249</span><!-- /.count -->
                                    <h3 class="item-title">Total Staff</h3><!-- /.item-title -->
                                </div><!-- /.item-details -->
                            </div><!-- /.item -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="item media">
                                <div class="item-icon mr-3"><i class="fa fa-link"></i></div><!-- /.item-icon -->
                                <div class="item-details">
                                    <span class="count">8348</span><!-- /.count -->
                                    <h3 class="item-title">Yearly Guest</h3><!-- /.item-title -->
                                </div><!-- /.item-details -->
                            </div><!-- /.item -->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="item media">
                                <div class="item-icon mr-3"><i class="fa fa-trophy"></i></div><!-- /.item-icon -->
                                <div class="item-details">
                                    <span class="count">99</span><!-- /.count -->
                                    <h3 class="item-title">Client Feedbacks</h3><!-- /.item-title -->
                                </div><!-- /.item-details -->
                            </div><!-- /.item -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.section-padding -->
        </div><!-- /.overlay -->
    </section><!-- /.counter-up -->

    <section class="service-offer sec-pad clearfix">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-12">
                    <div class="title-header">Our Awasowm Offer</div>
                    <div class="title-text">Excepteur sint occaecat cupidatat</div>
                </div>
            </div>

            <div class="offer-service">
                <div class="item row">
                    @foreach($offers as $offer)
                    <div class="post col-lg-4 col-sm-6 col-md-4 wow fadeInUp">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="blog-single.html"><img src="{{asset('back-end/images/extraservice')}}/{{$offer->image}}" alt="{{$offer->image}}"></a>
                            </div>
                            <div class="content">
                                <h3 class="title"> <a href="{{route('offer.show',$offer->id)}}">{{$offer->fheading}}</a></h3>
                                <div class="short-text">{{$offer->sheading}}</div>
                                <div class="summary">{{$offer->text}}</div>
                                <a href="{{route('offer.show',$offer->id)}}" class="read-more">More Info</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--SERVICES SEC END-->

    <!-- video-section -->
    @isset($video)
    <section class="video-section clearfix" style="background-image: url({{asset('back-end/images/video')}}/{{$video->image}});">
        <div class="title text-center">{{$video->title}}</div>
        <div class="video-gallery">
            <div class="overlay-gallery">
                <div class="icon-holder">
                    <div class="icon">
                        <a class="html5lightbox" title="Video" href="{{$video->video}}"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endisset
    <!-- video-section end -->




    <section class="testimonial text-center sec-pad clearfix">
        <div class="section-padding">
            <div class="container wow fadeInUp" data-wow-delay="0.5s">
                <div id="testimonial-slider" class="testimonial-slider carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonial-slider" data-slide-to="1"></li>
                        <li data-target="#testimonial-slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="media">
                                <img class="rounded-circle mr-3" src="{{asset('front-end/')}}/images/avatar/5.png" alt="Avatar Image">
                                <div class="media-body">
                                    <h4 class="name"><a href="#">Julia Warren</a></h4>
                                    <span class="designation">Student</span>
                                </div>
                            </div><!-- /.top-content -->

                            <div class="bottom-content">
                                <span class="title">Awesome Learning Site</span>
                                <p>
                                    The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                    His many legs, pitifully thin compared with the size of the rest of him, waved about
                                    helplessly as he looked.
                                </p>
                            </div><!-- /.bottom-content -->
                        </div>

                        <div class="carousel-item">
                            <div class="media">
                                <img class="rounded-circle mr-3" src="{{asset('front-end/')}}/images/avatar/6.png" alt="Avatar Image">
                                <div class="media-body">
                                    <h4 class="name"><a href="#">Arthur Watson</a></h4>
                                    <span class="designation">Photographer</span>
                                </div>
                            </div><!-- /.top-content -->

                            <div class="bottom-content">
                                <span class="title">Awesome Learning Site</span>
                                <p>
                                    What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room
                                    although a little too small, lay peacefully between its four familiar walls.
                                </p>
                            </div><!-- /.bottom-content -->
                        </div>

                        <div class="carousel-item">
                            <div class="media">
                                <img class="rounded-circle mr-3" src="{{asset('front-end/')}}/images/avatar/7.png" alt="Avatar Image">
                                <div class="media-body">
                                    <h4 class="name"><a href="#">Janet Alvarado</a></h4>
                                    <span class="designation">Student</span>
                                </div>
                            </div><!-- /.top-content -->

                            <div class="bottom-content">
                                <span class="title">Awesome Learning Site</span>
                                <p>
                                    A collection of textile samples lay spread out on the table. Samsa was a travelling
                                    salesman and above it there hung a picture that he had recently cut out of an
                                    illustrated magazine and housed in a nice, gilded frame.
                                </p>
                            </div><!-- /.bottom-content -->
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#testimonial-slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#testimonial-slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </section><!-- /.testimonial -->

    <!-- Our Blog -->
    <section class="blog-area gray-bg sec-pad clearfix">
        <div class="container wow fadeInUp" data-wow-delay="0.5s">
            <div class="row">

                <div class="col-lg-12">
                    <div class="title-header">LATEST NEWS</div>
                    <div class="title-text">Excepteur sint occaecat cupidatat</div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <article class="blog-post">
                        <div class="blog-img">
                            <img src="{{asset('front-end/')}}/images/blog/b1.jpg" alt="b1.jpg" class="img-fluid w-100">
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


                <div class="col-lg-4 col-sm-12 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <article class="blog-post">
                        <div class="blog-img">
                            <img src="{{asset('front-end/')}}/images/blog/b1.jpg" alt="b1.jpg" class="img-fluid w-100">
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


                <div class="col-lg-4 col-sm-12 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <article class="blog-post">
                        <div class="blog-img">
                            <img src="{{asset('front-end/')}}/images/blog/b1.jpg" alt="b1.jpg" class="img-fluid w-100">
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



            </div>
        </div>
    </section>
@endsection
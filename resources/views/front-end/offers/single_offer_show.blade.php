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
                    <div class="row blog-details-page">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-item">
                                <h3>{{$offer->fheading}}</h3>
                                <div class="blog-img">
                                    <img src="{{asset('back-end/images/extraservice')}}/{{$offer->image}}" alt="{{$offer->image}}" class="img-fluid w-100">
                                </div>
                                <div class="blog-details pt-5">

                                    <h4>{{$offer->sheading}}</h4>

                                    <p>{{$offer->text}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 post-comments pt-5">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=515168822658537&autoLogAppEvents=1"></script>
                            <h3 class="reviews">Reviews & Comments</h3>
                            <hr>
                            <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Product-item end -->
    @endsection
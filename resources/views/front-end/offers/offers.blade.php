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

                <div class="col-md-12">
                    <div class="blog-section">
                        <div class="row">

                            @isset($offers)
                            @foreach($offers as $offer)
                            <div class="col-lg-4 col-sm-12 col-md-4 pb-5">
                                <article class="blog-post card">
                                    <div class="blog-img">
                                        <img src="{{asset('back-end/images/extraservice')}}/{{$offer->image}}" alt="{{$offer->image}}" class="img-fluid">
                                    </div>
                                    <div class="blog-details text-left">
                                        <div class="blog-title">
                                            <h3><a href="{{route('offer.show',$offer->id)}}">{{$offer->fheading}}</a></h3>

                                        </div>
                                        <ul class="blog-content">
                                            <li class="post-by">{{$offer->sheading}}</li>
                                        </ul>
                                        <div class="blog-text clearfix">
                                            <p>{{str_limit($offer->text,200)}}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            @endisset

                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
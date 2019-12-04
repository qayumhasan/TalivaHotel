
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


    <!-- Contract Us area start -->

    <section class="contract_us_area sec-pad">
        <div class="container">
            <div class="row">
                @isset($contact)
                <div class="col-lg-3">
                    <div class="contract">
                        <div class="hotline text-center">
                            <i class="fa fa-phone"></i>
                            <h5>HotLine Number</h5>
                            <p>{{$contact->phone}}</p>
                        </div>
                        <div class="address card mtb-30">
                            <h3>Contract</h3>
                            <div class="address_main">
                                <div class="row pt-4">
                                    <div class="col-lg-2 pt-2">
                                        <i class="fa fa-bookmark"></i>
                                    </div>
                                    <div class="col-lg-10">
                                        <span class="contract_address">{{$contact->address}}</span>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-lg-2">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-lg-10">
                                        <span>{{$contact->phone}}</span>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-lg-2">
                                        <i class="fa fa-inbox"></i>
                                    </div>
                                    <div class="col-lg-10">
                                        <span>{{$contact->email}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endisset
                <div class="col-lg-9">
                    <div class="contract_form">
                        <div class="contract_img">
                            @isset($contact)
                                <img src="{{asset('back-end/images/contact')}}/{{$contact->image}}" alt="{{$contact->image}}" class="img-fluid w-100">
                            @endisset
                        </div>
                        <div class="form_main pt-4">
                            <form action="{{route('message.send')}}" method="post">
                                @csrf
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-lg-12 p-0">
                                    <input type="text" class="form-control" placeholder="Name*" id="name" name="name" value="{{old('name')}}">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-lg-12 p-0">
                                    <input type="text" class="form-control" placeholder="Email*" id="email"
                                        name="email" value="{{old('email')}}">
                                </div>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group col-lg-12 p-0">
                                    <textarea class="form-control" placeholder="Massage*" id="massage" name="message"
                                        rows="5">{{old('message')}}</textarea>
                                <small>**Message Character can not more than 225</small>
                                </div>

                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn pull-right search-btn">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contract Us area end -->
    @endsection
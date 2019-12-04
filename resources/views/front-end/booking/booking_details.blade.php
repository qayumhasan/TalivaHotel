@extends('front-end.master')
@section('main-content')
	  <section class="hero_in hotels_detail">
        <div class="wrapper">
            <div class="container">
                <h1 class="hero-header text-center"><span></span>Hotel detail page</h1>
            </div>
            <div class="badcump-area text-center">
                <a href="" class="hero_beadcumb">Hotel</a>
                <a href="" class="hero_beadcumb"><i class="fa fa-long-arrow-right"></i></a>
                <a href="" class="hero_beadcumb current-page">Room Details</a>

            </div>
        </div>
    </section>
    <!--/hero_in-->

<section class="cheackout-details sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Guest Details</h3>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="guest-img">
                                <img src="{{asset('back-end/images/guest')}}/{{$guestinfo->image}}" alt="{{$guestinfo->image}}" class="w-100 img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="guest-details">
                                <ul class="nav p-2">
                                    <li><strong>Full Name:</strong></li>
                                    <li class="pull-right">{{$guestinfo->fname}} {{$guestinfo->lname}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Email:</strong></li>
                                    <li class="pull-right">{{$guestinfo->email}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Phone:</strong></li>
                                    <li class="pull-right">{{$guestinfo->phone_no}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Payment Method:</strong></li>
                                    <li class="pull-right">{{$guestinfo->payment_method}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-2">
                            <div class="guest-address p-3">
                                <h5>Address:</h5>
                                <span>{{$guestinfo->address}}</span>
                                <span>{{$guestinfo->town_city}},{{$guestinfo->country}}.</span>
                                <span>{{$guestinfo->postcode}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row sec-ptb">
                <div class="col-lg-6">
                    <hr>
                    <h3>Booking Details:</h3>
                    <div class="payment-details pt-3">
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Room Name:</strong></li>
                            <li class="pull-right">{{$bookinginfo->room_id}}</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Arrival Date:</strong></li>
                            <li class="pull-right">{{$bookinginfo->arrival}}</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Depature Date:</strong></li>
                            <li class="pull-right">{{$bookinginfo->departure}}</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Number Of Guest</strong></li>
                            <li class="pull-right">{{$bookinginfo->guest_no}} Person</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <h3>Payments Details</h3>
                    <div class="payment-amount pt-3">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Total Price</th>
                                    <td class="text-right">USD 1700/==</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td class="text-right">180/==</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td class="text-right">50/==</td>
                                </tr>
                                <tr>
                                    <th>Total Payable Amount</th>
                                    <td class="text-right">USD 1800/==</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-btn">
                        <a href="{{route('stripe.post',$bookinginfo->room_id)}}" class="search-btn pull-right">CheckOut Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
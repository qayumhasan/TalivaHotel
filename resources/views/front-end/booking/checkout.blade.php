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

{{$bookinginfo}}
    <!-- checkout part Start -->
    <div class="container sec-pad">
        <form action="{{route('guest.create')}}" class="checkout" method="post" name="checkout" enctype="multipart/form-data">
          @csrf
            <input type="text" name="booking_id" value="{{$bookinginfo->id}}">
            <input type="text" name="room_id" value="{{$bookinginfo->room_id}}">
            <h4 class="title-checkout">Biiling Address</h4>
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="title">First Name*</label>
                    <input type="text" class="form-control" name="fname" placeholder="Your name">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Last Name*</label>
                    <input type="text" class="form-control" name="lname" placeholder="Your last name">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Email Addreess:</label>
                    <input type="email" class="form-control" name="email" placeholder="Type your email">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Phone Number*</label>
                    <input type="text" class="form-control" name="phone_no" placeholder="10 digits format">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Address:</label>
                    <input type="text" class="form-control" name="address" placeholder="Street at apartment number">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Country*</label>
                    <input type="text" class="form-control" name="country" placeholder="United States">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Postcode / ZIP:</label>
                    <input type="text" class="form-control" name="postcode" placeholder="Your postal code">
                </div>
                <div class="form-group col-md-6">
                    <label class="title">Town / City*</label>
                    <input type="text" class="form-control" name="town_city" placeholder="City name">
                </div>
                <div class="form-group shipping col-md-6 pt-4">

                    <h4 class="discount">Your Image</h4>
                    <label class="title">Enter Your Image(Optional):</label>
                    <input type="file" class="form-control" name="image">
                    <!-- <button type="submit" class="search-btn">Apply</button> -->
                </div>
                <div class="form-group payment col-md-6 pt-4">
                    <h4 class="title-checkout">Payment Method</h4>
                    <ul>
                        <li><label class="inline"><input type="radio" name="payment_method" value="1"><span class="input"></span>Direct Bank Transder</label></li>
                        <li><label class="inline"><input type="radio" name="payment_method" value="1"><span class="input"></span>Cash on Delivery</label>
                        </li>
                        <li><label class="inline"><input type="radio" name="payment_method" value="1"><span class="input"></span>Paypal</label>
                        </li>
                    </ul>
                    <p class="credit">You can pay with your credit<br> card if you don't have a paypal account</p>
                    <span class="grand-total">Grand Total<span>$100.00</span></span>
                    <button type="submit" class="search-btn">Place Order Now</button>
                </div>
            </div>
        </form>
    </div>
    <!-- checkout part End -->
@endsection
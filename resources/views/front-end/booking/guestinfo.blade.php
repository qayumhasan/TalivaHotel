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
<!-- checkout part Start -->
<div class="container sec-pad">
    <form role="form" action="{{route('guest.create')}}" method="post" class="checkout" enctype="multipart/form-data">
        @csrf
        <h4 class="title-checkout">Biiling Address</h4>
        <div class="row">
            <div class="form-group col-md-6">
                @error('fname')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror

                <label class="title">First Name*</label>
                <input type="hidden" name="booking_id" value="{{$bookinginfo->id}}">

                <input type="text" class="form-control" value="{{old('fname')}}" name="fname" placeholder="Your name">
            </div>
            <div class="form-group col-md-6">
                @error('lname')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Last Name*</label>
                <input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Your last name">
            </div>
            <div class="form-group col-md-6">
                @error('email')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Email Addreess:</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Type your email">
            </div>
            <div class="form-group col-md-6">
                @error('phone_no')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Phone Number*</label>
                <input type="text" class="form-control" name="phone_no" value="{{old('phone_no')}}" placeholder="10 digits format">
            </div>
            <div class="form-group col-md-6">
                @error('address')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Address:</label>
                <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Street at apartment number">
            </div>
            <div class="form-group col-md-6">
                @error('country')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Country*</label>
                <input type="text" class="form-control" name="country" value="{{old('country')}}" placeholder="United States">
            </div>
            <div class="form-group col-md-6">
                @error('postcode')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Postcode / ZIP:</label>
                <input type="text" class="form-control" name="postcode" value="{{old('postcode')}}" placeholder="Your postal code">
            </div>
            <div class="form-group col-md-6">
                @error('town_city')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Town / City*</label>
                <input type="text" class="form-control" name="town_city" value="{{old('town_city')}}" placeholder="City name">
            </div>
            <div class="form-group col-md-6 pt-4">
                @error('image')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <label class="title">Inter Your Image Here</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group payment col-md-6 pt-4">

                <h4 class="title-checkout">Payment Method</h4>
                @error('payment_method')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
                <ul>
                    <li><label class="inline"><input type="radio" name="payment_method" value="1"><span class="input"></span>Direct Bank
                Transder</label></li>
                <li><label class="inline"><input type="radio" name="payment_method" value="2"><span class="input"></span>Cash on
            Delivery</label>
        </li>
        <li><label class="inline"><input type="radio" name="payment_method" value="3"><span class="input"></span>Paypal</label>
    </li>
</ul>
<button type="submit" class="search-btn">Place Order Now</button>
</div>
</div>
</form>
</div>
<!-- checkout part End -->
@endsection
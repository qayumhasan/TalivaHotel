
@extends('front-end.master')
@section('main-content')
    <!-- End Main Header -->
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
    <div class="stripe-area sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <div class="strip-main">
                        <h3>Stripe Payments</h3>
                         @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
                        <form role="form" action="{{ route('stripe.get') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                                                    @csrf
                        <div class="panel card panel-default credit-card-box">

                            <div class='form-row row'>
                                <div class='col-md-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text' placeholder="ex. test">
                                </div>
                            </div>
                            <div class='form-row row'>
                                <div class='col-md-12 form-group'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' placeholder="ex. 2424 2424 2424 2424" type='text'>
                                </div>
                            </div>
                            <div class='form-row row'>
                                <div class='col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC Number</label>
                                     <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn search-btn btn-lg btn-block" type="submit">Pay Now ($100)</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
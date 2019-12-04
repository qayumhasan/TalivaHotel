@extends('front-end.master')
@section('main-content')
	    <section class="hero_in">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Paris tours list</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
      <section class="room-details">
    <nav class="room-details" id="navbar">
      <div class="container">
        <ul class="clearfix">
          <li><a href="#room-description" class="active">Description</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <li><a href="#sidebar">Booking</a></li>
        </ul>
      </div>
    </nav>


    <div class="container">
      <div class="row">

        <div class="col-lg-8 sec-ptb">
          <section id="room-description">
            <h2>{{$roomdetails->room_name}}</h2>
            <div class="room-details-img clearfix">
              <img src="{{asset('back-end/images/room')}}/{{$roomdetails->room_img}}" class="w-100 img-fluid" alt="{{$roomdetails->room_img}}">
            </div>
            <p>{{$roomdetails->room_desc}}</p>
            <div class="row room-details-amenites">
              @foreach(json_decode($roomdetails->room_amenities) as $amenitie)
              <div class="col-lg-6 pb-4">
                <li><i class="fa {{App\Model\Amenitie::find($amenitie)->amenities_icon}} fa-fw"></i>{{App\Model\Amenitie::find($amenitie)->amenities_name}}</li>
              </div>
              @endforeach
            </div>
            <!-- /row -->


          </section>
          <!-- /section -->
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=515168822658537&autoLogAppEvents=1"></script>

          <section id="reviews">
            <h3 class="reviews">Reviews & Comments</h3>
            <hr>
            <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>
            <!-- /review-container -->
          </section>

        </div>
        <!-- /col -->

        <aside class="col-lg-4">

          <div class="booking-area clearfix">
            <div class="price">
              <span>{{$roomdetails->room_price}}$ <small>Night</small></span>
              <div class="score"><strong>{{$roomdetails->room_guest}} person</strong></div>
            </div>
            <form action="{{route('booking.info')}}" method="post">
            @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="arrival" id="datepicker" placeholder="Arrival Date">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="departure" id="datepicker_1" placeholder="Departure Date">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="guest_no" placeholder="Number Of Guest">
              </div>
              <div class="form-group">
                <select class="form-control" name="room_type">
                  <option>1</option>
                </select>
              </div>
              <input type="hidden" name="room_id" value="{{$roomdetails->id}}">
              <div class="form-group">
                <div class="link">
                  <button type="submit" class="search-btn w-100">Book Now</button>
                </div>
              </div>
            </form>
          </div>
          </form>
        </aside>

      </div>
      <!-- /row -->
    </div>
  </section>
  <!-- /container -->
    <!-- /container -->
@endsection
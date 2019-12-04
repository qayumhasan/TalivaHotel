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


    <div class="container sec-pad">
        <div class="col-lg-12">
            <div class="row no-gutters custom-search-area inner">
                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" type="text" name="date" placeholder="Arrival date" id="datepicker">
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="text" name="date" placeholder="Departure date" id="datepicker_1">
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group select-box">
                        <select class="custom-select-box">
                            <option selected="selected">Room Type</option>
                            <option>Guests Lavel 1</option>
                            <option>Guests Lavel 2</option>
                            <option>Guests Lavel 3</option>
                            <option>Guests Lavel 4</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <input type="submit" class="btn_search" value="Search">
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /custom-search-area -->
        @foreach($rooms as $room)
        <div class="room-list">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <figure>
                        <a href="{{route('room.details',$room->id)}}"><img src="{{asset('back-end/images/room')}}/{{$room->room_img}}" class="img-fluid w-100" alt="{{$room->room_img}}">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-7">
                    <div class="wrapper">
                        <h3><a href="{{route('room.details',$room->id)}}">{{$room->room_name}}</a></h3>
                        <p>{{str_limit($room->room_desc,220)}}</p>

                        <ul class="hotel_facilities">
                            @foreach(json_decode($room->room_amenities) as $amenitie)
                            <li><i class="fa {{App\Model\Amenitie::find($amenitie)->amenities_icon}} fa-fw"></i>{{App\Model\Amenitie::find($amenitie)->amenities_name}}</li>

                            @endforeach
                        </ul>
                    </div>
                    <ul>
                        <a href="{{route('room.details',$room->id)}}"><li class="search-btn">Book Now </li></a>
                        <li><span class="price">From <strong>${{$room->room_price}}</strong> /per Night</span></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- /container -->

@endsection
@extends('back-end.master')
@section('main-content')
        <div id="page-wrapper">
            <div class="row pt-50">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Room Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img_opt">
                                        <img src="{{asset('back-end/images/room')}}/{{$room->room_img}}" alt="{{$room->room_img}}" class="img-responsive w-100">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="room-amenit">
                                        <ul>
                                            <li><strong>Room No:</strong></li>
                                            <li class="pull-right">{{$room->room_no}}</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Room Name:</strong></li>
                                            <li class="pull-right">{{$room->room_name}}</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Room Type:</strong></li>
                                            <li class="pull-right">{{$roomtype->room_type}}</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Room Size:</strong></li>
                                            <li class="pull-right">{{$room->room_size}}</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Maximum Number Of Guest:</strong></li>
                                            <li class="pull-right">{{$room->room_guest}} Person</li>
                                        </ul>
                                        <ul>
                                            <li><strong>Room Status:</strong></li>
                                            <li class="pull-right">{{$room->status==2?'Published':'UnPublished'}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="room-desc">
                                        <h3 class="desc-header">Room Description:</h3>
                                        <p>{{$room->room_desc}}</p>
                                    </div>
                                    <hr>
                                    @if($room->room_amenities)
                                    <div class="room-amenits">
                                        <h3>Room Amenitis:</h3>
                                        <ul class="nav">

                                            @foreach(json_decode($room->room_amenities) as $amenitie)

                                            <li class="pull-left p-2"><i class="fa {{App\Model\Amenitie::find($amenitie)->amenities_icon}} fa-fw"></i>{{App\Model\Amenitie::find($amenitie)->amenities_name}}</li>
                                            @endforeach


                                        </ul>

                                    </div>
                                    @endif
                                </div>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection
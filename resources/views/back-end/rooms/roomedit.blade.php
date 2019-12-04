@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update Your Room</h3>
            <a href="{{route('room.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Room Update Panel
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('room.update',$room->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('room_no'))
                                              <div class="error">{{ $errors->first('room_no') }}</div>
                                              @else
                                                Room Number
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="room_no" value="{{$room->room_no}}" placeholder="Enter Your Room Number. EX. A-702">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                          @if ($errors->has('room_name'))
                                           <div class="error">{{ $errors->first('room_name') }}</div>
                                          @else
                                            Room Name
                                          @endif
                                        </label>
                                        <input class="form-control" name="room_name" value="{{$room->room_name}}"  placeholder="Enter Room Name..">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('room_desc'))
                                              <div class="error">{{ $errors->first('room_desc') }}</div>
                                            @else
                                              Room Description
                                            @endif
                                        </label>
                                        <textarea class="form-control" name="room_desc" rows="5" placeholder="Write Your Room Description......">{{$room->room_desc}}"</textarea>
                                    </div>
                                    <div class="form-group col-lg-4 p-0">
                                        <label>
                                        @if ($errors->has('room_price'))
                                          <div class="error">{{ $errors->first('room_price') }}</div>
                                        @else
                                          Room Price
                                        @endif
                                        </label>
                                        <input class="form-control" type="number" name="room_price" value="{{$room->room_price}}" placeholder="Enter Room Price..">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>
                                            @if ($errors->has('room_size'))
                                              <div class="error">{{ $errors->first('room_size') }}</div>
                                            @else
                                              Room Size
                                            @endif
                                        </label>
                                        <input class="form-control" type="number" name="room_size"  value="{{$room->room_size}}" placeholder="Enter Room Size..">
                                    </div>
                                    <div class="form-group col-lg-4 p-0">
                                        <label>
                                            @if ($errors->has('room_guest'))
                                              <div class="error">{{ $errors->first('room_guest') }}</div>
                                            @else
                                              Room Guest
                                            @endif
                                        </label>
                                        <input class="form-control" type="number" name="room_guest"  value="{{$room->room_guest}}" placeholder="Enter Number of Guest..">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>
                                            @if ($errors->has('room_amenities'))
                                              <div class="error">{{ $errors->first('room_amenities') }}</div>
                                            @else
                                              Room Amenities
                                            @endif
                                        </label>
                                        <select class="form-control multiple" id="room-amenities" name="room_amenities[]" multiple="multiple" >
                                            <option>Select Your Amenities</option>
                                            @foreach($amenities as $amenitie)
                                                <option value="{{$amenitie->id}}">{{$amenitie->amenities_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>
                                            @if ($errors->has('room_type'))
                                              <div class="error">{{ $errors->first('room_type') }}</div>
                                            @else
                                              Room Types
                                            @endif
                                        </label>
                                        <select class="form-control" name="room_type">
                                            <option>Select A Room Type</option>
                                            @foreach($roomtypes as $roomtype)
                                                <option value="{{$roomtype->id}}">{{$roomtype->room_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>
                                            @if ($errors->has('room_img'))
                                              <div class="error">{{ $errors->first('room_img') }}</div>
                                            @else
                                              Room Images
                                            @endif
                                        </label><br>
                                        <label>
                                            <img src="{{asset('back-end/images/room/')}}/{{$room->room_img}}" alt="{{$room->room_img}}" width="600px;" height="200px">
                                        </label>
                                        <input class="form-control" type="file" name="room_img"  placeholder="Enter Room Guest..">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('status'))
                                              <div class="error">{{ $errors->first('status') }}</div>
                                              @else
                                                Are You went to published this post?
                                              @endif
                                        </label>

                                            <div class=" col-lg-12 p-0">
                                                <input type="radio" name="status" value="1"> YES
                                                &nbsp&nbsp&nbsp
                                                <input type="radio" name="status" value="0"> NO
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block ">Update Room</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
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

@section('footer-script')
    <script>
  $(document).ready(function() {
    $('.multiple').select2();
  });
  </script>
@endsection
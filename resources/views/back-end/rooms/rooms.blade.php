@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Rooms</h3>
                    <a href="{{route('room.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Room</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        @if (session('msg'))
                        <div class="panel-insert">
                            {{ session('msg') }}
                        </div>
                        @elseif (session('update_msg'))
                        <div class="panel-update">
                            {{ session('update_msg') }}
                        </div>
                        @elseif (session('del_msg'))
                        <div class="panel-delete">
                            {{ session('del_msg') }}
                        </div>
                        @else
                        <div class="panel-heading">
                            All Room Are Here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Room Number</th>
                                        <th>Room Name</th>
                                        <th>Room Type</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                    <tr class="odd gradeX">
                                        <td>{{$room->room_no}}</td>
                                        <td>{{$room->room_name}}</td>
                                        <td>
                                            @isset(App\Model\RoomType::find($room->room_type)->room_type)
                                                {{App\Model\RoomType::find($room->room_type)->room_type}}
                                            @endisset
                                        </td>

                                        <td class="center">{{$room->status==2?'Active':'InActive'}}</td>
                                        <td class="center text-center">

                                                <a href="{{route('room.show',$room->id)}}" class="btn btn-primary float-left"><i class="fa fa-eye fa-fw"></i></a>

                                                <a href="{{route('room.edit',$room->id)}}" class="btn btn-warning float-left"><i class="fa fa-edit fa-fw"></i></a>
                                                <form action="{{ route('room.destroy',$room->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <button class="btn btn-danger float-left"><i class="fa fa-tasks fa-fw"></i></button>

                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
@endsection
@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Rooms</h3>
                    <a href="{{route('roomtype.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Room Type</button></a>
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
                            All Room Type Are Here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Room Type</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roomtypes as $roomtype)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$roomtype->room_type}}</td>
                                        <td class="center">{{$roomtype->status==2?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('roomtype.edit',$roomtype->id)}}" class="btn btn-warning float-left"><i class="fa fa-edit fa-fw"></i></a>

                                            <form action="{{route('roomtype.destroy',$roomtype->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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
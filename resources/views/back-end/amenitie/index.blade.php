@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Amenities</h3>
                    <a href="{{route('amenitie.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Amenitie</button></a>
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
                            All Room Amenities Are Here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Amenitie Name</th>
                                        <th>Amenitie Icon</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($amenities as $amenitie)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$amenitie->amenities_name}}</td>
                                        <td><i class="fa {{$amenitie->amenities_icon}}"></i></td>
                                        <td>{{$amenitie->status}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('amenitie.edit',$amenitie->id)}}" class="btn btn-warning float-left"><i class="fa fa-edit fa-fw"></i></a>

                                            <form action="{{route('amenitie.destroy',$amenitie->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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
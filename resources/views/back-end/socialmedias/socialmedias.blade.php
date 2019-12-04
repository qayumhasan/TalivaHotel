@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Social Media Setting</h3>
                    <a href="{{route('socialmedias.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Social Media</button></a>
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
                            All Social Media list are here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                        <th>Youtube</th>
                                        <th>Google Pluse</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($socialmedias as $socialmedia)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$socialmedia->facebook}}</td>
                                        <td>{{$socialmedia->twitter}}</td>
                                        <td>{{$socialmedia->instagram}}</td>
                                        <td>{{$socialmedia->youtube}}</td>
                                        <td>{{$socialmedia->google_pluse}}</td>
                                        <td class="center">{{$socialmedia->status==1?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('socialmedias.edit',$socialmedia->id)}}" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i></a>

                                            <form action="{{route('socialmedias.destroy',$socialmedia->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
                                                <button class="btn btn-danger"><i class="fa fa-tasks fa-fw"></i></button>

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
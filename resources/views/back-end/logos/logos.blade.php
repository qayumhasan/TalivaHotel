@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Web Logos</h3>
                    <a href="{{route('logos.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Logos</button></a>
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
                            All logos list are here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Header Logo</th>
                                        <th>Footer Logo</th>
                                        <th>Favicon</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logos as $logo)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset('back-end/images/logos')}}/{{$logo->main_logo}}" alt="{{$logo->main_logo}}" width="100px"></td>

                                        <td><img src="{{asset('back-end/images/logos')}}/{{$logo->footer_logo}}" alt="{{$logo->footer_logo}}" width="100px"></td>

                                        <td><img src="{{asset('back-end/images/logos')}}/{{$logo->favicon}}" alt="{{$logo->favicon}}" width="100px"></td>

                                        <td class="center">{{$logo->status==1?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('logos.edit',$logo->id)}}" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i></a>

                                            <form action="{{route('logos.destroy',$logo->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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
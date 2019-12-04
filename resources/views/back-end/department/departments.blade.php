@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Employees Department</h3>
                    <a href="{{route('department.create')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Add Department</button></a>
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
                            All Department list are here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Department Name</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($departments as $department)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$department->name}}</td>
                                        <td class="center">{{$department->status==1?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('department.edit',$department->id)}}" class="btn btn-warning"><i class="fa fa-edit fa-fw"></i></a>

                                            <form action="{{route('department.destroy',$department->id)}}" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
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
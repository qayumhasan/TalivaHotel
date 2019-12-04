@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Guest Information</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        @if (session('del_msg'))
                        <div class="panel-delete">
                            {{ session('del_msg') }}
                        </div>
                        @else
                        <div class="panel-heading">
                            All Guest information are here
                        </div>

                        @endif
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Booking ID</th>
                                        <th>Guest Name</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Phone</th>
                                        <th>Arrival</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($guestinfos as $guestinfo)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$guestinfo->bookingdatas->booking_no}}</td>
                                        <td>{{$guestinfo->fname}} {{$guestinfo->lname}}</td>
                                        <td>{{$guestinfo->email}}</td>
                                        <td>{{$guestinfo->phone_no}}</td>
                                        <td>{{$guestinfo->country}}</td>
                                        <td>{{$guestinfo->bookingdatas->arrival}}</td>
                                        <td class="center">{{$guestinfo->status==1?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="{{route('guestinfo.show',$guestinfo->id)}}" class="btn btn-warning"><i class="fa fa-eye fa-fw"></i></a>

                                            <a href="{{route('guestinfo.destroy',$guestinfo->id)}}" class="btn btn-danger"><i class="fa fa-tasks fa-fw"></i></a>

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
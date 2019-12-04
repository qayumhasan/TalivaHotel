@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Booking Information</h3>
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
                                        <th>Booking Date</th>
                                        <th>Country</th>
                                        <th>Arrival Date</th>
                                        <th>Departure Date</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookinginfos as $bookinginfo)
                                    <tr class="odd gradeX">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$bookinginfo->booking_no}}</td>
                                        <td>{{$bookinginfo->guestdatas->fname}}</td>
                                        <td>{{$bookinginfo->guestdatas->email}}</td>
                                        <td>{{$bookinginfo->guestdatas->created_at->format('d M y')}}</td>
                                        <td>{{$bookinginfo->guestdatas->country}}</td>
                                        <td>{{$bookinginfo->arrival}}</td>
                                        <td>{{$bookinginfo->departure}}</td>

                                        <td class="center">{{$bookinginfo->status==1?'Active':'InActive'}}</td>
                                        <td class="center text-center">
                                            <a href="" class="btn btn-warning"><i class="fa fa-eye fa-fw"></i></a>

                                            <a href="" class="btn btn-danger"><i class="fa fa-tasks fa-fw"></i></a>

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
@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Messages</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$message->name}} Message
                        </div>


                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table>
                                <table width="100%" class="table table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$message->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$message->email}}</td>
                                </tr>
                                <tr>
                                    <th>Sending Date</th>
                                    <td>{{$message->created_at}}</td>
                                </tr>


                                <tr>
                                    <td colspan="2"><strong>Message: </strong>{{$message->message}}</td>
                                </tr>
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
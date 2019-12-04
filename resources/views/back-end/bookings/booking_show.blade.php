@extends('back-end.master')
@section('main-content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Guest Information</h3>
                    <a href="{{route('guest.info')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row p-5">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="guest-img">
                                <img src="{{asset('back-end/images/guest')}}/{{$guestinfo->image}}" alt="{{$guestinfo->image}}" class="w-100 img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="guest-details">
                                <ul class="nav p-2">
                                    <li><strong>Full Name:</strong></li>
                                    <li class="pull-right">{{$guestinfo->fname}} {{$guestinfo->lname}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Email:</strong></li>
                                    <li class="pull-right">{{$guestinfo->email}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Phone:</strong></li>
                                    <li class="pull-right">{{$guestinfo->phone_no}}</li>
                                </ul>
                                <ul class="nav p-2">
                                    <li><strong>Payment Method:</strong></li>
                                    <li class="pull-right">{{$guestinfo->payment_method}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 pl-2">
                            <div class="guest-address p-3">
                                <h5>Address:</h5>
                                <span>{{$guestinfo->address}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row sec-ptb">
                <div class="col-lg-6">
                    <hr>
                    <h3>Booking Details:</h3>
                    <div class="payment-details pt-3">
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Room Type:</strong></li>
                            <li class="pull-right">Supper Quen Room</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Arrival Date:</strong></li>
                            <li class="pull-right">12/02/2019</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Depature Date:</strong></li>
                            <li class="pull-right">12/02/2019</li>
                        </ul>
                        <ul class="nav p-2">
                            <li class="pr-4"><strong>Night:</strong></li>
                            <li class="pull-right">1 Night</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <hr>
                    <h3>Payments Details</h3>
                    <div class="payment-amount pt-3">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Total Price</th>
                                    <td class="text-right">USD 1700/==</td>
                                </tr>
                                <tr>
                                    <th>Discount</th>
                                    <td class="text-right">180/==</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td class="text-right">50/==</td>
                                </tr>
                                <tr>
                                    <th>Total Payable Amount</th>
                                    <td class="text-right">USD 1800/==</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->
@endsection
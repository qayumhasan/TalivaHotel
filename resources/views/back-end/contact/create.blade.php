@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Contact Information</h3>
            <a href="{{route('contact.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Contact Information Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('address'))
                                              <div class="error">{{ $errors->first('address') }}</div>
                                              @else
                                                Address:
                                              @endif
                                        </label>
                                        <textarea class="form-control" name="address" rows="5" placeholder="Enter Contact Address Here... ">{{ old('address') }}</textarea>
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('phone'))
                                              <div class="error">{{ $errors->first('phone') }}</div>
                                              @else
                                                Phone Number
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="phone" value="{{ old('phone') }}" placeholder="Enter Phone Number Here... ">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('email'))
                                              <div class="error">{{ $errors->first('email') }}</div>
                                              @else
                                                Email:
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="email" value="{{ old('email') }}" placeholder="Enter Email Here... ">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('image'))
                                              <div class="error">{{ $errors->first('image') }}</div>
                                              @else
                                                Enter Google Map Image:
                                              @endif
                                        </label>
                                        <input class="form-control" type="file"  name="image" value="{{ old('image') }}" placeholder="Enter Map Image Here... ">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('status'))
                                              <div class="error">{{ $errors->first('status') }}</div>
                                              @else
                                                Are You went to published this post?
                                              @endif
                                        </label>

                                            <div class=" col-lg-12 p-0">
                                                <input type="radio" name="status" value="1"> YES
                                                &nbsp&nbsp&nbsp
                                                <input type="radio" name="status" value="0"> NO
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block ">Save Contact</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection
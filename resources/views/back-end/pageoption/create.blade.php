@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Pageoption</h3>
            <a href="{{route('pageoptions.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Your Pageoption Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('pageoptions.store')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('email'))
                                              <div class="error">{{ $errors->first('email') }}</div>
                                              @else
                                                Email
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="email" value="{{ old('email') }}" placeholder="Enter Your email  Here...">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('address'))
                                              <div class="error">{{ $errors->first('address') }}</div>
                                              @else
                                                Address
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="address" value="{{ old('address') }}" placeholder="Enter Your address  Here...">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('copyright'))
                                              <div class="error">{{ $errors->first('copyright') }}</div>
                                              @else
                                                Copyright
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="copyright" value="{{ old('copyright') }}" placeholder="Enter Your copyright text  Here...">
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
                                    <button type="submit" class="btn btn-primary btn-block ">Save pageoption</button>
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
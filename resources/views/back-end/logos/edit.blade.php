@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update Logo and Favicon </h3>
            <a href="{{route('logos.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Logo and Favicon Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('logos.update',$logo->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            <img src="{{asset('back-end/images/logos/')}}/{{$logo->main_logo}}" alt="{{$logo->main_logo}}" width="60px;">
                                        </label>
                                        <br>
                                        <label>
                                            @if ($errors->has('main_logo'))
                                              <div class="error">{{ $errors->first('main_logo') }}</div>
                                              @else
                                                Header Logo
                                              @endif
                                        </label>
                                        <input class="form-control" type="file"  name="main_logo" value="{{ old('main_logo') }}">
                                    </div>


                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            <img src="{{asset('back-end/images/logos/')}}/{{$logo->footer_logo}}" alt="{{$logo->footer_logo}}" width="60px;">
                                        </label>
                                        <br>
                                        <label>
                                            @if ($errors->has('footer_logo'))
                                              <div class="error">{{ $errors->first('footer_logo') }}</div>
                                              @else
                                                Footer Logo
                                              @endif
                                        </label>
                                        <input class="form-control" type="file"  name="footer_logo" value="{{ old('footer_logo') }}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            <img src="{{asset('back-end/images/logos/')}}/{{$logo->favicon}}" alt="{{$logo->favicon}}" width="60px;">
                                        </label>
                                        <br>
                                        <label>
                                            @if ($errors->has('favicon'))
                                              <div class="error">{{ $errors->first('favicon') }}</div>
                                              @else
                                                Favicon Image
                                              @endif
                                        </label>
                                        <input class="form-control" type="file"  name="favicon" value="{{ old('favicon') }}">
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
                                    <button type="submit" class="btn btn-primary btn-block ">Save Logos</button>
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
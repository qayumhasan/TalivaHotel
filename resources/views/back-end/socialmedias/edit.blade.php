@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update Social Media</h3>
            <a href="{{route('socialmedias.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Your Social Medias Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('socialmedias.update',$socialmedia->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('facebook'))
                                              <div class="error">{{ $errors->first('facebook') }}</div>
                                              @else
                                                Facebook Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="facebook" value="{{ $socialmedia->facebook }}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('twitter'))
                                              <div class="error">{{ $errors->first('twitter') }}</div>
                                              @else
                                                Twitter Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="twitter" value="{{ $socialmedia->twitter }}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('instagram'))
                                              <div class="error">{{ $errors->first('instagram') }}</div>
                                              @else
                                                Instagram Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="instagram" value="{{ $socialmedia->instagram }}" >
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('youtube'))
                                              <div class="error">{{ $errors->first('youtube') }}</div>
                                              @else
                                                Youtube Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="youtube" value="{{ $socialmedia->youtube}}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('google_pluse'))
                                              <div class="error">{{ $errors->first('google_pluse') }}</div>
                                              @else
                                                Google Pluse Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="google_pluse" value="{{ $socialmedia->google_pluse}}" >
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
                                    <button type="submit" class="btn btn-primary btn-block ">Update Social Media</button>
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
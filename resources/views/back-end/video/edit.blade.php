@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update video Information</h3>
            <a href="{{route('video.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update video Information Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('video.update',$video->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('title'))
                                            <div class="error">{{ $errors->first('title') }}</div>
                                            @else
                                            video Title
                                            @endif
                                        </label>
                                        <input class="form-control" type="text"  name="title" value="{{$video->title}}">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('video'))
                                            <div class="error">{{ $errors->first('video') }}</div>
                                            @else
                                            video Logo
                                            @endif
                                        </label>
                                        <input class="form-control" type="text"  name="video"  value="{{$video->video}}">
                                    </div>
                                    <div class="form-group col-lg-12 p-0">

                                        <label>
                                            @if ($errors->has('image'))
                                            <div class="error">{{ $errors->first('image') }}</div>
                                            @else
                                            video Image
                                            @endif
                                        </label>
                                        <br>
                                        <label>
                                            <img src="{{asset('back-end/images/video/')}}/{{$video->image}}" alt="{{$video->image}}" width="600px;" height="200px">
                                        </label>
                                        <input class="form-control" type="file"  name="image" value="{{ old('image') }}">
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
                                    <button type="submit" class="btn btn-primary btn-block ">Update Video</button>
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
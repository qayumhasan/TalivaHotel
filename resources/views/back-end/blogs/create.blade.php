@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Blog</h3>
            <a href="{{route('blog.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Blog Here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('title'))
                                              <div class="error">{{ $errors->first('title') }}</div>
                                              @else
                                                Blog Title
                                              @endif
                                        </label>
                                        <input type="hidden" name="author" value="1">
                                        <input class="form-control" type="text"  name="title" value="{{ old('title') }}" placeholder="Enter Blog Title Here...">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('text'))
                                              <div class="error">{{ $errors->first('text') }}</div>
                                              @else
                                                Blog Details
                                              @endif
                                        </label>
                                        <textarea class="form-control" name="text" rows="5" placeholder="Enter Blog Details Here... ">{{ old('text') }}</textarea>
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('image'))
                                              <div class="error">{{ $errors->first('image') }}</div>
                                              @else
                                                Blog Image
                                              @endif
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
                                    <button type="submit" class="btn btn-primary btn-block ">Save Blog</button>
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
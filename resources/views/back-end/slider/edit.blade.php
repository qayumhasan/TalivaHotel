@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update Slider</h3>
            <a href="{{route('slider.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Slider Information here
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                               @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('heading'))
                                              <div class="error">{{ $errors->first('heading') }}</div>
                                              @else
                                                Slider Heading
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="heading" value="{{$slider->heading }}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('short_desc'))
                                              <div class="error">{{ $errors->first('short_desc') }}</div>
                                              @else
                                                Slider Short Description
                                              @endif
                                        </label>
                                        <textarea class="form-control" name="short_desc" rows="3">{{$slider->short_desc}}"</textarea>
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            <img src="{{asset('back-end/images/slider/')}}/{{$slider->image}}" alt="{{$slider->image}}" width="600px;" height="200px">
                                        </label>
                                        <br>
                                        <label>
                                            @if ($errors->has('image'))
                                              <div class="error">{{ $errors->first('image') }}</div>
                                            @else
                                              Slider Images
                                            @endif
                                        </label>

                                        <input class="form-control" type="file" name="image"  placeholder="Enter Slider Images..">
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
                                    <button type="submit" class="btn btn-primary btn-block ">Update Slider</button>
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
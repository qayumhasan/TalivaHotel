@extends('back-end.master')
@section('main-content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Update Employee Information</h3>
            <a href="{{route('roomtype.index')}}"><button type="submit" class="btn btn-primary add-btn"><i class="fa fa-plus"></i>Go Back</button></a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Employee Information
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="{{route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('name'))
                                              <div class="error">{{ $errors->first('name') }}</div>
                                              @else
                                                Employee Name
                                              @endif
                                        </label>
                                        <input class="form-control" type="text"  name="name" value="{{$employee->name}}">
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            @if ($errors->has('department'))
                                              <div class="error">{{ $errors->first('department') }}</div>
                                            @else
                                              Employee Department
                                            @endif
                                        </label>
                                        <select class="form-control" name="department">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12 p-0">
                                        <label>
                                            <img src="{{asset('back-end/images/employee/')}}/{{$employee->image}}" alt="{{$employee->image}}" width="600px;" height="200px">
                                        </label>
                                        <br>
                                        <label>
                                            @if ($errors->has('image'))
                                              <div class="error">{{ $errors->first('image') }}</div>
                                            @else
                                              Employee Images
                                            @endif
                                        </label>
                                        <input class="form-control" type="file" name="image"  placeholder="Enter Empoyee Images..">
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
                                    <button type="submit" class="btn btn-primary btn-block ">Update Employee</button>
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
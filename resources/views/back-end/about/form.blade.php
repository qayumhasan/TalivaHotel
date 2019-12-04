<div class="form-row">
  <div class="form-group col-lg-12 p-0">
    <label>
      @if ($errors->has('title'))
      <div class="error">{{ $errors->first('title') }}</div>
      @else
      About Us Title
      @endif
    </label>
    <input class="form-control" type="text"  name="title" value="{{ old('title') ??$about->stitle }}" placeholder="Enter About Title Here...">
  </div>
  <div class="form-group col-lg-12 p-0">
    <label>
      @if ($errors->has('stitle'))
      <div class="error">{{ $errors->first('stitle') }}</div>
      @else
      Sub Title
      @endif
    </label>
    <input class="form-control" type="text"  name="stitle" value="{{ old('stitle') ?? $about->stitle }}" placeholder="Enter Sub Title Here...">
  </div>
  <div class="form-group col-lg-12 p-0">
    <label>
      @if ($errors->has('text'))
      <div class="error">{{ $errors->first('text') }}</div>
      @else
      About Us Details
      @endif
    </label>
    <textarea class="form-control" name="text" rows="5" placeholder="Enter About Us Details Here... ">{{ old('text') }}</textarea>
  </div>
  <div class="form-group col-lg-12 p-0">
    <label>
      @if ($errors->has('image'))
      <div class="error">{{ $errors->first('image') }}</div>
      @else
      About Us Image
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
  <button type="submit" class="btn btn-primary btn-block ">Save About Us</button>
</div>
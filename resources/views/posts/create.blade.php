@extends('layouts.app')

@section('content')
<div class="container">


<form action="/p" enctype="multipart/form-data" method="post">
  @csrf
     <div class="row">
         <div class="col-8 offser-2">
          <div class="title">Add New Post</div>
            <div class="form-group row">
              <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                  <input id="caption" 
                         type="text"
                         name="caption"
                         class="form-control{{ $errors->has('caption') ? 'is-invalid' :''}}"
                         caption="caption"
                         value="{{old('caption')}}"
                         autocomplete="caption" autofocus>

                                @if ($errors->has('caption'))
                                        <strong>{{ $errors->first('caption') }}</strong>
                                @endif

                </div>
              </div>
      

     </div>
    <div class="row">
      <label for="image" class="col-md-4 col-form-label">Post Image</label>
      <input type="file" class="form-control-file"  id="image" name="image"> 
          @if ($errors->has('image'))
                   <strong>{{ $errors->first('image') }}</strong>
          @endif

    </div>

    <div class="row pt-4">
      <button class="btn btn-primary">Add New Post</button>
    </div>

</form>
</div>

@endsection



@extends('admin.template.parent')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div id="successmessage"></div>
          <h6>Update Data Customer</h6>
        </div>
        <form action="/customer/{{$customer->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-body">
              <div class="form-group">
                  <label for="">Title</label>
                  <input  type="text" class=" form-control" id="edit_title" name="title" value="{{$customer->title}}">
                  @if($errors->has('title'))
                  <span class="help-block">{{ $errors->first('title') }}</span>
                  @endif  
              </div>
              <div class="form-group">
                  <label for="">Description</label>
                  <textarea  type="text" class=" form-control" id="edit_description" name="description">{{$customer->description}}</textarea>
                  @if($errors->has('description'))
                  <span class="help-block">{{ $errors->first('description') }}</span>
                  @endif 
                </div>
              <div class="form-group">
                <label for="">Image</label>
                <input  type="file" class=" form-control"  name="image" value="{{$customer->image}}">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit"  class="btn btn-warning ">Update Data</button>
            </div>
          </form>
      </div>
    </div>
  </div>
@endsection
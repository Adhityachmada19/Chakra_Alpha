@extends('admin.template.parent')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div id="successmessage"></div>
            <h6>Data Service</h6>

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
          @endif
          
          
          </div>
          <div class="col-11 text-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADDservicemodal">
             Add Data Service
            </button>
          </div>
        
          
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$service->title}}</td>
                    <td>{!!$service->description!!}</td>
                    <td><img src="{{asset('image/service/'.$service->image)}}" width="50px" height="50px" alt="image"></td>
                    <td>
                      <form action="/service/{{$service->id}}" method="POST" onsubmit="return confirm('Are you sure want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <a href="/service/{{$service->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Modal tambah data-->
        <div class="modal fade" id="ADDservicemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel">Add Data Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/service" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                  <div class="form-group " >
                      <label for="">Title</label>
                      <input  type="text" class=" form-control" id="title" name="title">
                      @if($errors->has('title'))
                      <span class="help-block">{{ $errors->first('title') }}</span>
                      @endif  
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea  type="text" class=" form-control ckeditor" id="edit_description" name="description"></textarea>
                    @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif 
                </div>
                  <div class="form-group">
                    <label for="">Image</label>
                    <input  type="file" class=" form-control" id="image" name="image">
                    @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                    @endif 
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary ">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    <!-- END Modal tambah data-->
     

@endsection

   

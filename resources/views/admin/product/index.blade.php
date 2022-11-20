@extends('admin.template.parent')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div id="successmessage"></div>
            <h6>Data Product</h6>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADDproductmodal">
             Add Data Product
            </button>
          </div>
        
          
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->title}}</td>
                    <td>{!!$product->description!!}</td>
                    <td><img src="{{asset('image/product/'.$product->image)}}" width="50px" height="50px" alt="image"></td>
                    <td>
                      <form action="/product/{{$product->id}}" method="POST" onsubmit="return confirm('Are you sure want to delete the data?')">
                        @csrf
                        @method('DELETE')
                        <a href="/product/{{$product->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
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
        <div class="modal fade" id="ADDproductmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <h5 class="modal-title" id="exampleModalLabel">Add Data Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/product" method="POST" enctype="multipart/form-data">
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
                      <textarea  type="text" class=" form-control ckeditor" id="description" name="description"></textarea>
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
     <!-- Modal edit data-->
     {{-- <div class="modal fade" id="EDITproductmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
        </div>
      </div>
    </div> --}}
<!-- END Modal tambah data-->

@endsection
{{-- @section('script')
    <script>
      $(document).ready(function () {
                $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        fetchproduct();
        function fetchproduct(){
          $.ajax({
            type: "GET",
            url: "/fetch-product",
            dataType: "json",
            success: function (response) {
              $('tbody').html("");
              $.each(response.data, function (key, item) { 
                $('tbody').append(
                            '<tr>\
                                    <td>'+item.title+'</td>\
                                    <td>'+item.description+'</td>\
                                    <td><img src="image/product/'+item.image+'" width="50px" height="50px" alt="image"></td>\
                                    <td><button type="button" value="'+item.id+'" class="btn btn-warning btn-sm" id="edit_product"><i class="fa fa-pen"></i></button>\
                                        <button type="button" value="'+item.id+'" class="btn btn-danger btn-sm" id="delete_product"><i class="fa fa-trash"></i></button>\
                                    </td>\
                                </tr>'
                        );
              });
            }
          });
        }
        $(document).on('submit','#add_product', function (e) {
          e.preventDefault();

          let formData =new FormData($('#add_product')[0]);
          $.ajax({
            type: "POST",
            url: "/product",
            data: formData,
            contentType: false,
            processData:false,
            success: function (response) {
              if(response.status==400){
                $('#error_list').html("");
                $('#error_list').removeClass('d-none');
                $.each(response.message, function (key, err_value) { 
                  $('#error_list').append('<li>'+err_value+'</li>');
                });
              }else{
               
                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: response.message,
                })
                $('#ADDproductmodal').modal('hide');
                $('#ADDproductmodal').find('input').val("");
                fetchproduct();
              }
            }
          });
        });
        $(document).on('click','#edit_product', function (e) {
        e.preventDefault();
        var product_id =$(this).val();
        $('#EDITproductmodal').modal('show');
        $.ajax({
          type: "GET",
          url: "/product/"+product_id,
          dataType: "json",
          success: function (response) {
            if(response.status==400){
              Swal.fire({
                  icon: 'error',
                  title: 'error',
                  text: response.message,
                })
                $('#EDITproductmodal').modal('hide');
            }
            else{
              $('#edit_title').val(response.data.title),
              $('#edit_description').val(response.data.description),
              $('#product_id').val(product_id);
      
            }
          }
        });
      });
      $(document).on('submit','#update_product', function (e) {
        e.preventDefault();
        var product_id= $('#product_id').val();
        var data={
                'title':$('#edit_title').val(),
                'description':$('#edit_description').val(),
                'image':$('#edit_image').val(), 
              }

        $.ajax({
          type: "POST",
          url: "/product/"+product_id,
          data: data,
          contentType:false,
          processData:false,
          success: function (response) {
            if(response.status==400){
              $('#update_error_list').html("");
                $('#update_error_list').removeClass('d-none');
                $.each(response.message, function (key, err_value) { 
                  $('#update_error_list').append('<li>'+err_value+'</li>');
                });
            }else if(response.status==401){
              Swal.fire({
                  icon: 'error',
                  title: 'error',
                  text: response.message,
                })
                $('#EDITproductmodal').modal('hide');
            }else if(response.status==200){
              Swal.fire({
                  icon: 'warning',
                  title: 'Success',
                  text: response.message,
                })
                $('#EDITproductmodal').modal('hide');
                $('#EDITproductmodal').find('input').val("");
                fetchproduct();
            }
          }
        });
      });
    });

      

    </script> --}}

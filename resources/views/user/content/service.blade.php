@extends('user.template.parent-detail')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title text-center text-primary text-uppercase mb-5">Detail product</h3>
            
        </div>
        
                <div class="">
                    <div class="text-center">
                      <br>
                        <img class="img-fluid" height="300px" width="300px" src="{{asset('image/service/'.$service->image)}}"  alt="{{$service->image}}">
                        
                        {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> --}}
                    </div>
                        <br>
                        <div class="text-center ">
                            <h1 class="mb-0">{{$service->title}}</h1>
                        </div>
                        <br>
                        <div class="">

                            <p class="mb-0 justify">{!!$service->description!!}</p>
                            <br>
                        </div>
                    
                </div>
    </div>
</div>
<div class="container-xxl  my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
    
</div>
@endsection
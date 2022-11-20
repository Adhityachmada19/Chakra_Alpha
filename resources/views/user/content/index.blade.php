@extends('user.template.parent')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                {{-- about us --}}
                <div class="text-center wow fadeInUp " data-wow-delay="0.1s"  id="about">
                    
                    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">PT CHAKRA ALPHA SEMESTA</span></h1>
                    <h6 class="section-title text-center text-primary text-uppercase">About Us</h6>
                </div>
                <p class="mb-4 text-left">
                    PT.CHAKRA ALPHA SEMESTA is a company engaged in the field of Fire Protection & General Contractor. 
                    PT.Chakra provides knowledge, consultation, design, supply, and installation, as one full system for clients.
                    <br><br>
                    PT. CHAKRA ALPHA SEMESTA is committed to be one of the best profesional Fire Protection Service companhy and General Contractor.
                    "Working with honest, intelligent, and profesional", Is the motto of our company. by promoting quality and service quality.
                    <br><br>
                    For us costomer satisfaction is primary. Give the best service company, and benefits for society, stake holders, employees, also give number one quality of work in all aspect.
                    <br>
                   
                </p>
                {{-- tentang kami  --}}
                <div class="text-center wow fadeInUp " data-wow-delay="0.1s"  id="about">
                    <h6 class="section-title text-center text-primary text-uppercase">Tentang Kami</h6>
                </div>
                <p>
                    PT.CHAKRA ALPHA SEMESTA adalah perusahaan yang bergerak di bidang Fire Protection & General Contractor.
                    PT.Chakra menyediakan pengetahuan, konsultasi, desain, suplai, dan instalasi, sebagai satu sistem lengkap untuk klien.
                    <br><br>
                    PT. CHAKRA ALPHA SEMESTA berkomitmen untuk menjadi salah satu perusahaan Jasa Proteksi Kebakaran dan Kontraktor Umum profesional terbaik.
                    "Bekerja dengan jujur, cerdas, dan profesional", Adalah motto perusahaan kami. dengan mengedepankan mutu dan kualitas pelayanan.
                    <br><br>
                    Bagi kami kepuasan pelanggan adalah yang utama. Memberikan pelayanan terbaik bagi perusahaan, dan manfaat bagi masyarakat, pemangku kepentingan, karyawan, serta memberikan kualitas kerja nomor satu di segala aspek.
                </p>
                {{-- bahasa inggris visi --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4"><span class="text-primary text-uppercase">Vision</span></h4>
                </div>
                <p class="mb-4">
                    To be one of the best profesional Fire Protection Service Company and General Constructor
                </p>
                {{-- Bahasa indonesia visi --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4"><span class="text-primary text-uppercase">Visi</span></h4>
                </div>
                <p class="mb-4">
                    Menjadi salah satu Perusahaan Jasa Proteksi Kebakaran dan Konstruksi Umum profesional terbaik
                </p>
                {{-- bahasa inggris misi --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4"><span class="text-primary text-uppercase">Mision</span></h4>
                </div>
                <p class="mb-4">
                    Give the best Service company and benefits for society, stake holders, employees, also give number one quality of work in all aspect
                </p>
                {{-- bahasa indonesia misi --}}
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4"><span class="text-primary text-uppercase">Misi</span></h4>
                </div>
                <p class="mb-4">
                    Memberikan pelayanan terbaik bagi perusahaan dan manfaat bagi masyarakat, pemangku kepentingan, karyawan, serta memberikan kualitas kerja nomor satu di segala aspek
                </p>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">{{$product_count}}</h2>
                                <p class="mb-0">Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">{{$service_count}}</h2>
                                <p class="mb-0">Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">{{$customer_count}}</h2>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('frontend/img/pemadam-1.png')}}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('frontend/img/fire-alarm.webp')}}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="{{asset('frontend/img/hydrant.jpg')}}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="{{asset('frontend/img/pemadam.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- product Start -->
<div class="container-xxl py-5" id="product">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title text-center text-primary text-uppercase mb-5">Our Products</h3>
            <h1 class="mb-5">Explore Our <span class="text-primary ">Products</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <center>
                        <img class="img-fluid" src="{{asset('image/product/'.$product->image)}}"  alt="{{$product->image}}">
                    </center>
                        {{-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small> --}}
                    </div>
        
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3 ">
                            <h5 class="mb-0 text-center">{{$product->title}}</h5>
                            
                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4 text-center" href="/detail-product/{{$product->id}}">View Detail</a>
                        </div>
                    </div>
                
                </div>
                
            </div>
            @endforeach
           
        </div>
    </div>
</div>

<!-- product End -->



<!-- Service Start -->
<div class="container-xxl py-5" id="service">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item rounded" href="/detail-service/{{$service->id}}">
                    <img class="img-fluid" src="{{asset('image/service/'.$service->image)}}"  alt="">
                    <hr>
                    <h5 class="mb-3">{{$service->title}}</h5>
                </a>
            </div>
            @endforeach
            
            
        </div>
    </div>
</div>
 <!-- Testimonial Start -->
 <div class="container-xxl  my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" id="customer">

    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="section-title text-center text-primary text-uppercase">Our Customer</h1>
        </div>
        <div class="owl-carousel testimonial-carousel py-5">
            @foreach ($customers as $customer)
          
           
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>{{$customer->description}}</p>
                <div class="d-flex align-items-center">

                    <img class="img-fluid flex-shrink-0 rounded" src="{{asset('image/customer/'.$customer->image)}}" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">{{$customer->title}}</h6>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Testimonial End -->
@endsection
@include('include.header');


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px;">
                <h1 class="display-6 mb-5">We Provide professional Insurance Services</h1>
            </div>
            <div class="row g-4 justify-content-center">

            @foreach ($services as $service )


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                            </div>
                            <h4 class="mb-0">{{ $service->name}}</h4>

                        </div>

                        <p class="mb-4">{{ $service->short_des}}</p>
                        <a class="btn btn-light px-3" href="">Read More</a>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Service End -->


    @include('include.footer')

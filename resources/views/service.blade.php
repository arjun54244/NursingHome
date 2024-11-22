@extends('layouts.main')

@section('title')
Services
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Services</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">services</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Services Start -->
<div class="page-services">
    <div class="container">
        <div class="row">
        @if (isset($servicesDec))
    @foreach ($servicesDec as $service)
        <div class="col-lg-3 col-md-6">
            <!-- Service Item Start -->
            <div class="service-item wow fadeInUp">
                <!-- Icon Box Start -->
                <div class="icon-box">
                    <img src="{{ asset('storage/' . $service->icon) }}" alt="">
                </div>
                <!-- Icon Box End -->

                <!-- Service Body Start -->
                <div class="service-body">
                    <h3>{{$service->title}}</h3>
                    <p>{{substr($service->short_description, 0, 100)}}...</p>
                </div>
                <!-- Service Body End -->

                <!-- Service Footer Start -->
                <div class="service-footer">
                    <a href="{{route('service-single', $service->slug)}}" class="service-btn">
                        <img src="{{ asset('images/arrow-white.svg')}}" alt="">
                    </a>
                </div>
                <!-- Service Footer End -->
            </div>
            <!-- Service Item End -->
        </div>
    @endforeach
@else
    @foreach ($services as $service)
        <div class="col-lg-3 col-md-6">
            <!-- Service Item Start -->
            <div class="service-item wow fadeInUp">
                <!-- Icon Box Start -->
                <div class="icon-box">
                    <img src="{{ asset('storage/' . $service->icon) }}" alt="">
                </div>
                <!-- Icon Box End -->

                <!-- Service Body Start -->
                <div class="service-body">
                    <h3>{{$service->title}}</h3>
                    <p>{{substr($service->short_description, 0, 100)}}...</p>
                </div>
                <!-- Service Body End -->

                <!-- Service Footer Start -->
                <div class="service-footer">
                    <a href="{{route('service-single', $service->slug)}}" class="service-btn">
                        <img src="{{ asset('images/arrow-white.svg')}}" alt="">
                    </a>
                </div>
                <!-- Service Footer End -->
            </div>
            <!-- Service Item End -->
        </div>
    @endforeach
@endif

        </div>

        <!-- Cta Infobar Section Start -->
        <div class="cta-infobar wow fadeInUp" data-wow-delay="0.5s">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Cta Content Start -->
                    <div class="cta-info-content">
                        <div class="icon-box">
                            <img src="images/icon-cta.svg" alt="">
                        </div>

                        <div class="cta-content">
                            <h3>ready to start your journey to recovery?</h3>
                            <p>Contact us today to schedule your initial consultation and take the first step towards a pain-free life.</p>
                        </div>
                    </div>
                    <!-- Cta Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Cta Appointment Button Start -->
                    <div class="cta-appointment-btn">
                        <a href="#" class="btn-default">book appointment</a>
                    </div>
                    <!-- Cta Appointment Button End -->
                </div>
            </div>
        </div>
        <!-- Cta Infobar Section End -->
    </div>
</div>
<!-- Page Services End -->
@endsection
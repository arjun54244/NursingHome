@extends('layouts.main')
@section('title')
{{$blog->title}}
@endsection
@section('content')


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">10 essential benefits of regular physiotherapy</h1>
                    <div class="post-single-meta wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><i class="fa-regular fa-user"></i>Singh Nursing Home</li>
                            <li class="breadcrumb-item"><i class="fa-regular fa-clock"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y') }}</li>
                        </ol>
                    </div>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Service Single Start -->
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Service Single Content Start -->
                <div class="service-single-content">
                    <!-- Service Featured Image Start -->
                    <div class="service-featured-img">
                        <figure class="reveal image-anime">
                            <img src="{{asset('storage/'.$blog->image)}}" alt="{{asset('images/post-1.jpg')}}">
                        </figure>
                    </div>
                    <!-- Service Featured Image End -->

                    <!-- Service Entry Content Start -->
                    <div class="service-entry">
                        <h3 class="wow fadeInUp">{{$blog->title}}</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">{!!$blog->description!!} </p>

                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <!-- fetch tags array data  -->
                            @foreach($blog->tags as $tag)
                            <li>{{$tag}}</li>
                            @endforeach
                        </ul>

                        <!-- Service Entry Image Start -->
                        <div class="service-entry-image">
                            <div class="row">
                                @foreach($blogs->take(2) as $blog)
                                <div class="col-md-6 col-12">
                                    <!-- Service Entry Image Start -->
                                    <a href="">
                                        <div class="service-entry-img-1">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{$blog->title}}">
                                            </figure>
                                        </div>
                                    </a>
                                    <!-- Service Entry Image End -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>
                    <!-- Service Entry Content End -->
                </div>
                <!-- Service Single Content End -->
            </div>
            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                <div class="service-sidebar">
                    <!-- Service Categories List Start -->
                    <div class="service-catagery-list wow fadeInUp">
                        <h3>our Blogs</h3>
                        <ul>
                            @foreach($blogs->take(10) as $blog)
                                <li><a href="{{route('blog-single', $blog->slug)}}">{{$blog->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Service Categories List End -->

                    <!-- Opening Hour Section Start -->
                    <div class="opening-hour-section wow fadeInUp" data-wow-delay="0.25s">
                        <h3>opening hours</h3>
                        <ul>
                            <li>mon to fri : 10:00 to 6:00</li>
                            <li>sat : 10:00AM To 3:00PM</li>
                            <li>sun : closed</li>
                        </ul>
                    </div>
                    <!-- Opening Hour Section End -->

                    <!-- Sidebar Cta Box Start -->
                    <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Cta Content Start -->
                        <div class="icon-box">
                            <img src="images/icon-cta.svg" alt="">
                        </div>

                        <div class="cta-content">
                            <h3>Ready to Start Your Journey to Recovery?</h3>
                            <p>Contact us today to schedule your initial consultation and take the first step towards a pain-free life.</p>
                        </div>
                        <!-- Cta Content End -->

                        <!-- Cta Appointment Button Start -->
                        <div class="cta-appointment-btn">
                            <a href="{{route('contact')}}" class="btn-default">book appointment</a>
                        </div>
                        <!-- Cta Appointment Button End -->
                    </div>
                    <!-- Sidebar Cta Box End -->
                </div>
                <!-- Service Sidebar End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Service Single End -->


@endsection
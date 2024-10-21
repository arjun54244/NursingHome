@extends('layouts.main')

@section('title')
Teams
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our Therapists</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our therapists</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Team Start -->
<div class="page-team">
    <div class="container">
        <div class="row">
            @foreach ($doctors->where('status','=',1) as $doctor)
            <div class="col-lg-3 col-md-6">
                <!-- Team Member Item Start -->
                <a href="{{route('doctor.details',$doctor->slug)}}">
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="storage/{{$doctor->image}}" alt="">
                            </figure>

                            <!-- Team Social Icon Start -->
                            <!-- <div class="team-social-icon">
                            <ul>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div> -->
                            <!-- Team Social Icon End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>{{$doctor->name}}</h3>
                            <p class="text-dark">{{$doctor->position}}</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                </a>
                <!-- Team Member Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Page Team End -->

@endsection
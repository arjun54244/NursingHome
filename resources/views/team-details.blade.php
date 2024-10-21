@extends('layouts.main')

@section('title')
doctore
@endsection

@section('content')

    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">{{$doctor->name}}</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                                <li class="breadcrumb-item"><a href="index-2.html">our therapists</a></li>
								<li class="breadcrumb-item active" aria-current="page">dr. emily brown</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Team Details Section Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row no-gutters">
				<div class="col-lg-5">
                    <!-- team member image start -->
                    <div class="team-member-image">
                        <figure class="image-anime">
                            <img src="{{asset('storage/'.$doctor->image)}}" alt="{{$doctor->image}}">
                            </figure>
                    </div>
                    <!-- team member image end -->
                </div>
                <div class="col-lg-7">
                    <!-- team member details start -->
                    <div class="team-member-details">
                        <div class="member-detail-header">
                            <h2 class="text-anime-style-2">{{$doctor->name}}</h2>
                            <p class="wow fadeInUp">{{$doctor->position}}</p>
                        </div>
                        <div class="member-detail-content">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{$doctor->description}}</p>                            
                        </div>

                        <div class="member-detail-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li><span>Position</span>{{$doctor->position}}</li>
                                <li><span>Experience</span>{{$doctor->experience}}</li>
                            </ul>
                        </div>

                        <!-- <div class="member-social-list">
                            <ul class="wow fadeInUp" data-wow-delay="0.75s">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>									
                            </ul>
                        </div> -->
                    </div>
                    <!-- team member details end -->
                </div>                
            </div>
        </div>
    </div>
    <!--Team Details Section End -->

  @endsection
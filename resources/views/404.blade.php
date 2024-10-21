@extends('layouts.main')

@section('title')
    404 
@endsection

@section('content')
	<!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Page Not Found</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">404 error</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

     <!-- error section start -->
     <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                    <img src="images/404-error-img.png" alt="">
                </div>
                <div class="error-page-content">
                    <div class="error-page-content-heading">
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Oops!</span> Page Not Found</h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">The page you are looking for does not exist</p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.75s" href="{{route('home')}}">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- error section end -->

   @endsection
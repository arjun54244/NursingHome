@extends('layouts.main') 


@section('title')
About
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">About Us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Us Start -->
<div class="about-us page-about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image Start -->
                <div class="about-us-image">
                    <div class="about-img">
                        <figure class="reveal image-anime">
                            <img src="images/home/1.png" alt="">
                        </figure>

                        <!-- Company Experience Box Start -->
                        <div class="company-experience">
                            <div class="icon-box">
                                <img src="images/icon-experience.svg" alt="">
                            </div>
                            <div class="company-experience-content">
                                <h3><span class="counter">36</span>+</h3>
                                <p>years of experience</p>
                            </div>
                        </div>
                        <!-- Company Experience Box End -->
                    </div>
                </div>
                <!-- About Image End -->
            </div>
            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For<span>Nursing Care</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            At Singh Nursing Home, we offer a range of healthcare services designed to meet the needs of every patient, from preventive care to treatment and recovery. Our dedicated team of doctors, nurses, and support staff work round the clock to ensure that you receive the best possible care with a personal touch.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body">
                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-1.svg" alt="Nutrition Strategies Icon">
                            </div>
                            <div class="about-list-content">
                                <h3>Nutrition Strategies</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-2.svg" alt="Be Proactive Icon">
                            </div>
                            <div class="about-list-content">
                                <h3>Be Proactive</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-3.svg" alt="Workout Routines Icon">
                            </div>
                            <div class="about-list-content">
                                <h3>Workout Routines</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-4.svg" alt="Support & Motivation Icon">
                            </div>
                            <div class="about-list-content">
                                <h3>Support & Motivation</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    <div class="about-us-footer">
                        <!-- Doctor Info Start -->
                        <!-- <div class="doctor-info wow fadeInUp" data-wow-delay="1s"> -->
                        <!-- <div class="doctor-info-item">
                                <div class="image-box">
                                    <figure class="image-anime">
                                        <img src="images/about-doctor-img.jpg" alt="Dr. Jamie Smith">
                                    </figure>
                                </div>
                                <div class="doctor-info-content">
                                    <h3>Dr. Jamie Smith</h3>
                                    <p>Physiotherapist</p>
                                </div>
                            </div> -->
                        <!-- </div> -->
                        <!-- Doctor Info End -->

                        <!-- Appointment Button Start -->
                        <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="#" class="btn-default">Make an Appointment</a>
                        </div>
                        <!-- Appointment Button End -->
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About Us Content End -->
            </div>

        </div>
    </div>
</div>
<!--  About Us End -->

<!-- Company Counter Start -->
<div class="company-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Company Counter Item Start -->
                <div class="company-counter-item">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-counter-1.svg" alt="Skilled Therapists Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Company Counter Content Start -->
                    <div class="company-counter-content">
                        <h3><span class="counter">10</span>+</h3>
                        <p>Skilled Doctors</p>
                    </div>
                    <!-- Company Counter Content End -->
                </div>
                <!-- Company Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Company Counter Item Start -->
                <div class="company-counter-item">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-counter-2.svg" alt="Success Rate Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Company Counter Content Start -->
                    <div class="company-counter-content">
                        <h3><span class="counter">98</span>%</h3>
                        <p>Success Rate</p>
                    </div>
                    <!-- Company Counter Content End -->
                </div>
                <!-- Company Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Company Counter Item Start -->
                <div class="company-counter-item">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-counter-3.svg" alt="Patients Treated Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Company Counter Content Start -->
                    <div class="company-counter-content">
                        <h3><span class="counter">70</span>k+</h3>
                        <p>Patients Treated</p>
                    </div>
                    <!-- Company Counter Content End -->
                </div>
                <!-- Company Counter Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Company Counter Item Start -->
                <div class="company-counter-item">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-counter-4.svg" alt="Experienced Therapists Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Company Counter Content Start -->
                    <div class="company-counter-content">
                        <h3><span class="counter">78</span>+</h3>
                        <p>Experienced Therapists</p>
                    </div>
                    <!-- Company Counter Content End -->
                </div>
                <!-- Company Counter Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Company Counter End -->


<!-- Mission Vision Start -->
<div class="mission-vision">
    <div class="container">
        <div class="row section-row">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">Vision to Victory</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque"><span>We're a Recognized</span> & Quality Leader</h2>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Mva Item Start -->
                <div class="our-mva-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-our-mission.svg" alt="Mission Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Mva Content Start -->
                    <div class="mva-item-content">
                        <h3>Our Mission</h3>
                        <p>At Singh Nursing Home, our mission is to provide compassionate and comprehensive care to patients dealing with injuries and acute pain. We prioritize patient comfort and recovery through our dedicated emergency physiotherapy services, ensuring support and expertise when it matters most.</p>
                    </div>
                    <!-- Mva Content End -->
                </div>
                <!-- Mva Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Mva Item Start -->
                <div class="our-mva-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-our-vision.svg" alt="Vision Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Mva Content Start -->
                    <div class="mva-item-content">
                        <h3>Our Vision</h3>
                        <p>Our vision is to be the leading healthcare provider known for exceptional patient care, innovative treatment methods, and a holistic approach to rehabilitation. We strive to empower our patients on their journey to recovery and overall well-being.</p>
                    </div>
                    <!-- Mva Content End -->
                </div>
                <!-- Mva Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Mva Item Start -->
                <div class="our-mva-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-our-approch.svg" alt="Approach Icon">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Mva Content Start -->
                    <div class="mva-item-content">
                        <h3>Our Approach</h3>
                        <p>Our approach combines advanced medical technology with compassionate care. We tailor our treatment plans to meet individual patient needs, focusing on a collaborative recovery process involving healthcare professionals and support from loved ones.</p>
                    </div>
                    <!-- Mva Content End -->
                </div>
                <!-- Mva Item End -->
            </div>
        </div>

        <!-- Call To Action Start -->
        <div class="cta-infobar wow fadeInUp" data-wow-delay="0.75s">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Cta Content Start -->
                    <div class="cta-info-content">
                        <div class="icon-box">
                            <img src="images/icon-cta.svg" alt="CTA Icon">
                        </div>

                        <div class="cta-content">
                            <h3>Ready to Start Your Journey to Recovery?</h3>
                            <p>Contact us today to schedule your initial consultation and take the first step towards a pain-free life.</p>
                        </div>
                    </div>
                    <!-- Cta Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Cta Appointment Button Start -->
                    <div class="cta-appointment-btn">
                        <a href="{{route('contact')}}" class="btn-default">Book Appointment</a>
                    </div>
                    <!-- Cta Appointment Button End -->
                </div>
            </div>
        </div>
        <!-- Call To Action End -->
    </div>
</div>
<!-- Mission Vision End -->


<!-- Quality Treatment Section Start -->
<div class="quality-treatment">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Video Treatment Video Start -->
                <div class="quality-treatment-video" data-cursor-text="Play">
                    <!-- Video Image Start -->
                    <div class="video-image">
                        <!-- <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"> -->
                        <figure class="image-anime">
                            <img src="images/home/Shree Nursing Home Contact us Images.png" alt="">
                        </figure>
                        <!-- </a> -->
                    </div>
                    <!-- Video Image End -->

                    <!-- Video Play Button Start -->
                    <!-- <div class="video-play-button">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div> -->
                    <!-- Video Play Button End -->
                </div>
                <!-- Video Treatment Video End -->
            </div>

            <div class="col-lg-6">
                <!-- Quality Treatment Content Start -->
                <div class="quality-treatment-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Your Wellness our misson</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>We Are Committed</span> to Quality Care</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At Singh Nursing Home, we understand that pain and injuries can arise at any moment. Our emergency physiotherapy services are designed to provide swift and effective treatment, helping you manage discomfort and promoting a quick recovery.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Quality Treatment Body Start -->
                    <div class="quality-treatment-body wow fadeInUp" data-wow-delay="0.5s">
                        <ul>
                            <li>Skilled physiotherapists dedicated to your healing journey.</li>
                            <li>Rapid response to injuries to minimize recovery time.</li>
                            <li>Tailored treatment plans focused on your individual needs.</li>
                            <li>Comprehensive rehabilitation services for holistic recovery.</li>
                        </ul>
                    </div>
                    <!-- Quality Treatment Body End -->
                </div>
                <!-- Quality Treatment Content End -->
            </div>

        </div>
    </div>
</div>
<!-- Quality Treatment Section End -->

<!-- Therapy Process Start -->
<div class="therapy-process">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Therapy Process</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Understanding</span> the Therapy Process</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Therapy Process Item Start -->
                <div class="therapy-process-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <figure class="image-anime">
                            <img src="images/therapy-process-1.jpg" alt="Get Paired with a Therapist">
                        </figure>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Therapy Process Content Start -->
                    <div class="therapy-process-content">
                        <h3>Get Paired with a Therapist</h3>
                        <p>We ensure you are matched with a qualified therapist who understands your specific needs and concerns.</p>
                    </div>
                    <!-- Therapy Process Content End -->
                </div>
                <!-- Therapy Process Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Therapy Process Item Start -->
                <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <figure class="image-anime">
                            <img src="images/therapy-process-2.jpg" alt="Choose Your Preferred Way to Receive Care">
                        </figure>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Therapy Process Content Start -->
                    <div class="therapy-process-content">
                        <h3>Choose Your Preferred Way to Receive Care</h3>
                        <p>We offer various options for receiving treatment, including in-person and telehealth sessions, ensuring convenience and comfort.</p>
                    </div>
                    <!-- Therapy Process Content End -->
                </div>
                <!-- Therapy Process Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Therapy Process Item Start -->
                <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <figure class="image-anime">
                            <img src="images/therapy-process-3.jpg" alt="We Help You Get Better, Faster!">
                        </figure>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Therapy Process Content Start -->
                    <div class="therapy-process-content">
                        <h3>We Help You Get Better, Faster!</h3>
                        <p>Our focused therapy sessions are designed to speed up your recovery process and improve your quality of life.</p>
                    </div>
                    <!-- Therapy Process Content End -->
                </div>
                <!-- Therapy Process Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Therapy Process Item Start -->
                <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <figure class="image-anime">
                            <img src="images/therapy-process-4.jpg" alt="What Psychotherapy Can Help With">
                        </figure>
                    </div>
                    <!-- Icon Box End -->

                    <!-- Therapy Process Content Start -->
                    <div class="therapy-process-content">
                        <h3>What Psychotherapy Can Help With</h3>
                        <p>Our psychotherapy services can assist with various mental health challenges, providing the support you need to overcome them.</p>
                    </div>
                    <!-- Therapy Process Content End -->
                </div>
                <!-- Therapy Process Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Therapy Process End -->


<!-- Client Testimonial Start -->
<div class="our-testimonial parallaxie">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Google Review</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> Our Patient Say</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            @php
                            $testimonial = App\Models\Testimonial::all()->where('status','=',1);
                            @endphp
                            @foreach ($testimonial as $testi)
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>{{$testi->description}}</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="storage/{{$testi->image}}" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h3>{{$testi->name}}</h3>
                                            <p>{{$testi->position}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Client Testimonial End -->

<!-- Our Team Start -->
<div class="our-team">
    <div class="container">
        <div class="row align-items-center section-row">
            <div class="col-lg-9">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">theraphist team</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Dedicated</span> & Experienced Therapist Team</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-3">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="{{route('doctores')}}" class="btn-default">view all team</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            @php
            $doctors = App\Models\Team::all();
            @endphp
            @foreach ($doctors->take(4) as $doctor)
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
<!-- Our Team End -->

@endsection
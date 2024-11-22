@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')
<!-- Hero Section Start -->
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Expert</span>Caring <br> Beyond Treatment</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Welcome to Singh Nursing Home, your trusted healthcare partner in Vivek Vihar, Delhi. We are committed to providing compassionate and quality medical care to our patients. Our goal is to create a safe, caring environment where everyone feels comfortable and supported throughout their healthcare journey.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Content Body Start -->
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{route('service')}}" class="btn-default">Explore Our Services</a>
                        <a href="{{route('contact')}}" class="btn-default btn-highlighted">Book an Appointment</a>
                    </div>
                    <!-- Hero Content Body End -->

                    <!-- Hero Content Footer Start -->
                    <div class="hero-content-footer">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-auto">
                                <!-- Hero Counter Box Start-->
                                <div class="hero-counter-box">
                                    <h3><span class="counter">24</span>/7</h3>
                                    <p>Emergency Care</p>
                                </div>
                                <!-- Hero Counter Box End-->
                            </div>

                            <div class="col-lg-4 col-md-4 col-auto">
                                <!-- Hero Counter Box Start-->
                                <div class="hero-counter-box">
                                    <h3><span class="counter">50</span>+</h3>
                                    <p>Years of Experience</p>
                                </div>
                                <!-- Hero Counter Box End-->
                            </div>

                            <div class="col-lg-4 col-md-4 col-auto">
                                <!-- Hero Counter Box Start-->
                                <div class="hero-counter-box">
                                    <h3><span class="counter">1</span>L+</h3>
                                    <p>Happy Patients</p>
                                </div>
                                <!-- Hero Counter Box End-->
                            </div>
                        </div>
                    </div>
                    <!-- Hero Content Footer End -->
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Hero Image Start -->
                <div class="hero-image">
                    <!-- Hero Img Start -->
                    <div class="hero-img">
                        <figure>
                            <img src="images/hospital.jpeg" alt="">
                        </figure>
                    </div>
                    <!-- Hero Img End -->

                    <!-- Hero Image Tag Start -->
                    <!-- <div class="export-doctor-box">
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="images/export-doctor-img.jpg" alt="">
                            </figure>
                        </div>
                        <div class="export-doctor-content">
                            <h3>dr. jamie smith</h3>
                            <p>physiotherapy</p>
                        </div>
                    </div> -->
                    <!-- Hero Image Tag End -->
                </div>
                <!-- Hero Image End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- Home Contact Us Start -->
<div class="home-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Contact Item Start -->
                <div class="home-contact-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-home-contact-us-1.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Home Contact Content Start -->
                    <div class="home-contact-content">
                        <h3>Specialist O.P.D.</h3>
                        <p>Our dedicated team of specialists provides comprehensive outpatient services.</p>
                    </div>
                    <!-- Home Contact Content End -->
                </div>
                <!-- Contact Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Contact Item Start -->
                <div class="home-contact-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-home-contact-us-2.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Home Contact Content Start -->
                    <div class="home-contact-content">
                        <h3>24/7 Emergency Services</h3>
                        <p>We provide round-the-clock emergency services to ensure immediate care when needed.</p>
                    </div>
                    <!-- Home Contact Content End -->
                </div>
                <!-- Contact Item End -->
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Contact Item Start -->
                <div class="home-contact-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-home-contact-us-3.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Home Contact Content Start -->
                    <div class="home-contact-content">
                        <h3>free Tele consultant</h3>
                        <p>Our mission is to enhance the quality of life of our patients</p>
                    </div>
                    <!-- Home Contact Content End -->
                </div>
                <!-- Contact Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Home Contact Us End -->

<!-- About Us Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image Start -->
                <div class="about-us-image">
                    <div class="about-img">
                        <figure class="reveal image-anime">
                            <img src="images/home/about.jpeg" alt="">
                        </figure>

                        <!-- Company Experience Box Start -->
                        <div class="company-experience">
                            <div class="icon-box">
                                <img src="images/icon-experience.svg" alt="">
                            </div>
                            <div class="company-experience-content">
                                <h3><span class="counter">50</span>+</h3>
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For <span>Affordable Healthcare</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At Singh Nursing Home, we offer a range of healthcare services designed to meet the needs of every patient, from preventive care to treatment and recovery. Our dedicated team of doctors, nurses, and support staff work round the clock to ensure that you receive the best possible care with a personal touch.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Body Start -->
                    <div class="about-us-body">
                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-1.svg" alt="">
                            </div>
                            <div class="about-list-content">
                                <h3>Comprehensive Care</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-2.svg" alt="">
                            </div>
                            <div class="about-list-content">
                                <h3>Family Welfare Services</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-3.svg" alt="">
                            </div>
                            <div class="about-list-content">
                                <h3>Emergency Services</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->

                        <!-- About List Item Start -->
                        <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="images/icon-about-us-4.svg" alt="">
                            </div>
                            <div class="about-list-content">
                                <h3>Support & Compassion</h3>
                            </div>
                        </div>
                        <!-- About List Item End -->
                    </div>
                    <!-- About Us Body End -->

                    <!-- About Us Footer Start -->
                    <div class="about-us-footer">
                        <!-- Doctor Info Start -->
                        <!--<div class="doctor-info wow fadeInUp" data-wow-delay="1s">-->
                            <!--<div class="doctor-info-item">-->
                            <!--    <div class="image-box">-->
                            <!--        <figure class="image-anime">-->
                            <!--            <img src="images/about-doctor-img.jpg" alt="">-->
                            <!--        </figure>-->
                            <!--    </div>-->
                            <!--    <div class="doctor-info-content">-->
                            <!--        <h3>Our Medical Team</h3>-->
                            <!--        <p>Dedicated professionals committed to your care.</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!-- Doctor Info End -->

                        <!-- Appointment Button Start -->
                        <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                            <a href="{{route('contact')}}" class="btn-default">Make an Appointment</a>
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

<!-- Our Service Start -->
<div class="our-service">
    <div class="container">
        <div class="row align-items-center section-row">
            <div class="col-lg-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Departments</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>We Provide</span> The Best Treatments</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="{{route('service')}}" class="btn-default">view all services</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>
        
        <div class="row">
        @php
         $allowedDepartments = [
             'GeneralSurgery',
             'GynecologyAndObstetrics',
             'InternalMedicine',
             'PediatricChildSpecialist',
             'Anaesthesiology',
             'LaserLaprascopicSurgeon',
             'Endocrinologist',
             'Ultrasound',
             'PathologyAndLab'
         ];
         $services = App\Models\Service::where('status', 1)
        ->whereIn('department', $allowedDepartments)
        ->take(6)
        ->get();
            @endphp
            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="storage/service/01JAQ3BA3C8CRQHPJCE96CPH92.png" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <h3>gynaecology and obstetrics</h3>
                        <p>{{substr('At Singh Nursing Home, we specialize in both gynecology and obstetrics, offering comprehensive care for women throughout every stage of life. Our gynecology services include routine screenings, treatment for menstrual disorders, fertility management, menopause support, and the diagnosis and management of reproductive health conditions such as fibroids, endometriosis', 0,100)}}...</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <!-- if department is Gynae  -->
                         <a href="{{ route('ServiceDep', 'Gynae') }}" class="service-btn"><img src="images/arrow-white.svg" alt="">
                         </a>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>
            @foreach ($services->filter(fn($service) => in_array($service->department ,$allowedDepartments))  as $service)
            <div class="col-lg-3 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="storage/{{$service->icon}}" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <h3>{{ $service->title}}</h3>
                        <p>{{substr($service->short_description, 0,100)}}...</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-footer">
                        <!-- if department is Gynae  -->
                        <a href="{{route('service-single', $service->slug)}}" class="service-btn"><img src="images/arrow-white.svg" alt="">
                        </a>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>
            @endforeach


            <div class="col-lg-6">
                <!-- Service Item Start -->
                <div class="service-item service-cta-item wow fadeInUp" data-wow-delay="1.2s">
                    <!-- Icon Box Start -->
                    <div class="icon-box">
                        <img src="images/icon-cta.svg" alt="">
                    </div>
                    <!-- Icon Box End -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <h3>Ready to Start Your Journey to Recovery?</h3>
                        <p>At Singh Nursing Home, your recovery is our priority. With compassionate care, advanced facilities, and expert professionals, we ensure a seamless healing journey tailored to your needs. Begin your path to wellness today!</p>
                    </div>
                    <!-- Service Body End -->

                    <!-- Service Footer Start -->
                    <div class="service-cta-btn">
                        <a href="{{route('contact')}}" class="btn-default">Book Appointment</a>
                    </div>
                    <!-- Service Footer End -->
                </div>
                <!-- Service Item End -->
            </div>

        </div>
    </div>
</div>
<!-- Our Service End -->

<!-- Solution Your Plan Start -->
<div class="solution-your-plan">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Solution Plan Image Start -->
                <div class="solution-plan-image">
                    <div class="solution-plan-img-1">
                        <figure class="image-anime reveal">
                            <img src="images/home/nisha.png" alt="">
                        </figure>
                    </div>

                    <div class="solution-plan-img-2">
                        <figure class="image-anime reveal">
                            <img src="images/home/shyam.png" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Solution Plan Image End -->
            </div>
            <div class="col-lg-6">
                <!-- Solution Plan Content Start -->
                <div class="solution-plan-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Better Health</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your Health Matters</span> Quality Care Tailored to You</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We believe that every patient is unique, and we take the time to understand individual needs and concerns. Your health is our priority, and we strive to make your experience with us as smooth and stress-free as possible.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Solution Plan Body Start -->
                    <div class="solution-plan-body wow fadeInUp" data-wow-delay="0.5s">
                        <ul>
                            <li>We understand that injuries can happen unexpectedly.</li>
                            <li>Our emergency services are ready to assist you.</li>
                            <li>Your recovery is our top priority.</li>
                        </ul>
                    </div>
                    <!-- Solution Plan Body End -->

                    <!-- Solution Plan Counter Start -->
                    <div class="solution-plan-counter">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <!-- Solution Counter Item Start -->
                                <div class="solution-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-solution-counter-1.svg" alt="">
                                    </div>

                                    <div class="solution-counter-content">
                                        <h3><span class="counter">10</span>+</h3>
                                        <p>Skilled Doctors</p>
                                    </div>
                                </div>
                                <!-- Solution Counter Item End -->
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <!-- Solution Counter Item Start -->
                                <div class="solution-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-solution-counter-2.svg" alt="">
                                    </div>

                                    <div class="solution-counter-content">
                                        <h3><span class="counter">98</span>%</h3>
                                        <p>Success Rate</p>
                                    </div>
                                </div>
                                <!-- Solution Counter Item End -->
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <!-- Solution Counter Item Start -->
                                <div class="solution-counter-item">
                                    <div class="icon-box">
                                        <img src="images/icon-solution-counter-3.svg" alt="">
                                    </div>

                                    <div class="solution-counter-content">
                                        <h3><span class="counter">1</span>L+</h3>
                                        <p>Patients Treated</p>
                                    </div>
                                </div>
                                <!-- Solution Counter Item End -->
                            </div>
                        </div>
                    </div>
                    <!-- Solution Plan Counter End -->
                </div>
            </div>
            <!-- Solution Plan Content End -->
        </div>
    </div>
</div>
<!-- Solution Your Plan End -->

<!-- Why Choose Us Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row section-row">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3 class="wow fadeInUp">Why Choose Us</h3>
                <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your Health is  </span> <br> In Good Hands</h2>
            </div>
            <!-- Section Title End -->
        </div>

        <!-- Why Choose Us Box Start -->
        <div class="why-choose-us-box">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-1">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-1.svg" alt="Experienced Team">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Experienced Team</h3>
                                <p>Our skilled professionals are here to provide comprehensive care for your recovery journey.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-2.svg" alt="Patient-Centered Approach">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Patient-Centered Approach</h3>
                                <p>Your well-being is our priority. We tailor our treatments to meet your unique needs.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-3.svg" alt="Expertise and Experience">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Expertise and Experience</h3>
                                <p>With years of experience, our team excels in providing effective treatment strategies.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box End -->
                </div>

                <div class="col-lg-6">
                    <!-- Why Choose Box Start -->
                    <div class="why-choose-box-2">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-4.svg" alt="Advanced Technology">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Advanced Technology</h3>
                                <p>We utilize the latest technology to enhance your treatment and recovery process.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-5.svg" alt="Convenient and Accessible">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Convenient and Accessible</h3>
                                <p>Our facilities are designed for easy access to ensure you receive care when you need it.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <img src="images/icon-why-us-6.svg" alt="Community Involvement">
                            </div>
                            <!-- Icon Box End -->

                            <!-- Why Choose Content Start -->
                            <div class="why-choose-content">
                                <h3>Community Involvement</h3>
                                <p>We are committed to giving back, engaging with our community through various initiatives.</p>
                            </div>
                            <!-- Why Choose Content End -->
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <img src="images/why-us-img2.png" alt="Why Choose Us">
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
        <!-- Why Choose Us Box End -->
    </div>
</div>
<!-- Why Choose Us End -->

<!-- Our Team Start -->
<div class="our-team">
    <div class="container">
        <div class="row align-items-center section-row">
            <div class="col-lg-9">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Doctors</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Dedicated</span> & Experienced Doctors</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-3">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="{{route('doctores')}}" class="btn-default">view all Doctors</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            @php
            $doctors = App\Models\Team::whereIn('id', [4, 8, 2, 1])
            ->orderByRaw("FIELD(id, 4, 8, 2, 1)")->get()->take(4);
            @endphp
            @foreach ($doctors as $doctor)
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

<!-- Our Blog Section End -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-9">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">news & blog</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our Latest</span> Blogs And Updates</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-3">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="{{route('blogs')}}" class="btn-default">view all blog</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            @php
            $blogs = App\Models\Blog::where('status', 1)->latest()->get();
            @endphp
            @foreach ($blogs->take(3) as $blog)
            <div class="col-lg-4 col-md-6">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image" data-cursor-text="View">
                        <figure>
                            <a href="{{ route('blog-single', $blog->slug) }}" class="image-anime">
                                <img src="storage/{{$blog->image}}" alt="">
                            </a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- post Item Content Start -->
                    <div class="post-item-content">
                        <!-- post Item Body Start -->
                        <div class="post-item-body">
                            <h2><a href="{{ route('blog-single', $blog->slug) }}">{{$blog->title}}</a></h2>
                        </div>
                        <!-- Post Item Body End-->

                        <!-- Post Item Footer Start-->
                        <div class="post-item-footer">
                            <a href="{{ route('blog-single', $blog->slug) }}" class="readmore-btn">read more</a>
                        </div>
                        <!-- Post Item Footer End-->
                    </div>
                    <!-- post Item Content End -->
                </div>
                <!-- Blog Item End -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Our Blog End -->

@endsection
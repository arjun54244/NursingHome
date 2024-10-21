<!-- Our Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Emergency No. : (+91) 789 3456 012</span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">For any additional inquiries : <a href="mailto:info@singhnursinghome.com">info@singhnursinghome.com</a></span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Book Appointment: (+91) 879 526 789</span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Opening Hours: Mon to Fri: 9:00 AM to 8:00 PM, Sat: 9:00 AM to 8:00 PM, Sun: 9:00 AM to 2:00 PM</span>
        </div>

        <div class="scrolling-content">
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Emergency No. : (+91) 789 3456 012</span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">For any additional inquiries : <a href="mailto:info@singhnursinghome.com">info@singhnursinghome.com</a></span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Book Appointment: (+91) 879 526 789</span>
            <span><img src="{{asset('images/icon-sparkles.svg')}}" alt="">Opening Hours: Mon to Fri: 9:00 AM to 8:00 PM, Sat: 9:00 AM to 8:00 PM, Sun: 9:00 AM to 2:00 PM</span>
        </div>
    </div>
</div>
<!-- Scrolling Ticker Section End -->


<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{asset('images/logo/footLogo.png')}}" alt="">
                    </div>
                    <!-- Footer Logo End -->
                    <!-- About Footer Content Start -->
                    <div class="about-footer-content">
                        <p>At Singh Nursing Home, we are dedicated to providing comprehensive and compassionate care. Our team is committed to ensuring your recovery and well-being, especially during emergencies.</p>
                    </div>
                    <!-- About Footer Content End -->

                    <!-- Footer Social Links Start -->
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/singhnursinghome" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/singhnursinghome" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/singhnursinghome" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/singhnursinghome" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Links End -->

                </div>
                <!-- About Footer End -->
            </div>

            <div class="col-lg-3 col-md-4">
                <!-- About Links Start -->
                <div class="about-working-hour">
                    <h3>Opening hours</h3>
                    <ul>
                        <li>mon to fri : 9:00 to 8:00</li>
                        <li>sat : 9:00AM to 8:00PM</li>
                        <li>sun : 9:00AM to 2:00PM</li>
                    </ul>
                </div>
                <!-- About Links End -->
            </div>

            <div class="col-lg-3 col-md-4">
                <!-- About Links Start -->
                <div class="about-service-list">
                    <h3>more services</h3>
                    @php
                    $services = App\Models\Service::where('status',1)->get();
                    @endphp
                    <ul>
                        @foreach($services->unique('department') as $service)
                        <li><a href="{{route('service-single', $service->slug)}}">{{ preg_replace('/([a-z])([A-Z])/s', '$1 $2', $service->department) }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- About Links End -->
            </div>

            <div class="col-lg-3 col-md-4">
                <!-- About Links Start -->
                <div class="footer-contact">
                    <h3>Contact</h3>
                    <!-- Footer Contact Details Start -->
                    <div class="footer-contact-details">
                        <!-- Footer Info Box Start -->
                        <div class="footer-info-box">
                            <div class="icon-box">
                                <img src="{{asset('images/icon-phone.svg')}}" alt="Phone Icon">
                            </div>
                            <div class="footer-info-box-content">
                                <p>(+91) 789 3456 012</p> <!-- Phone number -->
                            </div>
                        </div>
                        <!-- Footer Info Box End -->

                        <!-- Footer Info Box Start -->
                        <div class="footer-info-box">
                            <div class="icon-box">
                                <img src="{{asset('images/icon-mail.svg')}}" alt="Email Icon">
                            </div>
                            <div class="footer-info-box-content">
                                <p>info@singhnursinghome.com</p> <!-- Email address -->
                            </div>
                        </div>
                        <!-- Footer Info Box End -->

                        <!-- Footer Info Box Start -->
                        <div class="footer-info-box">
                            <div class="icon-box">
                                <img src="{{asset('images/icon-location.svg')}}" alt="Location Icon">
                            </div>
                            <div class="footer-info-box-content">
                                <p>D-236, Vivek Vihar Phase I, Vivek Vihar, Delhi, 110095</p> <!-- Updated address -->
                            </div>
                        </div>
                        <!-- Footer Info Box End -->
                    </div>
                    <!-- Footer Contact Details End -->
                </div>
                <!-- About Links End -->
            </div>

        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright 2024 Digidotes. All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Footer Social Link Start -->
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{route('about')}}">about us</a></li>
                            <li><a href="{{route('service')}}">services</a></li>
                            <li><a href="{{route('contact')}}">contact us</a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
<!-- Footer End -->

<!-- Jquery Library File -->
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<!-- Bootstrap js file -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Validator js file -->
<script src="{{asset('js/validator.min.js')}}"></script>
<!-- SlickNav js file -->
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<!-- Swiper js file -->
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<!-- Counter js file -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Magnific js file -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{asset('js/SmoothScroll.js')}}"></script>
<!-- Parallax js -->
<script src="{{asset('js/parallaxie.js')}}"></script>
<!-- MagicCursor js file -->
<script src="{{asset('js/gsap.min.js')}}"></script>
<script src="{{asset('js/magiccursor.js')}}"></script>
<!-- Text Effect js file -->
<script src="{{asset('js/SplitText.js')}}"></script>
<script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
<!-- YTPlayer js File -->
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Wow js file -->
<script src="{{asset('js/wow.js')}}"></script>
<!-- Main Custom js file -->
<script src="{{asset('js/function.js')}}"></script>
<script src="{{asset('../../assets/js/theme-panel.js')}}"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2024 07:41:53 GMT -->

</html>
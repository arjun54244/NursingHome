@extends('layouts.main')

@section('title')
Contact Us
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Page Header Box Start -->
				<div class="page-header-box">
					<h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
					<nav class="wow fadeInUp">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
							<li class="breadcrumb-item active" aria-current="page">contact us</li>
						</ol>
					</nav>
				</div>
				<!-- Page Header Box End -->
			</div>
		</div>
	</div>
</div>
<!-- Page Header End -->

<!-- Page Contact Start -->
<div class="page-contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<!-- Contact Info Item Start -->
				<div class="contact-info-item wow fadeInUp">
					<!-- Icon Box Start -->
					<div class="icon-box">
						<img src="images/icon-green-location.svg" alt="">
					</div>
					<!-- Icon Box End -->

					<!-- Contact Info Content Start -->
					<div class="contact-info-content">
						<h3>Location</h3>
						<p>D-236, Vivek Vihar Phase I, Vivek Vihar, Delhi, 110095</p>
					</div>
					<!-- Contact Info Content End -->
				</div>
				<!-- Contact Info Item End -->
			</div>

			<div class="col-lg-3 col-md-6">
				<!-- Contact Info Item Start -->
				<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
					<!-- Icon Box Start -->
					<div class="icon-box">
						<img src="images/icon-green-mail.svg" alt="">
					</div>
					<!-- Icon Box End -->

					<!-- Contact Info Content Start -->
					<div class="contact-info-content">
						<h3>Email</h3>
						<p><a href="mailto:info@singhnursinghome.com">info@singhnursinghome.com</a></p>
					</div>
					<!-- Contact Info Content End -->
				</div>
				<!-- Contact Info Item End -->
			</div>

			<div class="col-lg-3 col-md-6">
				<!-- Contact Info Item Start -->
				<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
					<!-- Icon Box Start -->
					<div class="icon-box">
						<img src="images/icon-green-phone.svg" alt="">
					</div>
					<!-- Icon Box End -->

					<!-- Contact Info Content Start -->
					<div class="contact-info-content">
						<h3>Phone</h3>
						<p>(+91) 789 3456 012</p>
						<p>(+91) 879 526 789</p>
					</div>
					<!-- Contact Info Content End -->
				</div>
				<!-- Contact Info Item End -->
			</div>

			<div class="col-lg-3 col-md-6">
				<!-- Contact Info Item Start -->
				<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
					<!-- Icon Box Start -->
					<div class="icon-box">
						<img src="images/icon-green-hour.svg" alt="">
					</div>
					<!-- Icon Box End -->

					<!-- Contact Info Content Start -->
					<div class="contact-info-content">
						<h3>Working Hours</h3>
						<p>Mon to Fri: 9:00 AM to 8:00 PM</p>
						<p>Sat: 9:00 AM to 8:00 PM</p>
						<p>Sun: 9:00 AM to 2:00 PM</p>
					</div>
					<!-- Contact Info Content End -->
				</div>
				<!-- Contact Info Item End -->
			</div>
		</div>
	</div>
</div>
<!-- Page Contact End -->


<!-- Contact Form Start -->
<div class="contact-us-form">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<!-- Contact Us Image Start -->
				<div class="contact-us-img">
					<figure class="reveal image-anime">
						<img src="images/contact-us-img.jpg" alt="">
					</figure>
				</div>
				<!-- Contact Us Image End -->
			</div>
			<div class="col-lg-6">
				<div class="contact-form">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">contact us</h3>
						<h2 class="text-anime-style-2" data-cursor="-opaque"><span>Get</span> In Touch With Us</h2>
					</div>
					<!-- Section Title End -->

					<form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
						<div class="row">
							<div class="form-group col-md-6 mb-4">
								<input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Name" required="">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group col-md-6 mb-4">
								<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required="">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group col-md-6 mb-4">
								<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group col-md-6 mb-4">
								<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group col-md-12 mb-5">
								<textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Your Message" required=""></textarea>
								<div class="help-block with-errors"></div>
							</div>

							<div class="col-md-12">
								<button type="submit" class="btn-default disabled">send message</button>
								<div id="msgSubmit" class="h3 hidden"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Form End -->

<!-- Google Map Start -->
<div class="google-map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<!-- Google Map Iframe Start -->
				<div class="google-map-iframe">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.7400066546716!2d77.3185597742951!3d28.667502482493948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb1aaae3eb61%3A0xd94a7764511fe361!2sSingh%20Nursing%20Home%20P%20Ltd!5e0!3m2!1sen!2sin!4v1729235739141!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<!-- Google Map Iframe End -->
			</div>
		</div>
	</div>
</div>
<!-- Google Map End -->

@endsection
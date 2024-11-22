<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/physiocare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Oct 2024 07:41:24 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('metaTitle', '')">
    <meta name="description" content="@yield('metaDec', '')">
    <meta name="keywords" content="@yield('metaKey', '')">
    <meta name="author" content="arjun54244">
    <!-- Page Title -->
    <title> @yield('title', 'Nursing Home')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="{{asset('image/x-icon')}}" href="{{asset('images/logo/faviconx.png')}}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&amp;family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{asset('css/slicknav.min.css')}}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- Font Awesome Icon Css-->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{asset('css/mousecursor.css')}}">
    <!-- Main Custom Css -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div> -->
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="tel:+919818406887"><img src="{{asset('images/icon-phone.svg')}}" alt=""> +91 98184 06887</a></li>
                            <li><a href="mailto:info@singhnursinghome.com"><img src="{{asset('images/icon-mail.svg')}}" alt=""> info@singhnursinghome.com</a></li>
                            <li class="hide-mobile"><a href="#"><img src="{{asset('images/icon-location.svg')}}" alt=""> D-236, Vivek Vihar Phase I, Vivek Vihar, Delhi, 110095</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-3 col-md-0">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=61566414132700"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/singhnursinghome/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/singh-nursing-home/?viewAsMember=true"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('images/logo/logo.png')}}" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('doctores')}}">Team</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">Department</a>
                                    <ul>

                                        @php
                                        $services = App\Models\Service::where('status',1)->get();
                                    
                                        $departments = App\Models\Department::get();
                                        @endphp
                                        <li class="nav-item"><a class="nav-link" href="{{route('ServiceDepartment')}}">Deprtments</a></li>
                                        @foreach($departments as $department)
                                            <li class="nav-item"><a class="nav-link" href="{{route('department',$department->slug)}}" >{{ preg_replace('/([a-z])([A-Z])/s', '$1 $2',$department->slug )}}</a></li>
                                        @endforeach

                                        @foreach ($services->unique('department')->where('department', 'Gynae') as $service)
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('ServiceDep', $service->department) }}">
                                            Gynaecology
                                            </a>
                                        </li>
                                        @endforeach
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
                                        @endphp

                                        @foreach ($services->filter(fn($service) => in_array($service->department, $allowedDepartments))  as $service)
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('service-single', $service->slug) }}">
                                                    {{ preg_replace('/([a-z])([A-Z])/s', '$1 $2', $service->slug) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('blogs')}}">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="tel:+918448973455" class="btn-default">+91 84489 73455</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
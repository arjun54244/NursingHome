@extends('layouts.main')

@section('title')
Blogs
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Blog</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Blog Start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
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

        <!-- <div class="row">
            <div class="col-md-12"> -->
                <!-- Post Pagination Start -->
                <!-- <div class="post-pagination wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                    </ul>
                </div> -->
                <!-- Post Pagination End -->
            <!-- </div>
        </div> -->
    </div>
</div>
<!-- Page Blog End -->

@endsection
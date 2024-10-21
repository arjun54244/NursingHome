@extends('layouts.main')

@section('title')
Gallery
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Our Gallery</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">our Gallery</li>
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
            @foreach($galleries as $gallery)
            @if(!empty($gallery->attachments) && is_array($gallery->attachments))
            @foreach($gallery->attachments as $key => $attachment) <!-- key will be the unique ID -->
            <div class="col-lg-3 col-md-6">
                <div class="team-member-item wow fadeInUp">
                    <div class="team-image">
                        <figure class="image-anime">
                            <img src="{{ asset('storage/' . $attachment) }}" alt="Gallery Image">
                        </figure>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No attachments available for this gallery.</p>
            @endif
            @endforeach

        </div>
    </div>
</div>
<!-- Page Team End -->

@endsection
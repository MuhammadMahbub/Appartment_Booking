@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Gallery
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->gallery_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->gallery_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->gallery_page_title }}s</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Rooms</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== GALLERY START ======-->
    <section class="gallery-wrappper pt-120 pb-120">
        <div class="container">
            <div class="gallery-loop">
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset('assets/img/gallery/01.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/01.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".4s">
                    <a href="{{ asset('assets/img/gallery/02.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/02.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{ asset('assets/img/gallery/03.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/03.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ asset('assets/img/gallery/04.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/04.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ asset('assets/img/gallery/05.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/05.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".8s">
                    <a href="{{ asset('assets/img/gallery/06.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/06.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".9s">
                    <a href="{{ asset('assets/img/gallery/07.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/07.jpg') }}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay="1.1s">
                    <a href="{{ asset('assets/img/gallery/08.jpg') }}" class="popup-image">
                        <img src="{{ asset('assets/img/gallery/08.jpg') }}" alt="Images">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY END ======-->

@endsection

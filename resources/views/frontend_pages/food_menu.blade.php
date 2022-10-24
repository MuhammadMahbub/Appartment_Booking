@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Food Menu
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->food_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->food_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->food_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Menu</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== MENU AREA START ======-->
    <section class="menu-area pt-115 pb-115">
        <div class="container">
            <!-- Menu Looop -->
            <div class="menu-loop">
                <div class="row">
                    @foreach($foods as $food)
                        @if ($loop->index % 2 == 0)
                            <div class="col-lg-6 col-md-10">
                                <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                                    <div class="menu-img" style="background-image: url({{ asset('uploads/foods') }}/{{ $food->image }});">
                                    </div>
                                    <div class="menu-desc">
                                        <h4><a href="#">{{ $food->name }}</a></h4>
                                        <p>{{ $food->description }}
                                        </p>
                                        <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-6 col-md-10">
                                <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                                    <div class="menu-img" style="background-image: url({{ asset('uploads/foods') }}/{{ $food->image }});">
                                    </div>
                                    <div class="menu-desc">
                                        <h4><a href="#">{{ $food->name }}</a></h4>
                                        <p>{{ $food->description }}
                                        </p>
                                        <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <!-- Gallery -->
            <div class="gallery-wrap mt-100">
                <div class="container">
                    <div class="row gallery-slider text-center">
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-1.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-1.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-2.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-2.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-3.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-3.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-1.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-1.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-2.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-2.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ asset('assets/img/menu/menu-gallery-3.jpg') }}" class="gallery-popup">
                                <img src="{{ asset('assets/img/menu/menu-gallery-3.jpg') }}" alt="Gallery Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== MENU AREA END ======-->

    <!--====== ROOM Gallery CTA START ======-->
    <section class="room-gallery-cta" style="background-image: url({{ asset('assets/img/room-cta-gallery/bg.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-text text-center">
                        <span>our rooms</span>
                        <h2>
                            Each of our nine lovely double guest rooms feature a private bath, wi-fi, cable television and include full breakfast.
                        </h2>
                        <ul class="mt-50">
                            <li class="wow fadeInUp" data-wow-delay=".3s"><a class="main-btn btn-filled" href="#">take a tour</a></li>
                            <li class=" wow fadeInUp" data-wow-delay=".5s"><a class="main-btn btn-border" href="#">Learn More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="rotate-images">
            <img src="{{ asset('assets/img/room-cta-gallery/01.jpg') }}" class="rotate-image-one" alt="Image">
            <img src="{{ asset('assets/img/room-cta-gallery/02.jpg') }}" class="rotate-image-two" alt="Image">
            <img src="{{ asset('assets/img/room-cta-gallery/03.jpg') }}" class="rotate-image-three" alt="Image">
        </div>
    </section>
    <!--====== ROOM Gallery CTA END ======-->

@endsection

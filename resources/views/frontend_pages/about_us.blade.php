@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | About Us
@endsection

@section('css')
    <style>
        .feature-box{
            height: 356px;
        }
    </style>
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->about_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->about_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->about_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ABOUT PART START ======-->
    <section class="about-section pt-115 pb-115">
        <div class="container">
            <div class="video-wrap video-wrap-two video-about mb-60"
                style="background-image: url({{ asset('uploads/abouts/'.aboutus()->video_back_image) }});">
                <a href="{{ aboutus()->video_link }}" class="popup-video"><i
                        class="fas fa-play"></i></a>
            </div>
            <div class="section-title about-title text-center">
                <span class="title-tag">since <span>{{ aboutus()->start_year }}</span></span>
                <h2>{{ aboutus()->internal_page_heading }}</h2>
            </div>
            <ul class="about-features">
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ about_feature()->link_1 }}">
                        <i class="{{ about_feature()->feature_icon_1 }}"></i>
                        <i class="hover-icon {{ about_feature()->feature_icon_1 }}"></i>
                        <span class="title">{{ about_feature()->name_1 }}</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="{{ about_feature()->link_2 }}">
                        <i class="{{ about_feature()->feature_icon_2 }}"></i>
                        <i class="hover-icon {{ about_feature()->feature_icon_2 }}"></i>
                        <span class="title">{{ about_feature()->name_2 }}</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{ about_feature()->link_3 }}">
                        <i class="{{ about_feature()->feature_icon_3 }}"></i>
                        <i class="hover-icon {{ about_feature()->feature_icon_3 }}"></i>
                        <span class="title">{{ about_feature()->name_3 }}</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ about_feature()->link_4 }}">
                        <i class="{{ about_feature()->feature_icon_4 }}"></i>
                        <i class="hover-icon {{ about_feature()->feature_icon_4 }}"></i>
                        <span class="title">{{ about_feature()->name_4 }}</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ about_feature()->link_5 }}">
                        <i class="{{ about_feature()->feature_icon_5 }}"></i>
                        <i class="hover-icon {{ about_feature()->feature_icon_5 }}"></i>
                        <span class="title">{{ about_feature()->name_5 }}</span>
                    </a>
                </li>
            </ul>

            {{-- <div class="about-text-box">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/text-block/05.jpg') }}" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <span>Restaurant</span>
                            <h3>Get Restaurant Facilities & Many Other More</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip.
                            </p>
                            <a href="#" class="main-btn btn-filled">take a tour</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!--====== ABOUT PART END ======-->
    <!--====== CORE FEATURES START ======-->
    <section class="core-feature-section bg-black pt-115 pb-115">
        <div class="container">
            <div class="section-title white-color text-center mb-50">
                <span class="title-tag"> {{ aboutus()->facility_subtitle }} </span>
                <h2>{{ aboutus()->facility_title }}</h2>
            </div>
            <!-- Featre Loop -->
            <div class="row features-loop">
                @foreach ($about_facilities as $facility)
                <div class="col-lg-4 col-sm-6 order-1">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".3s">
                        <div class="icon">
                            {!! $facility->icon !!}
                        </div>
                        <h3><a href="{{ $facility->link }}">{{ $facility->title }}</a></h3>
                        <p>{!! $facility->description !!}</p>
                        <span class="count">{{ $facility->count }}</span>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-sm-6 order-2">
                    <div class="feature-box dark-box wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3><a href="#">Quiet Hours</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-3 order-sm-4 order-lg-3">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-location-pin"></i>
                        </div>
                        <h3><a href="#">Best Locations</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="flaticon-clock-1"></i>
                        </div>
                        <h3><a href="#">Free Cancellation</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-5">
                    <div class="feature-box dark-box wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3><a href="#">Payment Options</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">05</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-6">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="flaticon-discount"></i>
                        </div>
                        <h3><a href="#">Special Offers</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">06</span>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--====== CORE FEATURES END ======-->
    <!--====== COUNTER UP START ======-->
    <section class="counter-section pt-115">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title mb-80">
                <span class="title-tag">{{ aboutus()->counter_subtitle }}</span>
                <h2>{{ aboutus()->counter_title }}</h2>
            </div>
            <!-- Counter -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            {!! $about_counter->user_icon !!}
                        </div>
                        <h4><span class="counter">{{ $about_counter->user_count }}</span></h4>
                        <span class="title">{{ $about_counter->user_name }}</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            {!! $about_counter->review_icon !!}
                        </div>
                        <h4><span class="counter">{{ $about_counter->review_count }}</span>M</h4>
                        <span class="title">{{ $about_counter->review_name }}</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            {!! $about_counter->country_icon !!}
                        </div>
                        <h4><span class="counter">{{ $about_counter->country_count }}</span></h4>
                        <span class="title">{{ $about_counter->country_name }}</span>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="image mt-30">
                        <img src="{{ asset('assets/img/gallery/09.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="image mt-30">
                        <img src="{{ asset('assets/img/gallery/10.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== COUNTER UP END ======-->
    <!--====== LATEST NEWS START ======-->
    <section class="latest-news pt-115 pb-115">
        <div class="container">
            <div class="section-title text-center">
                <span class="title-tag">{{ aboutus()->blog_subtitle }}</span>
                <h2>{{ aboutus()->blog_title }}</h2>
            </div>
            <!-- Latest post loop -->
            <div class="row justify-content-center mt-50">
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url({{ asset('assets/img/latest-post/01.jpg') }});"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url({{ asset('assets/img/latest-post/03.jpg') }});"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="latest-post-box mt-30">
                        <div class="post-img" style="background-image: url({{ asset('assets/img/latest-post/02.jpg') }});"></div>
                        <div class="post-desc">
                            <ul class="post-meta">
                                <li>
                                    <a href="#"><i class="fal fa-calendar-alt"></i>23rd March 2019</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fal fa-user"></i>By Admin</a>
                                </li>
                            </ul>
                            <h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== LATEST NEWS END ======-->

@endsection

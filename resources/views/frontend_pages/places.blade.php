@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Places
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->places_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->places_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->places_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Places</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== PLACES CONTENT START ======-->
    <section class="places-wrapper pt-120 pb-120">
        <div class="container">
            <!-- Places Maps -->
            <div class="places-maps bg-white" id="placesMaps"></div>

            <!-- Places Boxes -->
            <div class="places-boxes pt-115">
                <!-- Title -->
                <div class="section-title text-center mb-50">
                    <span class="title-tag">Popular</span>
                    <h2>Highlights Places</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/01.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/02.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/03.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/04.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/05.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/06.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-10">
                        <div class="place-box mt-30">
                            <div class="place-bg-wrap">
                                <div class="place-bg" style="background-image: url({{ asset('assets/img/places/07.jpg') }});"></div>
                            </div>
                            <div class="desc">
                                <h4><a href="places-details.html">Duplex Restaurant</a></h4>
                                <span class="time">1,500m | 21 min. Walk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== PLACES CONTENT END ======-->

@endsection

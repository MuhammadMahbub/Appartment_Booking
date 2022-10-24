@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Offers
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->offers_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->offers_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->offers_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Offers</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <section class="offers-area pt-120 pb-60">
        <div class="container">
            <div class="offer-boxes-loop">
                <div class="offer-box">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/offers/01.jpg') }}" alt="images">
                    </div>
                    <div class="offer-desc">
                        <div class="title-wrap">
                            <div class="title">
                                <span class="room-cat">double bed</span>
                                <h2>Luxury Double Bed</h2>
                            </div>
                            <div class="price">
                                $345<span>/Night</span>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="offer-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.
                                    </p>
                                    <a href="#" class="main-btn btn-filled">Book now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="offer-feature">
                                    <ul>
                                        <li><i class="fal fa-bath"></i> Air conditioner</li>
                                        <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                        <li><i class="fal fa-cut"></i>Breakfast</li>
                                        <li><i class="fal fa-guitar"></i>Kitchen</li>
                                        <li><i class="fal fa-broom"></i>Cleaning</li>
                                        <li><i class="fal fa-shower"></i>Shower</li>
                                        <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                        <li><i class="fal fa-bed"></i>Single bed</li>
                                        <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                        <li><i class="fal fa-bus"></i>Towels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-box">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/offers/02.jpg') }}" alt="images">
                    </div>
                    <div class="offer-desc">
                        <div class="title-wrap">
                            <div class="title">
                                <span class="room-cat">double bed</span>
                                <h2>Luxury Double Bed</h2>
                            </div>
                            <div class="price">
                                $345<span>/Night</span>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="offer-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.
                                    </p>
                                    <a href="#" class="main-btn btn-filled">Book now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="offer-feature">
                                    <ul>
                                        <li><i class="fal fa-bath"></i> Air conditioner</li>
                                        <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                        <li><i class="fal fa-cut"></i>Breakfast</li>
                                        <li><i class="fal fa-guitar"></i>Kitchen</li>
                                        <li><i class="fal fa-broom"></i>Cleaning</li>
                                        <li><i class="fal fa-shower"></i>Shower</li>
                                        <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                        <li><i class="fal fa-bed"></i>Single bed</li>
                                        <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                        <li><i class="fal fa-bus"></i>Towels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-box">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/offers/03.jpg') }}" alt="images">
                    </div>
                    <div class="offer-desc">
                        <div class="title-wrap">
                            <div class="title">
                                <span class="room-cat">double bed</span>
                                <h2>Luxury Double Bed</h2>
                            </div>
                            <div class="price">
                                $345<span>/Night</span>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="offer-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.
                                    </p>
                                    <a href="#" class="main-btn btn-filled">Book now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="offer-feature">
                                    <ul>
                                        <li><i class="fal fa-bath"></i> Air conditioner</li>
                                        <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                        <li><i class="fal fa-cut"></i>Breakfast</li>
                                        <li><i class="fal fa-guitar"></i>Kitchen</li>
                                        <li><i class="fal fa-broom"></i>Cleaning</li>
                                        <li><i class="fal fa-shower"></i>Shower</li>
                                        <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                        <li><i class="fal fa-bed"></i>Single bed</li>
                                        <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                        <li><i class="fal fa-bus"></i>Towels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-box">
                    <div class="thumb">
                        <img src="{{ asset('assets/img/offers/04.jpg') }}" alt="images">
                    </div>
                    <div class="offer-desc">
                        <div class="title-wrap">
                            <div class="title">
                                <span class="room-cat">double bed</span>
                                <h2>Luxury Double Bed</h2>
                            </div>
                            <div class="price">
                                $345<span>/Night</span>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="offer-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.
                                    </p>
                                    <a href="#" class="main-btn btn-filled">Book now</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="offer-feature">
                                    <ul>
                                        <li><i class="fal fa-bath"></i> Air conditioner</li>
                                        <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                        <li><i class="fal fa-cut"></i>Breakfast</li>
                                        <li><i class="fal fa-guitar"></i>Kitchen</li>
                                        <li><i class="fal fa-broom"></i>Cleaning</li>
                                        <li><i class="fal fa-shower"></i>Shower</li>
                                        <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                        <li><i class="fal fa-bed"></i>Single bed</li>
                                        <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                        <li><i class="fal fa-bus"></i>Towels</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FEATURE ROOM START ======-->
    <section class="feature-room-section with-bg pt-155 pb-115" style="background-image: url({{ asset('assets/img/bg/06.jpg') }});">
        <div class="container">
            <div class="section-title white-color text-center">
                <span class="title-tag">popular list</span>
                <h2>Popular Rooms</h2>
            </div>
            <!-- Room Looop -->
            <div class="row room-gird-loop justify-content-center mt-30">
                <div class="col-lg-4 col-sm-6">
                    <div class="room-box mt-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url({{ asset('assets/img/room/01.jpg') }});"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="room-box mt-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url({{ asset('assets/img/room/02.jpg') }});"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="room-box mt-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url({{ asset('assets/img/room/03.jpg') }});"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                <li><i class="fal fa-bed"></i></li>
                                <li><i class="fal fa-wifi"></i></li>
                                <li><i class="fal fa-car"></i></li>
                                <li><i class="fal fa-coffee"></i></li>
                                <li><i class="fal fa-concierge-bell"></i></li>
                                <li><i class="fal fa-compress-arrows-alt"></i></li>
                                <li><i class="fal fa-swimmer"></i></li>
                            </ul>
                            <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                            <span class="price">$345/Night</span>
                            <a href="#" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FEATURE ROOM END ======-->

@endsection

@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Restaurant
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->search_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>The ultimate luxury</span>
                <h2 class="page-title"{{ title_banner_settings()->search_page_subtitle }}</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">{{ title_banner_settings()->search_page_title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <section class="pt-120 pb-120">
        <div class="container">
            <p class="mb-45">2 accommondations found from September 18, 2020 - till September 19, 2020</p>
            <div class="booking-form-body search-box mb-45">
                <h3 class="mb-20">Recommended for 1 adult</h3>
                <div class="search-item">
                    <div class="search-item-text">
                        <span>1x <a href="#">Test Accommodation</a></span>
                        <span>Max occupancy: 1adult</span>
                    </div>
                    <div class="search-item-price">
                        <span>$320</span>
                    </div>
                </div>
                <strong class="total-price text-right">Total: $320</strong>
                <div class="actions text-right">
                    <button type="button" class="main-btn btn-filled">Reserve</button>
                </div>
            </div>
            <div class="booking-conformation-box">
                <div class="booking-conformation-text">
                    <span>1 accommondation selected.</span>
                    <span>Total: $50</span>
                </div>
                <div class="booking-conformation-button">
                    <button type="button" class="main-btn success-btn">Confirm Reservation</button>
                </div>
            </div>
            <div class="row room-gird-loop">
                <div class="col-md-6">
                    <div class="room-box mb-30">
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
                            <div class="form-group input-group input-group-two left-icon mb-20 ">
                                <select required>
                                    <option selected>--Select--</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                                <span class="mt-2">of 11 accommondation available</span>
                            </div>
                            <div class="item-boxs">
                                <div class="item-boxs-item">
                                    <div class="item-text">
                                        1x "Homestay" has beed added to your reservation.
                                    </div>
                                    <div class="item-remove">
                                        <a href="#" class="text-danger remove-item">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions">
                                <button type="button" class="main-btn btn-filled room-book">Book</button>
                                <button type="submit" class="main-btn success-btn confirm-btn">Confirm Reservation</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="room-box mb-30">
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
                            <div class="form-group input-group input-group-two left-icon mb-20 ">
                                <select required>
                                    <option selected>--Select--</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                                <span class="mt-2">of 11 accommondation available</span>
                            </div>
                            <div class="item-boxs">
                                <div class="item-boxs-item">
                                    <div class="item-text">
                                        1x "Homestay" has beed added to your reservation.
                                    </div>
                                    <div class="item-remove">
                                        <a href="#" class="text-danger remove-item">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions">
                                <button type="button" class="main-btn btn-filled room-book">Book</button>
                                <button type="submit" class="main-btn success-btn confirm-btn">Confirm Reservation</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

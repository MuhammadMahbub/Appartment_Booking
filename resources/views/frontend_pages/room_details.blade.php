@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Room Details
@endsection

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->room_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->room_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->room_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Rooms</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== ROOM-DETAILS START ======-->
    <section class="room-details pt-120 pb-90">
        <div class="container">
            <div class="row">
                <!-- details -->
                <div class="col-lg-8">
                    <div class="deatils-box">
                        <div class="title-wrap">
                            <div class="title">
                                <div class="room-cat">{{ $single_room->bedType->name ?? 'N/A'}}</div>
                                <h2>{{ $single_room->roomType->name ?? 'N/A'}}</h2>
                            </div>
                            <div class="price">
                                ${{ $single_room->room_cost ?? 'N/A'}}<span>/Night</span>
                            </div>
                        </div>
                        <div class="thumb">
                          <div class="room-details-slider">
                            <img src="{{ asset('uploads/rooms') }}/{{ $single_room->room_photo }}" alt="images" width="750" height="480">
                          </div>
                          <div class="room-details-slider-nav">
                            <img src="{{ asset('assets/img/room/sm/details.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-2-sm.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-3-sm.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-4-sm.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-5-sm.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-6-sm.jpg') }}" alt="images">
                            <img src="{{ asset('assets/img/room/sm/details-7-sm.jpg') }}" alt="images">
                          </div>
                        </div>
                        <p>
                            {{$single_room->short_description ?? 'N/A'}}
                        </p>
                        <div class="room-fearures clearfix mt-60 mb-60">
                            <h3 class="subtitle">Amenities</h3>
                            <ul class="room-fearures-list">
                                @foreach (amenities() as $item)
                                <li>{!! $item->icon !!} {{ $item->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <p>
                            {{$single_room->long_description ?? 'N/A'}}
                        </p>
                        <div class="testimonials mt-60 mb-20">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="testimonial-box">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/testimonial/01.png') }}" alt="images">
                                            <span class="check"><i class="fal fa-check"></i></span>
                                        </div>
                                        <h3>Rosalina D. William</h3>
                                        <span class="clinet-post">Founder, qux co.</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="testimonial-box">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/testimonial/02.png') }}" alt="images">
                                            <span class="check"><i class="fal fa-check"></i></span>
                                        </div>
                                        <h3>Donald H. Hilixer</h3>
                                        <span class="clinet-post">Founder, hilix</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-rules clearfix mb-60">
                            <h3 class="subtitle">House Rules</h3>
                            <ul class="room-rules-list">
                                @foreach (rules() as $item)
                                    <li>{{ $item->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="cancellation-box clearfix mb-60">
                            <h3 class="subtitle">Cancellation</h3>
                            <p>
                               {{$single_room->cancellation ?? 'N/A'}}
                            </p>
                        </div>
                        <div class="room-map mb-60" id="roomMap"></div>
                        <div class="related-room">
                            <h3 class="subtitle">Related Rooms</h3>
                            <div class="row room-gird-loop">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="room-box mb-30">
                                        <div class="room-img-wrap">
                                            <div class="room-img"
                                                style="background-image: url({{ asset('assets/img/room/13.jpg') }});">
                                            </div>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                                tempor.</p>
                                            <span class="price">$345/Night</span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="room-box mb-30">
                                        <div class="room-img-wrap">
                                            <div class="room-img"
                                                style="background-image: url({{ asset('assets/img/room/14.jpg') }});">
                                            </div>
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
                                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                                tempor.</p>
                                            <span class="price">$345/Night</span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form -->
                <div class="col-lg-4">
                    <div class="room-booking-form">
                        <h5 class="title">Check Availability</h5>
                        <form action="#">
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="arrival-date">Check In</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="20-6-2020" name="arrival-date" id="arrival-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Check Out</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="30-6-2020" name="departure-date" id="departure-date">
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="room">Rooms</label>
                                <select name="room" id="room">
                                    <option value="1">1 Room</option>
                                    <option value="2" selected>2 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="8">8 Room</option>
                                </select>
                            </div>
                            <div class="input-group input-group-two left-icon mb-20">
                                <label for="departure-date">Guest</label>
                                <select name="guest" id="guest">
                                    <option value="8">8 Guest</option>
                                    <option value="10" selected>10 Guest</option>
                                    <option value="12">12 Guest</option>
                                    <option value="15">15 Guest</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <button class="main-btn btn-filled">check availability</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ROOM-DETAILS END ======-->
@endsection

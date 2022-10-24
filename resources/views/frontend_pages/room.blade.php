@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Room
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

    <!--====== ROOM-GRIRD START ======-->
    <section class="room-section room-grid-style pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center room-gird-loop">
                @foreach ($rooms as $room)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="room-box mb-30">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url({{ asset('uploads/rooms') }}/{{ $room->room_photo }});"></div>
                        </div>
                        <div class="room-desc">
                            <ul class="icons">
                                @foreach ($amenities as $amenity)
                                <li>
                                    {!! $amenity->icon !!}
                                </li>
                                @endforeach
                            </ul>
                            <h4 class="title"><a href="{{ route('room.details', $room->slug) }}"> {{ $room->name }} </a></h4>
                            <p>{{ $room->short_description }}</p>
                            <span class="price">${{ $room->room_cost }}/Night</span>
                            <a href="{{ route('booking.now') }}" class="book-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination-wrap">
                <ul>
                    <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== ROOM-GRIRD END ======-->

@endsection

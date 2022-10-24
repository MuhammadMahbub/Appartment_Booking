@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Home
@endsection

@section('css')
    <style>
        .single-thumb img{
            width: 555px;
            height: 589px;
        }

    </style>
@endsection

@section('content')
    <!--====== BANNER PART START ======-->
	<section class="banner-area banner-style-one">
		<div class="container container-custom-two">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="banner-content">
						<span class="promo-tag wow fadeInDown" data-wow-delay=".3s">{{$banner->subtitle ?? 'N/A'}}</span>
						<h1 class="title wow fadeInLeft" data-wow-delay=".5s"> {{ $banner->title ?? 'N/A'}}
						</h1>
						<ul>
							<li>
								<a target="_blank" class="main-btn btn-filled wow fadeInUp" data-wow-delay=".7s" href="{{$banner->button_url_1 ?? '#!'}}">{{$banner->button_text_1 ?? 'N/A'}}</a>
							</li>
							<li>
								<a target="_blank" class="main-btn btn-border wow fadeInUp" data-wow-delay=".9s" href="{{$banner->button_url_2 ?? '#!'}}">{{$banner->button_text_2 ?? 'N/A'}}</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0.5s">
					<div class="banner-thumb d-none d-md-block">
						<div class="hero-slider-one">
							<div class="single-thumb">
								<img src="{{ asset('uploads/banners') }}/{{ $banner->banner_image_1 }}" alt="banner image">
							</div>
							<div class="single-thumb">
								<img src="{{ asset('uploads/banners') }}/{{ $banner->banner_image_2 }}" alt="banner image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== BANNER PART ENDS ======-->
	<!--====== BOOKING FORM START ======-->
	<section class="booking-form boxed-layout">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-11">
					<div class="booking-form-inner">
						<form action="#">
							<div class="row align-items-end">
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="arrival-date">Arrival Date</label>
										<div class="icon"><i class="fal fa-calendar-alt"></i></div>
										<input type="text" placeholder="24th march 2020" name="arrival-date"
											id="arrival-date">
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="departure-date">Departure Date</label>
										<div class="icon"><i class="fal fa-calendar-alt"></i></div>
										<input type="text" placeholder="30th march 2020" name="departure-date"
											id="departure-date">
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<label for="guests">Guests</label>
										<select name="guests" id="guests">
											<option value="" disabled selected>Select From Here</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="4">4</option>
											<option value="8">8</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inputs-filed mt-30">
										<button type="submit">check availability</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== BOOKING FORM EN ======-->
	<!--====== ABOUT PART START ======-->
	<section class="about-section pt-115 pb-115">
		<div class="container">
			<div class="down-arrow-wrap text-center">
				<a href="#" class="down-arrow"><i class="fal fa-arrow-down"></i></a>
			</div>
			<div class="section-title about-title text-center mb-20">
				<span class="title-tag">since <span>{{ aboutus()->start_year }}</span></span>
				<h2>{{ aboutus()->front_page_heading }}</h2>
			</div>
			<ul class="about-features masonry-layout">
				<li class=" wow fadeInUp" data-wow-delay=".3s">
					<a href="{{ about_feature()->link_1 }}">
						<i class="{{ about_feature()->feature_icon_1 }}"></i>
						<i class="hover-icon {{ about_feature()->feature_icon_1 }}"></i>
						<span class="title">{{ about_feature()->name_1 }}</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".5s">
					<a href="{{ about_feature()->link_2 }}">
						<i class="{{ about_feature()->feature_icon_2 }}"></i>
						<i class="hover-icon {{ about_feature()->feature_icon_2 }}"></i>
						<span class="title">{{ about_feature()->name_2 }}</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".7s">
					<a href="{{ about_feature()->link_3 }}">
						<i class="{{ about_feature()->feature_icon_3 }}"></i>
						<i class="hover-icon {{ about_feature()->feature_icon_3 }}"></i>
						<span class="title">{{ about_feature()->name_3 }}</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay=".9s">
					<a href="{{ about_feature()->link_4 }}">
						<i class="{{ about_feature()->feature_icon_4 }}"></i>
						<i class="hover-icon {{ about_feature()->feature_icon_4 }}"></i>
						<span class="title">{{ about_feature()->name_4 }}</span>
					</a>
				</li>
				<li class=" wow fadeInUp" data-wow-delay="1.1s">
					<a href="{{ about_feature()->link_5 }}">
						<i class="{{ about_feature()->feature_icon_5 }}"></i>
						<i class="hover-icon {{ about_feature()->feature_icon_5 }}"></i>
						<span class="title">{{ about_feature()->name_5 }}</span>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!--====== ABOUT PART END ======-->
	<!--====== ROOM TYPE START ======-->
	{{-- <section class="room-type-section pt-115 pb-115" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->room_section_bg_image }});">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section-title text-lg-left text-center">
						<span class="title-tag">{{ title_banner_settings()->room_section_subtitle }}</span>
						<h2>{{ title_banner_settings()->room_section_title }}</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="room-filter nav nav-pills justify-content-center justify-content-lg-end" id="room-tab"
						role="tablist">
						@foreach (room_type() as $type)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? "active" : "" }}" id="luxury-tab" data-toggle="pill" href="#luxury__{{ $type->id }}">
                                    {{ $type->name }}
                                </a>
                            </li>
                        @endforeach

					</ul>
				</div>
			</div>
			<div class="tab-content mt-65" id="room-tabContent">
                @foreach (room_type() as $type)
                @php
                    $rooms = App\Models\Room::where('room_type', $type->id)->get();
                @endphp
                    <div class="tab-pane fade {{ $loop->first ? "show active" : "" }}" id="luxury__{{ $type->id }}" role="tabpanel">
                        @foreach ($rooms as $item)
                            <div class="room-items">
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="row">
                                            @if (($loop->index + 1) == 1)
                                                <div class="col-12">
                                                    <div class="room-box extra-wide">
                                                        <div class="room-bg"
                                                            style="background-image: url({{ asset('assets/img/room-type/04.jpg') }});"></div>
                                                        <div class="room-content">
                                                            <span class="room-count"><i class="fal fa-th"></i>{{ $item->room_amount ?? '' }} Rooms</span>
                                                            <h3><a href="#">{{ $item->name ?? '' }}</a></h3>
                                                        </div>
                                                        <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            @endif

                                            @if (($loop->index + 1) == 2)
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="room-box">
                                                        <div class="room-bg"
                                                            style="background-image: url({{ asset('assets/img/room-type/01.jpg') }});">
                                                        </div>
                                                        <div class="room-content">
                                                            <span class="room-count"><i class="fal fa-th"></i>05 Rooms</span>
                                                            <h3><a href="#">{{ $item->name ?? '' }}</a></h3>
                                                        </div>
                                                        <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (($loop->index + 1) == 3)
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="room-box">
                                                        <div class="room-bg"
                                                            style="background-image: url({{ asset('assets/img/room-type/02.jpg') }});">
                                                        </div>
                                                        <div class="room-content">
                                                            <span class="room-count"><i class="fal fa-th"></i>10 Rooms</span>
                                                            <h3><a href="#">{{ $item->name ?? '' }}</a></h3>
                                                        </div>
                                                        <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    @if (($loop->index + 1) == 4)
                                        <div class="col-lg-4">
                                            <div class="room-box extra-height">
                                                <div class="room-bg" style="background-image: url({{ asset('assets/img/room-type/03.jpg') }});">
                                                </div>
                                                <div class="room-content">
                                                    <span class="room-count"><i class="fal fa-th"></i>12 Rooms</span>
                                                    <h3><a href="#">{{ $item->name ?? '' }}</a></h3>
                                                </div>
                                                <a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach

			</div>
		</div>
	</section> --}}

    <section class="room-type-section pt-115 pb-115" style="background-image: url(assets/img/bg/01.jpg);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section-title text-lg-left text-center">
						<span class="title-tag">room type</span>
						<h2>Inspired Loding</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="room-filter nav nav-pills justify-content-center justify-content-lg-end" id="room-tab"
						role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="luxury-tab" data-toggle="pill" href="#luxury">
								Luxury
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="family-tab" data-toggle="pill" href="#family">
								Family
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="doublebed-tab" data-toggle="pill" href="#doublebed">
								Double Bed
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="relex-tab" data-toggle="pill" href="#relex">
								Relex
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content mt-65" id="room-tabContent">
				<div class="tab-pane fade" id="luxury" role="tabpanel">
					<div class="room-items">
						<div class="row">
							<div class="col-lg-8">
								<div class="row">
									<div class="col-12">
										<div class="room-box extra-wide">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/04.jpg);"></div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>03 Rooms</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/01.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>05 Rooms</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/02.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>10 Rooms</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="room-box extra-height">
									<div class="room-bg" style="background-image: url(assets/img/room-type/03.jpg);">
									</div>
									<div class="room-content">
										<span class="room-count"><i class="fal fa-th"></i>12 Rooms</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="family" role="tabpanel">
					<div class="room-items">
						<div class="row">
							<div class="col-lg-4">
								<div class="room-box extra-height">
									<div class="room-bg" style="background-image: url(assets/img/room-type/03.jpg);">
									</div>
									<div class="room-content">
										<span class="room-count"><i class="fal fa-th"></i>12 Rooms</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/02.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>10 Rooms</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/01.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>05 Rooms</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-12">
										<div class="room-box extra-wide">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/04.jpg);"></div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>03 Rooms</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="doublebed" role="tabpanel">
					<div class="room-items">
						<div class="row">
							<div class="col-lg-4">
								<div class="room-box extra-height">
									<div class="room-bg" style="background-image: url(assets/img/room-type/03.jpg);">
									</div>
									<div class="room-content">
										<span class="room-count"><i class="fal fa-th"></i>12 Rooms</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-12">
										<div class="room-box extra-wide">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/04.jpg);"></div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>03 Rooms</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/01.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>05 Rooms</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/02.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>10 Rooms</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="relex" role="tabpanel">
					<div class="room-items">
						<div class="row">
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/01.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>05 Rooms</span>
												<h3><a href="#">Pendora Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="room-box">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/02.jpg);">
											</div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>10 Rooms</span>
												<h3><a href="#">Pacific Room</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-12">
										<div class="room-box extra-wide">
											<div class="room-bg"
												style="background-image: url(assets/img/room-type/04.jpg);"></div>
											<div class="room-content">
												<span class="room-count"><i class="fal fa-th"></i>03 Rooms</span>
												<h3><a href="#">Luxury Hall Of Fame</a></h3>
											</div>
											<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="room-box extra-height">
									<div class="room-bg" style="background-image: url(assets/img/room-type/03.jpg);">
									</div>
									<div class="room-content">
										<span class="room-count"><i class="fal fa-th"></i>12 Rooms</span>
										<h3><a href="#">Junior Suite</a></h3>
									</div>
									<a href="#" class="room-link"><i class="fal fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====== ROOM TYPE END ======-->
	<!--====== CALL TO ACTION END ======-->
	<section class="cta-section pt-115 pb-160">
		<div class="container">
			<div class="cta-inner">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-8 col-sm-9 col-10 order-2 order-lg-1">
						<div class="cta-text">
							<div class="section-title mb-20">
								<span class="title-tag">call to action</span>
								<h2>The Thin Escape</h2>
							</div>
							<p>Miranda has everything for your trip
								& every single things.</p>
							<a href="#" class="main-btn btn-filled">take a tour</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-10 col-sm-11 col-10 order-1 order-lg-2">
						<!-- feature loop -->
						<div class="cta-features">
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".3s">
								<div class="icon">
									<i class="flaticon-air-freight"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Easy & Free Transport</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">01</span>
								</div>
							</div>
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".4s">
								<div class="icon">
									<i class="flaticon-fast-food"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Clean & Fresh Food</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">02</span>
								</div>
							</div>
							<!-- feature box -->
							<div class="single-feature wow fadeInUp" data-wow-delay=".5s">
								<div class="icon">
									<i class="flaticon-swimming"></i>
								</div>
								<div class="cta-desc">
									<h3><a href="#">Play Ground & Swiming Pool</a></h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
										nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<span class="count">03</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CALL TO ACTION END ======-->
	<!--====== ROOM SLIDER START ======-->
	<section class="room-slider">
		<div class="container-fluid p-0">
			<div class="row rooms-slider-one">
				<div class="col">
					<div class="slider-img" style="background-image: url({{ asset('assets/img/room-slider/01.jpg') }});">
					</div>
				</div>
				{{-- <div class="col">
					<div class="slider-img" style="background-image: url({{ asset('assets/img/room-slider/02.jpg') }});">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url({{ asset('assets/img/room-slider/03.jpg') }});">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url({{ asset('assets/img/room-slider/04.jpg') }});">
					</div>
				</div>
				<div class="col">
					<div class="slider-img" style="background-image: url({{ asset('assets/img/room-slider/05.jpg') }});">
					</div>
				</div> --}}
			</div>
		</div>
		<div class="rooms-content-wrap">
			<div class="container">
				<div class="row justify-content-center justify-content-md-start">
					<div class="col-xl-4 col-lg-5 col-sm-8">
						<div class="room-content-box">
							<div class="slider-count"></div>
							<div class="slider-count-big"></div>
							<div class="room-content-slider">
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-hotel"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								{{-- <div class="single-content">
									<div class="icon">
										<i class="flaticon-hotel"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-hotel"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-hotel"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div>
								<div class="single-content">
									<div class="icon">
										<i class="flaticon-hotel"></i>
									</div>
									<h3><a href="#">Luxury Room</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna.</p>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== ROOM SLIDER END ======-->
	<!--====== TEXT BLOCK START ======-->
	<section class="text-block with-bg pt-115 pb-115" style="background-image: url({{ asset('assets/img/bg/02.jpg') }});">
		<div class="container">
			<div class="row align-items-center justify-content-center justify-content-lg-between">
				<div class="col-lg-5 col-md-8 col-sm-10 wow fadeInLeft" data-wow-delay=".3s">
					<div class="block-text mb-small">
						<div class="section-title mb-20">
							<span class="title-tag">Take a tour</span>
							<h2>Discover Our Underground.</h2>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.
						</p>
						<a href="#" class="main-btn btn-filled mt-40">Book now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 wow fadeInRight" data-wow-delay=".5s">
					<div class="video-wrap" style="background-image: url({{ asset('assets/img/text-block/01.jpg') }});">
						<a href="https://www.youtube.com/watch?v=EEJFMdfraVY" class="popup-video"><i
								class="fas fa-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== TEXT BLOCK END ======-->
	<!--====== TESTIMONIAL SLIDER START ======-->
	<section class="testimonial-section pb-115 pt-115">
		<div class="container">
			<div class="section-title text-center mb-80">
				<span class="title-tag">{{ title_banner_settings()->testimonial_section_subtitle }}</span>
				<h2>{{ title_banner_settings()->testimonial_section_title }}</h2>
			</div>
			<!-- testimonials loop  -->
			<div class="row testimonial-slider">
				@foreach ($testimonials as $testimonial)
                    <div class="col-lg-4">
                        <div class="testimonial-box">
                            <div class="client-img">
                                <img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }}" alt="images">
                                <span class="check"><i class="fal fa-check"></i></span>
                            </div>
                            <h3>{{ $testimonial->name ?? '' }}</h3>
                            <span class="clinet-post">{{ $testimonial->designation ?? '' }}</span>
                            <p>
                                {!! $testimonial->description ?? '' !!}
                            </p>
                        </div>
                    </div>
                @endforeach
				{{-- <div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="{{ asset('assets/img/testimonial/02.png') }}" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Donald H. Hilixer</h3>
						<span class="clinet-post">Founder, hilix</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="{{ asset('assets/img/testimonial/03.png') }}" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Browfish Dumble</h3>
						<span class="clinet-post">Founder, Condo</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-box">
						<div class="client-img">
							<img src="{{ asset('assets/img/testimonial/02.png') }}" alt="images">
							<span class="check"><i class="fal fa-check"></i></span>
						</div>
						<h3>Donald H. Hilixer</h3>
						<span class="clinet-post">Founder, hilix</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore.
						</p>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
	<!--====== TESTIMONIAL SLIDER END ======-->
	<!--====== ROOM Gallery CTA START ======-->
	<section class="room-gallery-cta" style="background-image: url({{ asset('assets/img/room-cta-gallery/bg.jpg') }});">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="cta-text text-center">
						<span>our rooms</span>
						<h2>
							Each of our nine lovely double guest rooms feature a private bath, wi-fi, cable television
							and include full breakfast.
						</h2>
						<ul class="mt-50">
							<li class="wow fadeInUp" data-wow-delay=".3s"><a class="main-btn btn-filled" href="#">take a
									tour</a></li>
							<li class=" wow fadeInUp" data-wow-delay=".5s"><a class="main-btn btn-border" href="#">Learn
									More</a></li>
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
	<!--====== LATEST NEWS START ======-->
	<section class="latest-news pt-115 pb-115">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-8 col-sm-7">
					<div class="section-title">
						<span class="title-tag">{{ title_banner_settings()->blog_section_subtitle }}</span>
						<h2>{{ title_banner_settings()->blog_section_title }}</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
					<div class="latest-post-arrow arrow-style text-right">

					</div>
				</div>
			</div>
			<!-- Latest post loop -->
			{{-- <div class="row latest-post-slider mt-80"> --}}
			<div class="row latest-post-slider mt-80">
				@foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="latest-post-box">
                            <div class="post-img" style="background-image: url({{ asset('uploads/blogs/'. $blog->image) }});"></div>
                            <div class="post-desc">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#!"><i class="fal fa-calendar-alt"></i>{{ $blog->created_at->format('d M Y') }}</a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="fal fa-user"></i>{{ $blog->createdBy->name ?? 'Admin' }}</a>
                                    </li>
                                </ul>
                                <h4><a href="{{ route('news.details', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                <p>
                                    {!! $blog->short_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
				{{-- <div class="col-lg-4">
					<div class="latest-post-box">
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
				<div class="col-lg-4">
					<div class="latest-post-box">
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
				<div class="col-lg-4">
					<div class="latest-post-box">
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
				<div class="col-lg-4">
					<div class="latest-post-box">
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
				<div class="col-lg-4">
					<div class="latest-post-box">
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
				</div> --}}
			</div>
		</div>
	</section>
	<!--====== LATEST NEWS END ======-->
@endsection

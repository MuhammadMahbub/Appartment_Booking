@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Place Details
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
            <div class="places-details">
                <div class="main-thumb mb-50">
                    <img src="{{ asset('assets/img/places/08.jpg') }}" alt="images">
                </div>
                <div class="title-wrap mb-50 d-flex align-items-center justify-content-between">
                    <div class="title">
                        <span class="place-cat">destination</span>
                        <h2>Miranda Halim Restaurent</h2>
                    </div>
                    <div class="link">
                        <a href="#">direction</a>
                    </div>
                </div>

                <p class="mb-25">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem totam rem aperiam, eaque ipsa quae ab illo inventore.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                    ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <div class="gallery mt-30 mb-60">
                    <div class="row">
                        <div class="col-sm-6 mt-30">
                            <img src="{{ asset('assets/img/places/09.jpg') }}" alt="Img">
                        </div>
                        <div class="col-sm-6 mt-30">
                            <img src="{{ asset('assets/img/places/10.jpg') }}" alt="Img">
                        </div>
                    </div>
                </div>
                <p class="mb-25">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                    ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                    dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                    error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem totam rem aperiam, eaque ipsa quae ab illo inventore.
                </p>
            </div>
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
                </div>
            </div>
        </div>
    </section>
    <!--====== PLACES CONTENT END ======-->

@endsection

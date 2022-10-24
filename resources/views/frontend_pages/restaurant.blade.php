@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Restaurant
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->restaurant_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->restaurant_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->restaurant_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Restaurant</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== RESTAURANT PART START ======-->
    <section class="restaurant-tab-area pt-120 pb-90">
        <div class="container">
            <ul class="restaurant-rood-list row justify-content-center nav nav-pills mb-30" id="restaurant-tab"
                role="tablist">
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-toggle="pill" href="#chicken">
                        <i class="flaticon-boiled"></i>
                        <span class="title">Chicken</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link active" data-toggle="pill" href="#italian">
                        <i class="flaticon-pizza"></i>
                        <span class="title">italian</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-toggle="pill" href="#coffee">
                        <i class="flaticon-coffee"></i>
                        <span class="title">coffee</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-toggle="pill" href="#bake-cake">
                        <i class="flaticon-cake"></i>
                        <span class="title">bake cake</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-toggle="pill" href="#cokkies">
                        <i class="flaticon-cookie"></i>
                        <span class="title">cokkies</span>
                    </a>
                </li>
                <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
                    <a class="nav-link" data-toggle="pill" href="#coctail">
                        <i class="flaticon-cocktail"></i>
                        <span class="title">coctail</span>
                    </a>
                </li>
            </ul>
            <!-- tab content -->
            <div class="tab-content " id="restaurant-tabContent">
                <div class="tab-pane fade" id="italian" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">Chicken</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="chicken" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">italian food</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="coffee" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coffee</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="bake-cake" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">bake cake</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="cokkies" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">cokkies</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="coctail" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/01.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/02.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/03.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="food-box">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/restu/04.jpg') }}" alt="images">
                                    <span class="price">$90</span>
                                </div>
                                <div class="desc">
                                    <a href="#" class="cat">coctail</a>
                                    <h4>4X Pan Pijja</h4>
                                    <a href="#" class="link"><i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== RESTAURANT PART END ======-->

    <!--====== MENU AREA START ======-->
    <section class="menu-area gradient-white pt-115 pb-115">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center mb-80">
                <span class="title-tag">available</span>
                <h2>Treanding Menu</h2>
            </div>
            <!-- Menu Looop -->
            <div class="menu-loop">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/01.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Eggs & Bacon</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".4s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/02.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Tea or Coffee</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".5s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/03.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Chia Oatmeal</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/04.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Juice</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".7s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/05.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Chia Oatmeal</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".3s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/06.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Fruit Parfait</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".4s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/07.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Marmalade Selection</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".5s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/08.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Cheese Platen</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".6s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/09.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Avocado Toast</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="single-menu-box wow fadeInUp" data-wow-delay=".7s">
                            <div class="menu-img" style="background-image: url({{ asset('assets/img/menu/10.jpg') }});">
                            </div>
                            <div class="menu-desc">
                                <h4><a href="#">Avocado Toast</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                </p>
                                <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== MENU AREA END ======-->

@endsection

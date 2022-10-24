<!DOCTYPE html>
<html class="loaded {{ themesettings(Auth::id())->theme }}" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Digital Tech">

    <title>@yield('title')</title>


    <link rel="apple-touch-icon" href="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->favicon }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/plugins/forms/pickers/form-pickadate.css') }}">
    <!--====== Flaticon css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />


    @yield('vendor.css')

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/themes/semi-dark-layout.css') }}">

    @yield('theme.css')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/css/pages/app-invoice-list.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"/> --}}

    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }
    </style>

    <style>
        trix-button-group.trix-button-group--file-tools {
            display: none;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none !important;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none !important;
            /* IE and Edge */
            scrollbar-width: none !important;
            /* Firefox */
        }

        .trix-button-group.trix-button-group--file-tools{
            display: none;
        }

        .button-group-spacing > *{
            margin: 3px;
        }

        @media screen and (min-width: 576px){
            .w-sm-auto{
                width: unset !important;
            }
        }
    </style>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

        @yield('css')

    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static menu-{{ themesettings(Auth::id())->nav }}" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item d-none d-lg-block">
                    <a id="dark" class="nav-link nav-link-style">
                        <i class="ficon" data-feather="moon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-notification mr-25 d-none">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="dropdown">
                        <i class="ficon" data-feather="bell"></i>
                        <span class="badge badge-pill badge-danger badge-up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar">
                                            <img src="{{ asset('dashboard_assets/app-assets/images/portrait/small/avatar-s-15.jpg') }}" alt="avatar" width="32" height="32">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge. </small>
                                    </div>
                                </div>
                            </a>
                            <div class="media d-flex align-items-center">
                                <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                <div class="custom-control custom-control-primary custom-switch">
                                    <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="custom-control-label" for="systemNotification"></label>
                                </div>
                            </div>
                            <a class="d-flex" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                    <div class="media-left">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">
                                            <span class="font-weight-bolder">Server down</span>&nbsp;registered
                                        </p>
                                        <small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder">{{ ucfirst(Auth::user()->name) }}</span>
                            <span class="user-status">Admin</span>
                        </div>
                        <span class="avatar">
                            <img class="round" src="{{ Auth::user()->profile_photo_url }}" alt="Profile Photo" height="40" width="40">
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ url('user/profile') }}"><i class="mr-50" data-feather="user"></i> Profile</a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="mr-50" data-feather="power"></i>Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center">
            <a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a>
        </li>
        <li class="auto-suggestion">
            <a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a>
        </li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start">
                    <span class="mr-75" data-feather="alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <span>
                            <img src="{{ asset('uploads/generalSettings') }}/{{ generalSettings()->logo }}" style="max-width: 30px" alt="Logo">
                        </span>
                        <h2 class="brand-text">SoClose</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a id="toggle" class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ url('/') }}">
                        <i data-feather='eye'></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboards">View Website</span>
                    </a>
                </li>
                <li class="nav-item @yield('dashboard')">
                    <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                        <i data-feather='database'></i>
                        <span class="menu-title text-truncate" data-i18n="Email">Dashboard</span>
                    </a>
                </li>

                <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Users</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('usersList')">
                            <a class="d-flex align-items-center" href="{{ route('users.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="@yield('usersCreate')">
                            <a class="d-flex align-items-center" href="{{ route('users.create') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @yield('banner')">
                    <a class="d-flex align-items-center" href="{{ route('banner.index') }}">
                        <i data-feather='flag'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Banner</span>
                    </a>
                </li>

                <li class="nav-item @yield('about')">
                    <a class="d-flex align-items-center" href="#!">
                        <i data-feather='figma'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">About</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('about')">
                            <a class="d-flex align-items-center" href="{{ route('about.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">About</span>
                            </a>
                        </li>
                        <li class="@yield('about_feature')">
                            <a class="d-flex align-items-center" href="{{ route('about_feature.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">About Feature</span>
                            </a>
                        </li>
                        <li class="@yield('about_facility')">
                            <a class="d-flex align-items-center" href="{{ route('about_facility.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">About Facility</span>
                            </a>
                        </li>
                        <li class="@yield('about_counter')">
                            <a class="d-flex align-items-center" href="{{ route('about_counter.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">About Counter</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @yield('room')">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='home'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Rooms</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('roomList')">
                            <a class="d-flex align-items-center" href="{{ route('room.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">List</span>
                            </a>
                        </li>
                        <li class="@yield('roomCreate')">
                            <a class="d-flex align-items-center" href="{{ route('room.create') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Create</span>
                            </a>
                        </li>
                        {{-- <li class="@yield('roomPhoto')">
                            <a class="d-flex align-items-center" href="{{ route('roomphoto.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Room Photos</span>
                            </a>
                        </li> --}}
                        <li class="@yield('roomType')">
                            <a class="d-flex align-items-center" href="{{ route('roomtype.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Room Type</span>
                            </a>
                        </li>
                        {{-- <li class="@yield('bedType')">
                            <a class="d-flex align-items-center" href="{{ route('bedtype.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Bed Type</span>
                            </a>
                        </li> --}}
                        <li class="@yield('amenity')">
                            <a class="d-flex align-items-center" href="{{ route('amenity.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Amenity</span>
                            </a>
                        </li>
                        <li class="@yield('rule')">
                            <a class="d-flex align-items-center" href="{{ route('rule.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Add">Rule</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather='coffee'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Food</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item">
                            <a class="d-flex align-items-center" href="#">
                                <i data-feather='user-check'></i>
                                <span class="menu-title text-truncate" data-i18n="Invoice">Food</span>
                            </a>
                            <ul class="menu-content">
                                <li class="@yield('foodList')">
                                    <a class="d-flex align-items-center" href="{{ route('food.index') }}">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">Food List</span>
                                    </a>
                                </li>
                                <li class="@yield('foodCreate')">
                                    <a class="d-flex align-items-center" href="{{ route('food.create') }}">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">Food Create</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center" href="#">
                                <i data-feather='user-check'></i>
                                <span class="menu-title text-truncate" data-i18n="Invoice">Food Type</span>
                            </a>
                            <ul class="menu-content">
                                <li class="@yield('foodtype')">
                                    <a class="d-flex align-items-center" href="{{ route('foodtype.index') }}">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">Food Type</span>
                                    </a>
                                </li>
                                <li class="@yield('foodtypeCreate')">
                                    <a class="d-flex align-items-center" href="{{ route('foodtype.create') }}">
                                        <i data-feather="circle"></i>
                                        <span class="menu-item text-truncate" data-i18n="List">Create Food Type</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Clients & Teams</span>
                    <i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item @yield('contacts')">
                    <a class="d-flex align-items-center" href="{{ route('contacts.index') }}">
                        <i data-feather='user-plus'></i>
                        <span class="menu-title text-truncate">Contacts</span>
                    </a>
                </li>
                <li class="nav-item @yield('subscribers')">
                    <a class="d-flex align-items-center" href="{{ route('subscribers.index') }}">
                        <i data-feather='user-check'></i>
                        <span class="menu-title text-truncate">Subcribers</span>
                    </a>
                </li>
                <li class="nav-item @yield('testimonial')">
                    <a class="d-flex align-items-center" href="{{ route('testimonial.index') }}">
                        <i data-feather='users'></i>
                        <span class="menu-title text-truncate">Testimonials</span>
                    </a>
                </li>

                <li class="navigation-header"><span data-i18n="Apps &amp; Pages">Blog</span><i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#!">
                        <i data-feather='bold'></i>
                        <span class="menu-title text-truncate">Blog</span>
                    </a>
                    <ul class="menu-content">
                        <li class="@yield('blog')">
                            <a class="d-flex align-items-center" href="{{ route('blogs.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">Blog</span>
                            </a>
                        </li>
                        <li class="@yield('blogCategory')">
                            <a class="d-flex align-items-center" href="{{ route('blog_category.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="List">Blog Category</span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Site Settings --}}
                <li class="navigation-header">
                    <span data-i18n="Apps &amp; Pages">Site Settings</span>
                    <i data-feather="more-horizontal"></i>
                </li>

                <li class="nav-item @yield('title_banner')">
                    <a class="d-flex align-items-center" href="{{ route('title_banner.index') }}">
                        <i data-feather='type'></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Title & Banner</span>
                    </a>
                </li>

                <li class="nav-item @yield('generalSettings')">
                    <a class="d-flex align-items-center" href="{{ route('generalSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">General Settings</span>
                    </a>
                </li>
                <li class="nav-item @yield('colorSettings')">
                    <a class="d-flex align-items-center" href="{{ route('colorSettings.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">Color Settings</span>
                    </a>
                </li>
                <li class="nav-item @yield('socialurls')">
                    <a class="d-flex align-items-center" href="{{ route('socialurls.index') }}">
                        <i data-feather='settings'></i>
                        <span class="menu-title text-truncate">Social Urls</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('breadcrumb')
                            {{-- <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Layouts</a>
                                    </li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block">
                    <div class="form-group breadcrumb-right">

                    </div>
                </div>
            </div>
            <div class="content-body">
                {{-- Content Start From Here --}}
                    @yield('content')
                {{-- Content End Here --}}
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="#" target="_blank">SoClose</a>
                <span class="d-none d-sm-inline-block">, All rights Reserved</span>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @stack('all_modals')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-validation.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/form-select2.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/app-assets/js/scripts/forms/pickers/form-pickers.js') }}"></script>


    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('dashboard_assets/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->
    <!-- END: Page JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('dashboard_assets/app-assets/js/core/app-menu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js"></script> --}}
    <!-- BEGIN: Page JS-->

    @yield('js')

    <script>
        $('#data_table').dataTable({
        "bProcessing": false,
        "sAutoWidth": false,
        "bDestroy":false,
        "bSort":true,
        "sPaginationType": "bootstrap", // full_numbers
        // "iDisplayStart ": 10,
        // "iDisplayLength": 10,
        "bPaginate": false, //hide/show pagination
        "bFilter": true, //hide/show Search bar
        "bInfo": false, // hide/show showing entries
     })
    </script>
    <!-- DataTable Script-->
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>

    <script>
        $(document).ready(function(){
            $('.data_table').dataTable({
                "bProcessing": false,
                "sAutoWidth": false,
                "bDestroy":false,
                "bSort":true,
                "sPaginationType": "bootstrap", // full_numbers
                // "iDisplayStart ": 10,
                // "iDisplayLength": 10,
                "bPaginate": false, //hide/show pagination
                "bFilter": true, //hide/show Search bar
                "bInfo": false, // hide/show showing entries
            });

            $('.data_table--without-sort').dataTable({
                "bProcessing": false,
                "sAutoWidth": false,
                "bDestroy":false,
                "bSort":false,
                "sPaginationType": "bootstrap", // full_numbers
                // "iDisplayStart ": 10,
                // "iDisplayLength": 10,
                "bPaginate": false, //hide/show pagination
                "bFilter": true, //hide/show Search bar
                "bInfo": false, // hide/show showing entries
            });
        })
    </script>

    <script>
        $(document).ready(function(){
            $('#dark').click(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('theme.color') }}",
                    type: "GET",
                    success: function(data)
                    {
                    }
                })
            });
        })

    </script>
    <script>
        $(document).ready(function(){
            $('#toggle').click(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('theme.toggle') }}",
                    type: "GET",
                    success: function(data)
                    {
                    }
                })
            });
        })

    </script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <!-- Inner Table Dropdown probolem solve functions -->
    <script>
        $(document).ready(function() {
            $('table').on('shown.bs.dropdown', function (e){
                $(this).closest('[class*="col"]').addClass("position-static")
            });
            $('table').on('hide.bs.dropdown', function () {
                $(this).closest('[class*="col"]').removeClass("position-static")
            });
        });
    </script>

</body>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

@if(session()->get('error'))
    <script>
        toastr.error('{{ session()->get('error') }}');
    </script>
@endif

@if(session()->get('danger'))
    <script>
        toastr.error('{{ session()->get('danger') }}');
    </script>
@endif

@if(session()->get('success'))
    <script>
        toastr.success('{{ session()->get('success') }}');
    </script>
@endif

<!-- END: Body-->

</html>

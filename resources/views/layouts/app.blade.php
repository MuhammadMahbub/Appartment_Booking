<!DOCTYPE html>
<html lang="en">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--====== Title ======-->
	<title> @yield('title') </title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->favicon }}" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
	<!--====== Owl Carousel css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
	<!--====== Nice Select ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
	<!--====== Bootstrap Datepicker ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}" />
	<!--====== Default css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/default.css') }}" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/app-assets/vendors/css/extensions/toastr.min.css') }}">

    @yield('css')

</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--====== PRELOader ======-->
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="cssload-container">
			<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
		</div>
	</div>
	<!--====== HEADER START ======-->
	<header class="header-absolute sticky-header">
		<div class="container container-custom-one">
			<div class="nav-container d-flex align-items-center justify-content-between">
				<!-- Main Menu -->
				<div class="nav-menu d-lg-flex align-items-center">

					<!-- Navbar Close Icon -->
					<div class="navbar-close">
						<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
					</div>

					<!-- Off canvas Menu  -->
					<div class="toggle">
						<a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
					</div>
					<!-- Mneu Items -->
					<div class="menu-items">
						<ul>
							<li>
								<a href="{{ route('home') }}">Home</a>
							</li>
							<li>
								<a href="{{ route('rooms') }}">Rooms</a>
								<ul class="submenu">
									<li><a href="{{ route('rooms') }}">Room List</a></li>
									{{-- <li><a href="{{ route('room.details') }}">Room Details</a></li> --}}
								</ul>
							</li>
							<li>
								<a href="{{ route('news') }}">News</a>
								{{-- <ul class="submenu">
									<li><a href="{{ route('news.details') }}">News Details</a></li>
								</ul> --}}
							</li>
							<li><a href="{{ route('contact') }}">Contact</a></li>
						</ul>
					</div>

					<!-- from pushed-item -->
					<div class="nav-pushed-item"></div>
				</div>

				<!-- Site Logo -->
				<div class="site-logo">
					<a href="{{ route('home') }}"><img src="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->front_logo }}" alt="Logo"></a>
				</div>

				<!-- Header Info Pussed To Menu Wrap -->
				<div class="nav-push-item">
					<!-- Header Info -->
					<div class="header-info d-lg-flex align-items-center">
						<div class="item">
							{!! generalsettings()->phone_icon !!}
							<span>{{ generalsettings()->phone_title }}</span>
							<a href="#!">
								<h5 class="title">{{ generalsettings()->phone }}</h5>
							</a>
						</div>
						<div class="item">
							{!! generalsettings()->email_icon !!}
							<span>{{ generalsettings()->email_title }}</span>
							<a href="#!">
								<h5 class="title">{{ generalsettings()->email }}</h5>
							</a>
						</div>
					</div>
				</div>

				<!-- Navbar Toggler -->
				<div class="navbar-toggler">
					<span></span><span></span><span></span>
				</div>
			</div>
		</div>
	</header>
	<!--====== HEADER PART END ======-->
	<!--====== OFF CANVAS START ======-->
	<div class="offcanvas-wrapper">
		<div class="offcanvas-overly"></div>
		<div class="offcanvas-widget">
			<a href="#" class="offcanvas-close"><i class="fal fa-times"></i></a>
			<!-- Search Widget -->
			<div class="widget search-widget">
				<h5 class="widget-title">Search room</h5>
				<form action="#">
					<input type="text" placeholder="Search your keyword...">
					<button type="submit"><i class="far fa-search"></i></button>
				</form>
			</div>

			<!-- About Widget -->
			<div class="widget about-widget">
				<h5 class="widget-title">About us</h5>
				<p>{{ aboutus()->short_description }}</p>
			</div>
			<!-- Nav Widget -->
			<div class="widget nav-widget">
				<h5 class="widget-title">Our pages</h5>
				<ul>
					<li><a href="{{ route('about.us') }}">About Us</a></li>
					<li><a href="{{ route('food.menu') }}">Food Menu</a></li>
					<li><a href="{{ route('restaurant') }}">Restaurant</a></li>
					<li>
						<a href="{{ route('places') }}">Places</a>
						<ul class="submenu">
							<li><a href="{{ route('place.details') }}">Places Details</a></li>
						</ul>
					</li>
					<li><a href="{{ route('offers') }}">Offers</a></li>
					<li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                    <li><a href="{{ route('search.result') }}">Search Result</a></li>
                    <li><a href="{{ route('booking.now') }}">Booking</a></li>
				</ul>
			</div>
			<!-- Social Link -->
			<div class="widget social-link">
				<h5 class="widget-title">Contact with us</h5>
				<ul>
					<li><a href="{{ socialurls()->fb_url }}"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="{{ socialurls()->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
					<li><a href="{{ socialurls()->behance_url }}"><i class="fab fa-behance"></i></a></li>
					<li><a href="{{ socialurls()->linkedin_url }}"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="{{ socialurls()->youtube_url }}"><i class="fab fa-youtube"></i></a></li>
					{{-- <li><a href="{{ socialurls()->youtube_url }}"><i class="fab fa-google"></i></a></li> --}}
				</ul>
			</div>
		</div>
	</div>
	<!--====== OFF CANVAS END ======-->

    <!-- Content Part Start -->
        @yield('content')
    <!-- Content Part End -->

    <!--====== Back to Top ======-->
	<a href="#" class="back-to-top" id="backToTop">
		<i class="fal fa-angle-double-up"></i>
	</a>
	<!--====== FOOTER PART START ======-->
	<footer>
		<div class="footer-subscibe-area pt-120 pb-120">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="subscribe-text text-center">
							<div class="footer-logo mb-45">
								<img src="{{ asset('uploads/generalSettings') }}/{{ generalsettings()->front_logo }}" alt="images">
							</div>
							<p>
								{{generalsettings()->footer_description}}
							</p>
							<form action="#" class="subscribe-form mt-50">
								<input type="email" id="subscriber_email" name="email" placeholder="Enter your email address">
								<button type="button" id="subscribe_us">subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area pt-20 pb-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5 order-2 order-md-1">
						<p class="copyright-text">{{ generalsettings()->cppyright }}</p>
					</div>
					<div class="col-md-7 order-1 order-md-2">
						<div class="social-links">
							<a href="{{ socialurls()->fb_url }}"><i class="fab fa-facebook-f"></i></a>
							<a href="{{ socialurls()->twitter_url }}"><i class="fab fa-twitter"></i></a>
							<a href="{{ socialurls()->behance_url }}"><i class="fab fa-behance"></i></a>
							<a href="{{ socialurls()->linkedin_url }}"><i class="fab fa-linkedin"></i></a>
							<a href="{{ socialurls()->youtube_url }}"><i class="fab fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART END ======-->
	<!--====== jquery js ======-->
	<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<!--====== Bootstrap js ======-->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!--====== Slick js ======-->
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<!--====== Isotope js ======-->
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<!--====== Magnific Popup js ======-->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!--====== inview js ======-->
	<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
	<!--====== counterup js ======-->
	<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
	<!--====== Nice Select ======-->
	<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
	<!--====== Bootstrap datepicker ======-->
	<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
	<!--====== Wow JS ======-->
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<!--====== Google Map ======-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
	<script src="{{ asset('assets/js/map.js') }}"></script>
    {{-- toastr --}}
    <script src="{{ asset('dashboard_assets/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
	<!--====== Main js ======-->
	<script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('js')

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

<script>
    $(document).ready(function () {
        $('#subscribe_us').click(function (e) {
            e.preventDefault();

            let email = $('#subscriber_email').val();
            // alert(email)
            function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
            }

            if(email == '')
            {
                toastr.error('Please Enter Email')
            }
            if(email != '')
            {
                if(!isValidEmailAddress(email))
                {
                    toastr.error('Please Enter valid Email')
                }
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('subscribers.store') }}",
                type: "POST",
                data: {
                    email: email,
                },
                success: function(data){
                    if(data.success == '200'){
                        toastr.success(data.message);
                        $('#subscriber_email').val('');
                    }else{
                        toastr.error(data.message);
                        $('#subscriber_email').val('');
                    }

                },

            });

        });
    });
</script>

</body>

</html>

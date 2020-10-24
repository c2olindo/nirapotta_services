<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Nirapotta Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugin/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugin/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blueimp-gallery.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color2.css') }}">
</head>


<body>
    <div class="wrapper">
        <!-- Navigation -->
        <header class="style2">
            <div class="container">
                <div class="top_header">
                    <ul class="contact-info">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <span>info@nirapottaservices.com</span>
                        </li>
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <span>61, R.K Mission Rd, Gopibag, Dhaka</span>
                        </li>
                    </ul>
                    <!--  Social Links -->
                    <ul class="social-links">
                        <li>
                            <a href="home" title=""><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="home" title=""><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="home" title=""><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!--top_header end-->
                <div class="bottom_header">
                    <div class="header-content">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo2.png') }}" alt="">
                            </a>
                        </div><!--logo end-->
                        <a href="home" title="" class="menu-btn"><i class="fa fa-bars"></i></a>
                        <nav>
                            <ul>
                                <li><a class="{{ activeNavigation('/') }}" href="{{ url('/') }}" title="">Home</a></li>
                                <li><a class="{{ activeNavigation('about') }}" href="{{ url('about') }}" title="">About</a></li>
                                <li><a class="{{ activeNavigation('services') }}" href="{{ url('services') }}" title="">Services</a></li>
                                <li><a class="{{ activeNavigation('team') }}" href="{{ url('team') }}" title="">Team</a></li>
                                <li><a class="{{ activeNavigation('contact') }}" href="{{ url('contact') }}" title="">Contact</a></li>
                            </ul>
                        </nav><!--navigation end-->
                        <a href="{{ url('contact') }}" title="" class="quote-btn">Get A Quote</a>
                        <div class="clearfix"></div>
                    </div><!--header-content end-->
                </div><!--bottom_header end-->
            </div>
        </header>

        <!-- mobile naviagtion -->
        <div class="mobile-menu">
			<ul>
				<li><a class="{{ activeNavigation('/') }}" href="{{ url('/') }}" title="">Home</a></li>
				<li><a class="{{ activeNavigation('about') }}" href="{{ url('about') }}" title="">About</a></li>
				<li><a class="{{ activeNavigation('services') }}" href="{{ url('services') }}" title="">Services</a></li>
				<li><a class="{{ activeNavigation('team') }}" href="{{ url('team') }}" title="">Team</a></li>
				<li><a class="{{ activeNavigation('contact') }}" href="{{ url('contact') }}" title="">Contact</a></li>
			</ul>
		</div><!--mobile-menu end-->

        @yield('content')

        <footer>
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="widget widget-about">
								<img src="{{ asset('assets/images/logo2.png') }}" alt="">
								<p>Security as a topic has continued to rise in popularity in the recent couple of years, and it comes as a no surprise.</p>
								<p>Security and privacy are two sides of the same coin. You can’t have privacy without security and vice versa.</p>
							</div><!--widget-about end-->
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="widget widget-services">
								<h3 class="widget-title">Services</h3>
								<ul>
									<li><i class="fa fa-map-marker-alt"></i> <span>61, R.K Mission Rd, Gopibag, Dhaka</span></li>
									<li><i class="fa fa-envelope"></i> <span>info@nirapottaservices.com</span></li>
									<li><i class="fa fa-phone-volume"></i> <span>+880167354664</span></li>
								</ul>
							</div><!--widget-services end-->
						</div>
						<div class="col-lg-4">
							<div class="widget widget-social">
								<h3 class="widget-title">Follow Us</h3>
								<ul class="socio-links">
									<li><a href="index2.html#" title=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="index2.html#" title=""><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div><!--widget-social end-->
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-strip">
				<div class="container">
					<div class="copyright-text">
						<p>Copyright © 2020, Nirapotta Services. All Right Reserved. Developed by Buzzfrog</p>
						<a href="{{ url('/') }}" title="" class="scrollUp"><i class="fa fa-level-up-alt"></i></a>
					</div>
				</div>
			</div>
		</footer><!--footer end-->

    </div>


<script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
<script src=" {{ asset('assets/js/popper.js') }}"></script>
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/slick.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/waypoint.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/jquery.counterup.min.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/blueimp-gallery.min.js') }}"></script>
<script src=" {{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src=" {{ asset('assets/js/validator.js') }}"></script>
<script src=" {{ asset('assets/js/plugin/html5lightbox.js') }}"></script>
<script src=" {{ asset('assets/js/script.js') }}"></script>

</body>

</html>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
    <title>Skilledd - HR Recruiting Agency </title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{URL::asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/animations.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/css/main.css')}}">
    <script src="{{URL::asset('front/js/vendor/modernizr-2.6.2.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="{{URL::asset('front/js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{URL::asset('front/js/vendor/respond.min.js')}}"></script>
    <script src="{{URL::asset('front/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <!--eof topline-->
        <section class="page_toplogo ls s-py-15 text-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </section>
        <section class="page_toplogo ls s-py-15 text-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="d-lg-flex justify-content-lg-end align-items-lg-center">
								<span class="social-icons top">

									<a href="#" class="fa fa-facebook " title="facebook"></a>
									<a href="#" class="fa fa-twitter " title="twitter"></a>
									<a href="#" class="fa fa-google " title="google"></a>
									<a href="#" class="fa fa-linkedin " title="linkedin"></a>
									<a href="#" class="fa fa-pinterest-p " title="linkedin"></a>
								</span>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="text-center">
                            <div class="header_logo_center">
                                <a href="index.html" class="logo">
                                    <span class="logo_text">Skilledd</span>
                                    <img src="{{URL::asset('front/images/logo.png')}}" alt="">
                                    <span class="logo_subtext">consult</span>
                                </a>
                            </div>
                            <!-- eof .header_left_logo -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn-outline-darkgrey  d-none d-lg-block">Looking for Staff?</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
        <header class="page_header ls s-bordertop nav-narrow justify-nav-center text-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-12">

                        <div class="nav-wrap">
                            <!-- main nav start -->
                            <nav class="top-nav">
                                <ul class="nav sf-menu">

                                    <li>
                                        <a href="{{route('home')}}">Homepage</a>
                                    </li>
                                    <!-- eof pages -->
                                    <li >
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="active">
                                        <a href="{{route('gallery')}}">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{route('candidate')}}">Candidates</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contacts</a>

                                    </li>
                                </ul>


                            </nav>
                            <!-- eof main nav -->


                        </div>

                    </div>
                </div>
            </div>

            <!-- header toggler -->

            <span class="toggle_menu">
					<span></span>
				</span>

        </header>

        <section class="page_title cs gradientvertical-background s-py-25">
            <div class="container">
                <div class="row">

                    <div class="divider-50"></div>

                    <div class="col-md-12 text-center">
                        <h1 class="">Gallery Tiled</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Gallery Tiled
                            </li>
                        </ol>
                    </div>

                    <div class="divider-50"></div>

                </div>
            </div>
        </section>


        <section class="ls s-pt-15 s-pb-50 pb-10 container-px-0">
            <div class="container-fluid">
                <div class="row">

                    <div class="d-none d-lg-block divider-100"></div>

                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-xl-8">
                                <div class="filters gallery-filters text-lg-right">
                                    <a href="#" data-filter="*" class="active selected">All</a>
                                    <a href="#" data-filter=".corporate">Corporate</a>
                                    <a href="#" data-filter=".business">Business</a>
                                    <a href="#" data-filter=".entertainment">Entertainment</a>
                                    <a href="#" data-filter=".innovations">Innovations</a>
                                    <a href="#" data-filter=".news">News</a>
                                </div>
                            </div>
                        </div>


                        <div class="row isotope-wrapper masonry-layout c-gutter-0" data-filters=".gallery-filters">


                            <div class="col-xl-4 col-sm-6 corporate">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-10.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-10.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 entertainment innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-01.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-01.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 news business">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-03.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-03.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 innovations news">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-04.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-04.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 corporate innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-05.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-05.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 business innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-06.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-06.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 entertainment news">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-11.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-11.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 entertainment innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-08.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-08.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 news business">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-09.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-09.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 entertainment corporate">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-12.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-12.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 innovations business">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-13.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-13.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 business news">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-07.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/12.html"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 corporate innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-02.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-02.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 corporate innovations">
                                <div class="vertical-item item-gallery content-absolute text-center ds">
                                    <div class="item-media">
                                        <img src="images/gallery/gallery-14.jpg" alt="">
                                        <div class="media-links">
                                            <div class="links-wrap">
                                                <a class="link-zoom photoswipe-link" href="images/gallery/gallery-14.jpg"></a>
                                                <a class="link-anchor" title="" href="gallery-single.html"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-content gradientdarken-background">
                                        <h4>
                                            <a href="gallery-single.html">Consetetur sadipscing elitr, sed diam nonumy</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- .isotope-wrapper-->

                        <div class="row gallery-tiled">
                            <div class="col-sm-12 text-center">
                                <a href="#" class="btn btn-outline-darkgrey">Load More</a>
                            </div>
                        </div>

                    </div>

                    <div class="d-none d-lg-block divider-100"></div>
                </div>

            </div>
        </section>

        <footer class="page_footer ds s-py-sm-20 s-pt-md-75 s-pb-md-50 s-py-lg-130 c-gutter-60 pb-20 half-section">
            <div class="container">
                <div class="row">
                    <div class="footer col-md-4 text-center animate" data-animation="fadeInUp">
                        <div class="footer widget text-center">
                            <h3 class="widget-title title-menu">Explore</h3>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">Job Search</a>
                                </li>
                                <li class="menu1">
                                    <a>Consultants</a>
                                </li>
                                <li>
                                    <a href="#">Reviews</a>
                                </li>
                                <li class="menu1">
                                    <a>Insights</a>
                                </li>
                                <li>
                                    <a href="#">Survey</a>
                                </li>
                                <li class="menu1">
                                    <a>Careers</a>
                                </li>
                                <li class="border-bottom-0">
                                    <a href="#">Contact</a>
                                </li>
                                <li class="menu1 border-bottom-0">
                                    <a>About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer  col-md-4 text-center animate" data-animation="fadeInUp">
                        <div class="text-center">
                            <div class="header_logo_center footer-logo-ds">
                                <a href="index.html" class="logo">
                                    <span class="logo_text">Skilledd</span>
                                    <img src="{{URL::asset('front/images/logo.png')}}" alt="">
                                    <span class="logo_subtext">Consult</span>
                                </a>
                            </div>
                            <!-- eof .header_left_logo -->
                        </div>
                        <div class="widget pt-20">
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.
                        </div>
                        <div class="widget">
                            <div class="media">
                                <i class="mx-10 color-main fa fa-map-marker"></i>
                                4518 Spirit Drive, Deland, FL 32720
                            </div>

                            <div class="media">
                                <i class="mx-10 color-main fa fa-phone"></i>
                                101 123 456 789
                            </div>

                            <div class="media text-center link">
                                <i class="mx-10 text-center color-main fa fa-envelope"></i>
                                <a href="#">example@example.com</a>
                            </div>
                        </div>

                        <div class="author-social">
                            <a href="#" class="fa fa-facebook color-bg-icon rounded-icon"></a>
                            <a href="#" class="fa fa-twitter color-bg-icon rounded-icon"></a>
                            <a href="#" class="fa fa-google color-bg-icon rounded-icon"></a>
                        </div>
                    </div>
                    <div class="footer col-md-4 text-center animate" data-animation="fadeInUp">
                        <div class="widget widget_mailchimp">

                            <h3 class="widget-title">Newsletter</h3>

                            <p>
                                Enter your email address here always to be updated. We promise not to spam!
                            </p>

                            <form class="signup">
                                <label for="mailchimp_email">
                                    <span class="screen-reader-text">Subscribe:</span>
                                </label>

                                <input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Email Address">

                                <button type="submit" class="search-submit">Subscribe</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <section class="page_copyright ds s-py-30 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="divider-20 d-none d-lg-block"></div>
                    <div class="col-md-12 text-center">
                        <p>&copy; Copyright
                            <span class="copyright_year">2018</span> All Rights Reserved</p>
                    </div>
                    <div class="divider-20 d-none d-lg-block"></div>
                </div>
            </div>
        </section>


    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->


<script src="{{URL::asset('front/js/compressed.js')}}"></script>
<script src="{{URL::asset('front/js/main.js')}}"></script>
<!-- Google Map Script -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>

</body>
</html>
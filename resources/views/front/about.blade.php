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
                                    <li class="active">
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li>
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
                        <h1 class="">About</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>

                            <li class="breadcrumb-item active">
                                About
                            </li>
                        </ol>
                    </div>

                    <div class="divider-50"></div>

                </div>
            </div>
        </section>


        <section class="ls about about-padge s-pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
                        <div class="heading-about">
                            <h2>
                                HR
                            </h2>
                            <h4>
                                Welcome to
                            </h4>
                            <h3>
                                Skilledd!
                            </h3>
                            <p>
                                We believe in the value that our functions add to a business.
                                We feel that this specialist part of HR is often unrecognised for its contribution to the profitability and success of a business.
                            </p>
                        </div>
                        <div class="icons-list">
                            <ul class="list-bordered">
                                <li class=" media media-body">
                                    <i class="teaser-icon fa fa-rocket"></i>
                                    <h4 class="title">
                                        <span>638</span> Companies We Helped
                                    </h4>
                                </li>
                                <li class="media media-body">
                                    <i class="teaser-icon fa fa-briefcase"></i>
                                    <h4 class="title">
                                        <span>12</span> Corporate Programs
                                    </h4>
                                </li>
                                <li class="media media-body">
                                    <i class="teaser-icon fa fa-graduation-cap"></i>
                                    <h4 class="title">
                                        <span>28</span> Trainings Courses
                                    </h4>
                                </li>
                                <li class="border-bottom-0 media media-body">
                                    <i class="teaser-icon fa fa-user"></i>
                                    <h4 class="title">
                                        <span>125</span> Strategic Partners
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
                        <img src="images/person01.jpg" alt="person01.jpg">
                    </div>
                </div>
            </div>
        </section>

        <section class="icon-boxed teaser-box ls s-py-lg-130 c-my-lg-10 s-parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 animate" data-animation="pullUp">
                        <div class="icon-box text-center hero-bg box-shadow">
                            <div class="teaser-icon icon-styled bg-maincolor3">
                                <i class="fa fa-unlock-alt"></i>
                            </div>
                            <h3>
                                <a href="#">Highly Secure</a>
                            </h3>
                            <p>
                                Cloud-based services can offer our customers single tenant dedicated environments
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 animate" data-animation="pullUp">
                        <div class="icon-box text-center hero-bg box-shadow">
                            <div class="teaser-icon icon-styled bg-maincolor3">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <h3>
                                <a href="#">True Cloud Scal</a>
                            </h3>
                            <p>
                                Working with customers making 100-40,000 hires per annum
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 animate" data-animation="pullUp">
                        <div class="icon-box text-center hero-bg box-shadow">
                            <div class="teaser-icon icon-styled bg-maincolor3">
                                <i class="fa fa-database"></i>
                            </div>
                            <h3>
                                <a href="#">Accurate Data</a>
                            </h3>
                            <p>
                                All of our customers' data is validated. We build accurate data banks for reporting
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ls collapse-section about">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image_cover image_cover_left half-image">
                    </div>
                </div>
                <div class="col-lg-6 collapse-table">
                    <div class="contact-header collapse-header heading pt-30">
                        <h5>
                            Receiving
                        </h5>
                        <h4>
                            A job offer
                        </h4>
                    </div>
                    <div id="accordion01" role="tablist">
                        <div class="card-header" role="tab" id="collapse01_header">
                            <h5>
                                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                    Be decisive
                                </a>
                            </h5>
                        </div>
                        <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                            <div class="card-body">
                                Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                            </div>
                        </div>
                        <div class="card-header" role="tab" id="collapse02_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                    Or take your time
                                </a>
                            </h5>
                        </div>
                        <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                            <div class="card-body">
                                Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                            </div>
                        </div>
                        <div class="card-header" role="tab" id="collapse03_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                    Resign
                                </a>
                            </h5>
                        </div>
                        <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                            <div class="card-body">
                                Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                            </div>
                        </div>


                        <div class="card-header" role="tab" id="collapse04_header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                    Counter offers
                                </a>
                            </h5>
                        </div>
                        <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                            <div class="card-body">
                                Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                            </div>
                        </div>
                    </div>
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

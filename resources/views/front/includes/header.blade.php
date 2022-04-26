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
            <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-earth"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                    <h6 class="dropdown-header">{{config('app.locale')}}</h6>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </div>

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
            <div class="col-lg-4" style="display: flex;flex-direction: row-reverse; margin-left: -110px;height: 69px;">
                <a class="btn-outline-darkgrey  d-none d-lg-block" style="margin-left:-1px;width:120px;"href="{{route('hire')}}">Looking for Staff?</a>
                <a class="btn-outline-darkgrey  d-none d-lg-block" href="{{route('candidate')}}">Looking for Job?</a>
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

                            <li class="active">
                                <a href="{{route('home')}}">{{__('nav.home')}}</a>
                            </li>
                            <!-- eof pages -->
                            <li>
                                <a href="{{route('about')}}">{{__('nav.about')}}</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="{{route('gallery')}}">Gallery</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="{{route('candidate')}}">{{__('nav.candidate')}}</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">{{__('nav.contact')}}</a>
                            </li>
                            <li>
                                <a href="{{route('hire')}}">{{__('nav.hire')}}</a>
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

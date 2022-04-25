<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('ssets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{URL::asset('ssets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('ssets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('ssets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('ssets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('dashboard.includes.aside')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="{{route('dashboard.home')}}"><img src="{{URL::asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="{{route('home')}}">
                            <i class="mdi mdi-view-grid"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="{{URL::asset('assets/images/faces/face15.jpg')}}" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->name}}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" >
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">{{ __('Logout') }}</p>
                                </div>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->

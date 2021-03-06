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
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{route('dashboard.home')}}"><img src="{{URL::asset('assets/images/logo.svg')}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{route('dashboard.home')}}"><img src="{{URL::asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{URL::asset('assets/images/faces/face15.jpg')}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                            <span>{{Auth::user()->email}}</span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard.home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard.users.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard.mycontact')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Messages</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard.mycandidate')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Candidate</span>
                </a>
            </li>
            <li class="nav-item menu-items active">
                <a class="nav-link" href="{{route('dashboard.admins.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Admins</span>
                </a>
            </li>
        </ul>
    </nav>
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
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create New User</h4>
                                <p class="card-description"> Sign Up </p>
                                <form action="{{route('dashboard.posts.store')}}" method="POST" enctype="multipart/form-data"  class="card-body">
                                    @csrf

                                    <div class="form-group" dir='rtl'>
                                        <input type="text" class="form-control" name='content' value="{{old('content')}}" id="title" placeholder="Enter content">
{{--                                        <textarea class="form-control tinymce" name='content' id="content" placeholder="??????????????">{{old('content')}}</textarea>--}}
                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                        @enderror
                                    </div>
                                    <section class="form-content">
                                        <section class="seo-form">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name='title' value="{{old('title')}}" id="title" placeholder="Enter Title">
                                                <small id="slugHelp" class="form-text text-muted">The Title shoude be less than 65 Letter</small>
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name='description' id="description" placeholder="Enter Description">{{old('description')}}</textarea>
                                                <small id="descriptionHelp" class="form-text text-muted">The Description shoude be less than 155 characters </small>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="keywords">keywords</label>
                                                <input type="text" class="form-control" name='keywords' value="{{old('keywords')}}" id="keywords" placeholder="Enter Keywords">
                                                @error('keywords')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="slug">Slug</label>
                                                <input type="text" class="form-control" name='slug' value="{{old('slug')}}" id="slug" placeholder="Enter Slug">
                                                <small id="slugHelp" class="form-text text-muted">The Slug shoude be small Letter && less than 50 Letter</small>
                                                @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="category_id">Category</label>
                                                <select id="category_id" name="category_id">
                                                    @foreach ( $categories as $category)
                                                        <option value="{{ $category -> id}}">{{ $category -> title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="writer_id">Writer</label>
                                                <select id="writer_id" name="writer_id">
                                                    @foreach ( $users as $user)
                                                        <option value="{{ $user -> id}}">{{ $user -> name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('writer_id')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="telephone">telephone</label>
                                                <input type="text" class="form-control" name='telephone' value="{{old('telephone')}}" id="telephone" placeholder="Enter telephone">
                                                @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>
                                        </section>
                                        <section class="main-photo">
                                            <div class="ml-2 col-sm-12" dir="ltr">
                                                <input type="file" name="photo" value="{{old('photo')}}" class="file" >
                                            </div>
                                        </section>
                                    </section>
                                    <div class="card-action">
                                        <button class="btn btn-success">Add Post</button>
                                        <a href="{{route('dashboard.posts.index')}}" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? 2022</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{URL::asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{URL::asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{URL::asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{URL::asset('assets/js/off-canvas.js')}}"></script>
<script src="{{URL::asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{URL::asset('assets/js/misc.js')}}"></script>
<script src="{{URL::asset('assets/js/settings.js')}}"></script>
<script src="{{URL::asset('assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>

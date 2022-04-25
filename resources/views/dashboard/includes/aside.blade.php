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
            <a class="nav-link" href="{{route('dashboard.jobs.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Jobs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard.admins.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Admins</span>
            </a>
        </li>
    </ul>
</nav>

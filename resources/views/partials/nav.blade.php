<header id="topnav">
    <div class="topbar-main">
        <div class="container">
            <div class="topbar-left">
                <a href="#" class="logo">
                    <span>Logo</span>
                </a>
            </div>
            <div class="menu-extras navbar-topbar">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="user" class="rounded-circle">
                            <h5 class="text-overflow">
                                <small>IFA
                                    @if (Auth::user()->role == 'admin') Administator
                                    @endif
                                    @if (Auth::user()->role == 'staff') Staff
                                    @endif
                                </small>
                            </h5>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <ul class="navigation-menu">
                    <li class="active">
                        <a href="#" title="Dashboard"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
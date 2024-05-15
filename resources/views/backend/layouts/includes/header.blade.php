<div class="header">
    <div class="header-left">

        <a href="{{ url('/dashboard')}}" class="logo">
            {{-- <img src="{{asset('backend/images/logo4.png')}}" width="120" height="90" alt> --}}
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
    </a>
    <div class="page-title-box">
        <a href="{{ url('/dashboard')}}"><h3>Dashboard</h3></a>
    </div>
    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <ul class="nav user-menu">

        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="search.html">
                    <input class="form-control" type="text" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </li>

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        {{-- <span class="user-img"><img src="{{!empty(auth()->user()->avatar) ? asset('storage/users/'.auth()->user()->avatar): asset('assets/img/avatar.png')}}" alt> --}}
                            <span class="status online"></span></span>
                {{-- <span>{{ Auth::user()->name }}</span> --}}
            </a>
            <div class="dropdown-menu">
                {{-- <a class="dropdown-item" href="{{ route('users.profile')}}">My Profile</a> --}}
                <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
                <a class="dropdown-item" href="#"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form> --}}
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            {{-- <a class="dropdown-item" href="{{ route('users.profile')}}">My Profile</a> --}}
            <!-- <a class="dropdown-item" href="settings.html">Settings</a> -->
            <a class="dropdown-item" href="#"
               onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form> --}}
        </div>
    </div>
</div>

<header class="header--section style--3">
    <!-- Header Topbar Start -->
    <div class="header--topbar bg-dark">
        <div class="container">
            <!-- Header Topbar Links Start -->
            <ul class="header--topbar-links nav ff--primary no--stripes float--left">
                <li @if($code=="m2") class="active" @endif><a href="{{ route('topics') }}">TOPICS</a></li>
                <li @if($code=="m4") class="active" @endif><a href="{{ route('faq') }}">FAQ</a></li>
                <li @if($code=="m5") class="active" @endif><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
            <!-- Header Topbar Links End -->

            <!-- Header Topbar Links Start -->
            <ul class="header--topbar-links nav ff--primary float--right">
                @auth
                    @if(auth()->user()->role == 'admin')
                        <li>
                            <a href="{{ route('admin')}}">
                                <span>Admin Dashboard</span>
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                    @endif
                @endauth
                <li class="dropdown @if($code=="m6") active @endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span>Account</span>
                        <i class="fa fa-user-o"></i>
                    </a>

                    <ul class="dropdown-menu">
                        @if (Route::has('login'))  
                            @auth
                                <li @if($code1=="m1") class="active" @endif><a href="{{ route('profile') }}"><span>Profile</span></a></li>
                                <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <li @if($code1=="m2") class="active" @endif><a href="{{ route('login') }}"><span>Login</span></a></li>
        
                                @if (Route::has('register'))
                                    <li @if($code1=="m3") class="active" @endif><a href="{{ route('register') }}"><span>Register</span></a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </li>
            </ul>
            <!-- Header Topbar Links End -->
        </div>
    </div>
    <!-- Header Topbar End -->

    <!-- Header Navbar Start -->
    <div class="header--navbar navbar bg-default" data-trigger="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle style--3 collapsed" data-toggle="collapse" data-target="#headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Header Navbar Logo Start -->
                <div class="header--navbar-logo navbar-brand">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/upload/').'/'.$site->image3 }}" alt="">
                    </a>
                </div>
                <!-- Header Navbar Logo End -->
            </div>

            <!-- Header Search Start -->
            <div class="header--search style--2 float--right" data-form="validate">
                <form action="#">
                    <input type="text" name="search" placeholder="I’m looking for..." class="form-control" required>

                    <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- Header Search End -->

            <div id="headerNav" class="navbar-collapse collapse float--right">
                <!-- Header Nav Links Start -->
                <ul class="header--nav-links style--3 nav ff--primary">
                    <li @if($code=="m1") class="active" @endif><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li @if($code=="m2") class="active" @endif><a href="{{ route('topics') }}">Topics</a></li>
                    <li @if($code=="m3") class="active" @endif><a href="{{ route('about') }}">About</a></li>
                    <li @if($code=="m4") class="active" @endif><a href="{{ route('faq') }}">FAQ</a></li>
                    <li @if($code=="m5") class="active" @endif><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <!-- Header Nav Links End -->
            </div>
        </div>
    </div>
    <!-- Header Navbar End -->
</header>
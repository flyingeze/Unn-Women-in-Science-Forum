<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="keywords" content="">
    <title>@yield('title') · {{ $site->title }}</title>

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{ asset('img/upload/unn.png') }}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/responsive-style.css') }}">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/colors/color-4.css') }}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('inc.nav')
        
        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="{{ asset('img/profile_pic/').'/'.Auth::user()->profile_pic }}" alt="">
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">{{ Auth::user()->name }}</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>{{ Auth::user()->biography }}</p>
                </div>
            </div>
        </div>
        <!-- Cover Header End -->
        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
                <div class="container">
                    <div class="row">
                        <!-- Main Content Start -->
                    @yield('main')
                    
                    <!-- Main Sidebar Start -->
                    @include('inc.member_sidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

        @include('inc.footer')
    </div>
    <!-- Wrapper End -->
    
    @yield('js')
    
    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="{{ asset('js/plugins.min.js') }}"></script>

    <!-- ==== Main Script ==== -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

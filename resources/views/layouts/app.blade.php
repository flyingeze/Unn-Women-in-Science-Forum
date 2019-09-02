<?php 
    $mcode="";
    $code="";
    $code1="";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="keywords" content="">
    <title>@yield('title') - {{ $site->title }}</title>

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
        
        @yield('main')

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

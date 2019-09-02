@extends('layouts.app')

@section('title')
    404
@endsection

@section('description')
    Page not found.
@endsection

@section('main')

        <!-- 404 Section Start -->
        <div class="f0f--section">
            <div class=" page--header f0f--bg hidden-xs">
                <div class="f0f--bg-inner" data-bg-img="img/light-bg.png"></div>
            </div>

            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- 404 Content Start -->
                                <div class="f0f--content text-white text-center pt--80 pb--80">
                                    <div class="caption fs--18 fw--700 text-uppercase">
                                        <p>oops ! error</p>
                                    </div>

                                    <div class="title fw--700">
                                        <p>404</p>
                                    </div>

                                    <div class="desc fs--18 fw--500">
                                        <p>The page you are looking for doesn't exist.</p>
                                        <p>The page might have been renamed, move, removed or temporary unavailable.</p>
                                    </div>

                                    <!-- Search Widget Start -->
                                    <div class="search--widget" data-form="validate">
                                        <form action="#">
                                            <input type="text" name="search" placeholder="Search" class="form-control" required>

                                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <!-- Search Widget End -->

                                    <div class="buttons">
                                        <a href="{{ route('home')}}" class="btn btn-white">Go To Home<i class="fa fa-home"></i></a>

                                        <a href="#" class="btn btn-white" onclick="window.history.go(-1); return false;">Return Back<i class="fa fa-reply"></i></a>
                                    </div>

                                    <div class="social pt--60">
                                        <ul class="nav">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-rss"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 404 Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Section End -->
@endsection
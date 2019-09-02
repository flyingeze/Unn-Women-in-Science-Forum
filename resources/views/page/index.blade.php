@extends('layouts.app')

<?php 
    $code="m1";
    $code1="";
?>

@section('title')
    Welcome
@endsection

@section('description')
    Page not found.
@endsection

@section('main')


        <!-- Banner Section Start -->
        <section class="banner--section">
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-loop="false">
                <!-- Banner Item Start -->
                <div class="banner--item" data-bg-img="{{ asset('img/upload/').'/'.$site->banner1 }}" data-overlay="0.5">
                    <div class="vc--parent">
                        <div class="vc--child">
                            <div class="container">
                                <div class="row row--md-vc">
                                    <div class="col-md-12">
                                        <!-- Banner Content Start -->
                                        <div class="banner--content pt--70 pb--80 text-center">
                                            <div class="title">
                                                <h1 class="h2 text-white">Welcome To</h1>
                                            </div>

                                            <div class="sub-title">
                                                <h2 class="h1 text-white">{{ $site->title }}</h2>
                                            </div>

                                            <div class="desc fs--16">
                                                <p>{!! $site->banner_text!!}</p>
                                            </div>

                                            <div class="action text-uppercase">
                                                <a href="{{ route('about') }}" class="btn btn-white">Learn More</a>
                                            <a href="{{ route('register') }}" class="btn btn-primary">Become Member</a>
                                            </div>
                                        </div>
                                        <!-- Banner Content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Item End -->
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

        <!-- How It Works Section Start -->
        <section class="section pt--70 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--50 text-center">
                    <div class="title">
                        <h2 class="h2">How It Works?</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-7 pb--40">
                        <div class="row gutter--15 AdjustRow" data-scroll-reveal="group">

                            <div class="col-xs-6 pb--15">
                                <img src="{{ asset('img/upload/picture1.png') }}" alt="">
                            </div>

                            <div class="col-xs-6 pb--15">
                                <img src="{{ asset('img/upload/picture2.jpg') }}" alt="">
                            </div>

                            <div class="col-xs-12">
                                <img src="{{ asset('img/upload/').'/'.$site->banner3 }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 pb--40">
                        <!-- Info Items Start -->
                        <div class="info--items" data-scroll-reveal="group">
                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/upload/icon-01.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Create An Account</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/upload/icon-02.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Join Topics</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/upload/icon-03.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Start Discussion</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->

                            <!-- Info Item Start -->
                            <div class="info--item clearfix">
                                <div class="icon">
                                    <img src="img/upload/icon-04.png" alt="">
                                </div>

                                <div class="info">
                                    <div class="title">
                                        <h3 class="h4 fw--700">Share With Friends</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- Info Item End -->
                        </div>
                        <!-- Info Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- How It Works Section End -->

        <!-- Why Choose Us Section Start -->
        <section class="section bg-lighter pt--80 pb--20">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--60">
                        <!-- Video Popup Start -->
                        <div class="video--popup style--2" data-overlay="0.3">
                            <img src="{{ asset('img/upload/').'/'.$site->banner1 }}" alt="">

                            <a href="#" data-overlay="0.5" data-overlay-color="primary" data-trigger="video_popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- Video Popup End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="title">
                                <h2 class="h2 fw--600">Why Choose Us?</h2>
                            </div>

                            <div class="content fs--14">
                                    {!! $site->why_us !!}
                            </div>

                            <div class="action">
                                <a href="{{ route('about')}}" class="btn btn-default">Read More<i class="fa ml--10 fa-caret-right"></i></a>
                                <a href="{{ route('register')}}" class="btn btn-primary">Get Started<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->
@endsection
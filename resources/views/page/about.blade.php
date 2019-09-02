@extends('layouts.app')

<?php 
    $code="m3";
    $code1="";
?>

@section('title')
    About Us
@endsection

@section('description')
    Page not found.
@endsection

@section('main')

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">About Us</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="{{route('home')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">About</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Section Start -->
        <div class="section pt--80 pb--40">
            <div class="container">
                <div class="row row--md-vc">
                    <div class="col-md-6 pb--40">
                        <img src="{{ asset('img/upload/').'/'.$site->banner3 }}" alt="">
                    </div>

                    <div class="col-md-6 pb--40">
                        <!-- Text Block Start -->
                        <div class="text--block">
                            <div class="content fs--14">
                                <h3>About Us</h3>
                                {!! $site->about !!}

                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Features Section Start -->
        <section class="section bg-lighter pt--80 pb--40">
            <div class="container">
                <div class="row AdjustRow">
                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">530</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Stories / Topics Created</h3>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">30</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Member Online Right Now</h3>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">1.5</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">Active Topics</h3>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>

                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                        <!-- Feature Item Start -->
                        <div class="feature--item bg-default text-center">
                            <div class="title">
                                <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">03</span>k+</h2>
                            </div>

                            <div class="sub-title">
                                <h3 class="h2 fs--16">New Event In Every Week</h3>
                            </div>
                        </div>
                        <!-- Feature Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section End -->
@endsection
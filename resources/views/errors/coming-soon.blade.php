@extends('layouts.app')

@section('title')
    Coming Soon
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
        <!-- Coming Soon Section Start -->
        <div class="coming-soon--section" data-bg-img="img/coming-soon-img/bg.jpg">
            <div class="cs--bg hidden-xs">
                <div class="cs--bg-inner" data-bg-img="img/light-bg.png"></div>
            </div>

            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- 404 Content Start -->
                                <div class="cs--content text-white text-center pt--80 pb--80">
                                    <div class="caption fs--18 fw--700 text-uppercase">
                                        <p>We are <strong>Coming Soon</strong></p>
                                    </div>

                                    <!-- Countdown Start -->
                                    <div class="countdown" data-countdown="2017/12/31"></div>
                                    <!-- Countdown End -->

                                    <div class="desc fs--18 fw--500">
                                        <p>Be the first to know about the opening</p>
                                    </div>

                                    <!-- Newsletter Widget Start -->
                                    <div class="newsletter--widget style--1" data-form="validate">
                                        <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                            <div class="input-group">
                                                <input type="email" name="EMAIL" placeholder="Enter your emil address" class="form-control" autocomplete="off" required>

                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn-link"><i class="fa fa-send-o"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Newsletter Widget End -->

                                    <div class="social pt--40">
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
        <!-- Coming Soon Section End -->
@endsection
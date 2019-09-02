
        <!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pt--70 pb--20 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">

                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Subscribe To Our Newsletter</h2>

                                <!-- Newsletter Widget Start -->
                                <div class="newsletter--widget style--2" data-form="validate">
                                    <p>Ipsum is simply dummy text of the printing printing and typesetting industry.</p>

                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" placeholder="Enter your emil address" class="form-control" autocomplete="off" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send fa-x2" ></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Newsletter Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Recent Post</h2>

                                <!-- Recent Posts Widget Start -->
                                <div class="recent-posts--widget">
                                    <ul class="nav">
                                        <li>
                                            <p class="date fw--300">
                                                <a href="#"><i class="fa mr--8 fa-file-text-o"></i>19 Jan 2017</a>
                                            </p>
                                            <p class="title fw--700">
                                                <a href="blog-details.html">I look at you and see the rest of my life in front</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p class="date fw--300">
                                                <a href="#"><i class="fa mr--8 fa-file-text-o"></i>19 Jan 2017</a>
                                            </p>
                                            <p class="title fw--700">
                                                <a href="blog-details.html">If I know what love is, it is because of you</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Recent Posts Widget End -->
                            </div>
                            <!-- Widget End -->

                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Useful Links</h2>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        @if (Route::has('login'))  
                                            @auth
                                                <li @if($code1=="m1") class="active" @endif><a href="{{ route('profile') }}">Profile</a></li>
                                            @else
                                                <li @if($code1=="m2") class="active" @endif ><a href="{{ route('login') }}">Login</a></li>
                        
                                                @if (Route::has('register'))
                                                    <li @if($code1=="m3") class="active" @endif><a href="{{ route('register') }}">Register</a></li>
                                                @endif
                                            @endauth
                                        @endif
                                        <li @if($code=="m3") class="active" @endif><a href="{{ route('about') }}">About</a></li>
                                        <li @if($code=="m5") class="active" @endif><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Widget Start -->
                            <div class="widget">
                                <h2 class="h4 fw--700 widget--title">Latest Info</h2>

                                <!-- Links Widget Start -->
                                <div class="text--widget">
                                    {!!$site->info!!}
                                </div>
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright pt--30 pb--30 bg-darkest">
                <div class="container">
                    <div class="text fw--500 fs--14 float--left">
                        <p>Copyright &copy; 2019 UNN<span>WSF</span>. All Rights Reserved.</p>
                        <p>Design and Developed with  by <a href="{{ $site->url}}">{{ $site->by}}</a></p>
                    </div>

                    <div class="social float--right">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
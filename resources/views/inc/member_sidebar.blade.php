<div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
        <!-- Widget Start -->
        <div class="widget">
            <h2 class="h4 fw--700 widget--title">Find A Topic</h2>

            <!-- Buddy Finder Widget Start -->
            <div class="newsletter--widget" data-form="validate">

                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank">
                    <div class="input-group">
                        <input type="email" name="search" placeholder="Search..." class="form-control" autocomplete="off" required>

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search" ></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Buddy Finder Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <h2 class="h4 fw--700 widget--title">Student Info</h2>

            <!-- Text Widget Start -->
            <div class="nav--widget">
                <ul class="nav fw--700">
                    
                    <li>
                        <a>
                        <span class="text">Full Name:</span>
                        <span class="count"></span>
                        </a>
                    </li>
                    <li><a>
                        <span class="text">Registration No:</span>
                        <span class="count"></span>
                        </a>
                    </li>
                    <li><a>
                        <span class="text">Department:</span>
                        <span class="count">Computer Science</span>
                        </a>
                    </li>
                    <li><a>
                        <span class="text">Year of Study:</span>
                        <span class="count">4/4</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Text Widget End -->
        </div>
        <!-- Widget End -->
        
        <!-- Widget Start -->
        <div class="widget">
            <h2 class="h4 fw--700 widget--title">Catagories</h2>

            <!-- Nav Widget Start -->
            <div class="nav--widget">
                <ul class="nav fw--700">
                    @foreach($categorys as $category)
                    <li>
                        <a href="{{$site->url}}/category/{{$category->cat_slug}}">
                            <i class="fa fa-folder-o"></i>
                            <span class="text">{{$category->cat_title}}</span>
                            <span class="count">({{count(DB::table('topics')->where('topic_category', $category->cat_id)->get())}})</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Nav Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <h2 class="h4 fw--700 widget--title">Advertisements</h2>

            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <a href="#">
                    <img src="{{$site->url}}/img/upload/ad.jpg" alt="" class="center-block">
                </a>
            </div>
            <!-- Ad Widget End -->
        </div>
        <!-- Widget End -->
    </div>
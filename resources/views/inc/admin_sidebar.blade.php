<div class="main--sidebar col-md-3 pb--60" data-trigger="stickyScroll">
        <!-- Widget Start -->
        <div class="widget">
            <h2 class="h4 fw--700 widget--title">Admin Links</h2>

            <!-- Links Widget Start -->
            <div class="links--widget">
                <ul class="nav">
                    
                    <li><a href="{{ route('admin') }}">Home</a></li>
                    <li><a href="{{ route('profile') }}">My Profile</a></li>
                    <li><a href="{{ route('members') }}">Members<span>({{count($total_users)}})</span></a></li>
                    <li><a href="{{ route('admintopics') }}">Topics<span>({{count($total_topics)}})</span></a></li>
                    <li><a href="{{ route('afaqs') }}">FAQs <span>({{count($total_faqs)}})</span></a></li>
                    <li><a href="{{ route('cat') }}">Categorys<span>({{count($total_categorys)}})</span></a></li>
                    <li><a href="{{ route('department') }}">Departments<span>({{count($total_departments)}})</span></a></li>
                    <li><a href="{{ route('adminreplies') }}">Replies<span>({{count($total_replies)}})</span></a></li>
                    <li><a href="{{ route('site_settings') }}">Settings</a></li>
                </ul>
            </div>
            <!-- Links Widget End -->
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
</div>
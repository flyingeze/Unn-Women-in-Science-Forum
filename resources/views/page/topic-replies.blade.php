@extends('layouts.app')

<?php 
    $code="m2";
    $code1="";
?>

@section('title')
    {{ $topic->topic_title }}
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$topic->topic_picture }}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">{{ $topic->topic_title }}</h2>
                    <h5 class="text-white">By <a href="member/{{ $topic->reg_no }}">{{ $topic->name }}</span></h5>
                    <a href="category/{{ $topic->cat_slug }}">{{ $topic->cat_title }}</a>
                </div>

            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
                        <div class="card h4 @if ($topic->topic_picture != " ") row @endif">
                            @if ($topic->topic_picture != " ")
                                <div class="col-md-4">
                                    <img src="{{ asset('img/upload/')."/".$topic->topic_picture }}" alt="">
                                </div>
                            @endif
                            
                            <p>
                                {{ $topic->topic_description }}
                            </p>
                        </div>
                        <hr>
                        @if (count($repies)>0)

                            <div class="main--content-inner drop--shadow">

                                <!-- Topic Replies Start -->
                                <div class="topic--replies">
                                    <ul class="nav">
                                            @foreach ($repies as $reply)
                                            @auth
                                                @if ($reply->user_id == Auth()->user()->id)
                                                    <li>
                                                        <!-- Topic Reply Start -->
                                                        <div class="topic--reply">
                                                            <div class="header clearfix">
                                                                <p class="date float--right">{{ $reply->created_at }} GMT</p>
                                                                <p class="link float--left"><a href="topic-replies.html#579">#{{ $reply->reply_id }}</a></p>
                                                            </div>

                                                            <div class="body clearfix">
                                                                <div class="author ml--20 float--right text-center">
                                                                    <div class="avatar">
                                                                        <a href="member/{{ $reply->reg_no }}">
                                                                            <img src="{{ asset('img/profile_pic/')."/".$reply->profile_pic }}" alt="">
                                                                        </a>
                                                                    </div>

                                                                    <div class="name text-darkest">
                                                                        <p><a href="member/{{ $reply->reg_no }}">{{ $reply->name }}</a></p>
                                                                    </div>

                                                                    <div class="role text-uppercase">
                                                                        <p class="text-white bg-primary">{{ $reply->department }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="content pt--20 fs--14 ov--h">
                                                                    @if ($reply->reply_image != " ")
                                                                        <img src="{{ asset('img/upload/')."/".$reply->reply_image }}" alt="">
                                                                    @endif
                                                                    <p>{{ $reply->reply_body }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Topic Reply End -->
                                                    </li>
                                                @else
                                                    <li>
                                                        <!-- Topic Reply Start -->
                                                        <div class="topic--reply">
                                                            <div class="header clearfix">
                                                                <p class="date float--left">{{ $reply->created_at }} GMT</p>
                                                                
                                                                <div class="btn-group float--right">
                                                                    <i class="btn-icon text-primary fa fa-thumbs-o-up fa-2x"></i>
                                                                    <i class="btn-icon text-primary fa fa-thumbs-up fa-2x"></i>
                                                                    <i class="btn-icon text-primary fa fa-thumbs-o-down fa-2x"></i>
                                                                    <i class="btn-icon text-primary fa fa-thumbs-down fa-2x"></i>
                                                                </div>
                                                            </div>
                                                            <?php  ?>
                                                            <div class="body clearfix">
                                                                <div class="author mr--20 float--left text-center">
                                                                    
                                                                    <div class="avatar">
                                                                        <a href="member/{{ $reply->reg_no }}">
                                                                            <img src="{{ asset('img/profile_pic/')."/".$reply->profile_pic }}" alt="">
                                                                        </a>
                                                                    </div>
            
                                                                    <div class="name text-darkest">
                                                                        <p><a href="member/{{ $reply->reg_no }}">{{ $reply->name }}</a></p>
                                                                    </div>
            
                                                                    <div class="role text-uppercase">
                                                                        <p class="text-white bg-primary">{{ $reply->department }}</p>
                                                                    </div>
                                                                </div>
            
                                                                <div class="content pt--20 fs--14 ov--h">
                                                                    @if ($reply->reply_image != " ")
                                                                        <img src="{{ asset('img/upload/')."/".$reply->reply_image }}" alt="">
                                                                    @endif
                                                                    <p>{{ $reply->reply_body }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Topic Reply End -->
                                                    </li>
                                                @endif 
                                            @else
                                                <li>
                                                    <!-- Topic Reply Start -->
                                                    <div class="topic--reply">
                                                        <div class="header clearfix">
                                                            <p class="date float--left">{{ $reply->created_at }} GMT</p>
                                                        </div>
                                                        <?php  ?>
                                                        <div class="body clearfix">
                                                            <div class="author mr--20 float--left text-center">
                                                                
                                                                <div class="avatar">
                                                                    <a href="member/{{ $reply->reg_no }}">
                                                                        <img src="{{ asset('img/profile_pic/')."/".$reply->profile_pic }}" alt="">
                                                                    </a>
                                                                </div>
        
                                                                <div class="name text-darkest">
                                                                    <p><a href="member/{{ $reply->reg_no }}">{{ $reply->name }}</a></p>
                                                                </div>
        
                                                                <div class="role text-uppercase">
                                                                    <p class="text-white bg-primary">{{ $reply->department }}</p>
                                                                </div>
                                                            </div>
        
                                                            <div class="content pt--20 fs--14 ov--h">
                                                                @if ($reply->reply_image != " ")
                                                                    <img src="{{ asset('img/upload/')."/".$reply->reply_image }}" alt="">
                                                                @endif
                                                                <p>{{ $reply->reply_body }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Topic Reply End -->
                                                </li> 
                                            @endauth

                                        @endforeach
                                        

                                    </ul>
                                </div>
                                <!-- Topic Replies End -->

                                <!-- Page Count Start -->
                                <div class="page--count pt--30 text-center">
                                    {{$repies->links()}}
                                </div>
                                <!-- Page Count End -->
                            </div>
                            
                        @else
                            @auth
                            <div class="topic--replies">
                                <ul class="nav">
                                    <li>
                                        <div class="alert">
                                            <div class="alert--inner ff--primary text-white bg-primary">
                                                <p>Be the first to comment.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                        @endif

                        <div class="alert mt--30">
                            @auth
                                <div class="card my-4">
                                    <h5 class="card-header">Leave a Comment:</h5>
                                    <div class="card-body">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>
                                                        <span class="text-darker ff--primary fw--500">Add Image</span>
                        
                                                        <input type="file" name="reply_image" class="form-control form-md  @error('reply_image') is-invalid @enderror">
                                                    </label>
                                                    @error('reply_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" name="reply_body" style="margin-top: 0px; margin-bottom: 0px; height: 127px;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                            <div class="alert--inner ff--primary text-white bg-primary">
                                <p>Login to comment on this topic.</p>
                                <a class="btn btn-danger" href="{{ route('login')}}">Login Now</a>
                            </div>
                            @endauth 
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    @include('inc.sidebar')
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->
@endsection
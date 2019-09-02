@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Admin Forum Replies
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
        <!-- Main Content Start -->
        <div class="main--content col-md-9 pb--60" data-trigger="stickyScroll">
            <div class="main--content-inner drop--shadow">
                <!-- Content Nav Start -->
                @include('inc.admin_nav')
                <!-- Content Nav End -->

                <!-- Forum Header Start -->
                <div class="forum--header pb--50">
                    <div class="forum--title">
                        <h3 class="h3 fw--500 text-default">Forum Replies</h3>
                    </div>
                </div>
                <!-- Forum Header End -->

                <!-- Topic Replies Start -->
                <div class="topic--replies">
                    <ul class="nav">
                        @if (count($replies)>0)
                            @foreach ($replies as $rpy)
                                <li>
                                    <!-- Topic Reply Start -->
                                    <div class="topic--reply">
                                        <div class="header clearfix">
                                        <p class="date float--left">{{$rpy->created_at}}GMT in reply to <a href="{{ $site->url.'/'.$rpy->topic_slug}}">{{$rpy->topic_title}}</a></p>
                                            <p class="link float--right">
                                                <a href="#" onclick="event.preventDefault();
                                                    document.getElementById('delete-form{{ $rpy->reply_id }}').submit();"><i class="fa fa-trash-o fa-2x"></i></a>
                                                <form id="delete-form{{ $rpy->reply_id }}" action="{{ route('adminreplies') }}/{{ $rpy->reply_id }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </p>
                                        </div>

                                        <div class="body clearfix">
                                            <div class="author mr--20 float--left text-center">
                                                <div class="avatar" data-overlay="0.3" data-overlay-color="primary">
                                                    <a href="member-activity-personal.html">
                                                        <img src="{{ asset('img/profile_pic/')."/".$rpy->profile_pic }}" alt="">
                                                    </a>
                                                </div>

                                                <div class="name text-darkest">
                                                    <p><a href="member-activity-personal.html">{{$rpy->name}}</a></p>
                                                </div>

                                                <div class="role text-uppercase">
                                                    <p class="text-white bg-primary">{{$rpy->reg_no}}</p>
                                                </div>
                                            </div>

                                            <div class="content pt--20 fs--14 ov--h">
                                                <p>{{$rpy->reply_body}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Topic Reply End -->
                                </li>
                            @endforeach
                            
                            <!-- Page Count Start -->
                            <div class="page--count pt--30 text-center">
                                {{$replies->links()}}
                            </div>
                            <!-- Page Count End -->
                        @else
                            <div class="topic--replies">
                                <ul class="nav">
                                    <li>
                                        <div class="alert">
                                            <div class="alert--inner ff--primary text-white bg-primary">
                                                <p>You have not created any reply.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </ul>
                </div>
                <!-- Topic Replies End -->
            </div>
        </div>
        <!-- Main Content End -->

@endsection
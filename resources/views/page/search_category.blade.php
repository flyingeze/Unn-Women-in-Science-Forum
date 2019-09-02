@extends('layouts.app')

<?php 
    $code="";
    $code1="";
?>

@section('title')
    Post Under {{ $cat->cat_title }}
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">{{ $cat->cat_title }} Topics</h2>
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
                        @if (count($cattopics)>0)
                            <div class="main--content-inner drop--shadow">
                                <!-- Topics List Start -->
                                <div class="topics--list">
                                    <table class="table">
                                        <thead class="ff--primary fs--14 text-darkest">
                                            <tr>
                                                <th>Topic</th>
                                                <th>Post</th>
                                                <th>Frieshness</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($cattopics as $topic)
                                                <tr class="pinned">
                                                    <td>
                                                        <div class="col-md-4">
                                                            <a href="../{{ $topic->topic_slug }}" class="btn-link"><img src="{{ asset('img/upload/')."/".$topic->topic_picture }}" alt=""></a>
                                                        </div>
                                                        <h4 class="h6 fw--500 text-darkest"><a href="../{{ $topic->topic_slug }}" class="btn-link">{{ $topic->topic_title }}</a></h4>

                                                        <p>{{ $topic->topic_description }} in <a href="{{ $topic->cat_slug }}">{{ $topic->cat_title }}</a> forum</p>
                                                    </td>
                                                    <td>
                                                        <p class="ff--primary fw--500 fs--14 text-darkest">05</p>
                                                    </td>
                                                    <td>
                                                        @auth
                                                        @if ($topic->topic_by == auth()->user()->id)
                                                            <i class="text-primary fa fa-paperclip"></i>
                                                        @endif
                                                        @endauth
                                                        <p>{{ $topic->created_at }}GMT</p>

                                                        <a href="../member/{{ $topic->reg_no }}" class="topic--author">
                                                            <span class="name">{{ $topic->name }}</span>
                                                            <span class="avatar"><img src="{{ asset('img/profile_pic/')."/".$topic->profile_pic }}" alt=""></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Topics List End -->

                                <!-- Page Count Start -->
                                <div class="page--count pt--30 text-center">
                                    {{$cattopics->links()}}
                                </div>
                                <!-- Page Count End -->
                            </div>
                        @else
                            
                            @auth
                                <div class="alert--inner ff--primary text-white bg-primary">
                                    <p>Create a topic.</p>
                                    <a class="btn btn-danger" href="{{ route('new-topics')}}">Create Now</a>
                                </div>
                            @else
                                <div class="alert mt--30">
                                    <div class="alert--inner ff--primary text-white bg-primary">
                                        <p>There is no topic.</p>
                                    </div>
                                </div>
                            @endauth
                        @endif
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
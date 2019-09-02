@extends('layouts.member_app')

<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
?>

@section('title')
    Member Forum Topics
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
    <!-- Main Content Start -->
    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
        <div class="main--content-inner drop--shadow">
            <!-- Content Nav Start -->
            @include('inc.member_nav')
            <!-- Content Nav End -->

            <!-- Filter Nav Start -->
            <div class="filter--nav pb--50 clearfix">
                <div class="filter--icon float--right">
                    <ul class="nav ff--primary">
                        <li><a href="{{ route('new-topics') }}">CREATE NEW <i class="fa fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Filter Nav End -->

            
                @if (count($topics)>0)<!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">My Topics</h3>
                </div>

                <div class="forum--subtitle ff--primary fs--14 text-darker">
                    <p>Viewing 5 topics (of {{count($topics)}} total)</p>
                </div>
            </div>
            <!-- Forum Header End -->

            <!-- Topics List Start -->
            <div class="topics--list">
                <table class="table">
                    <thead class="ff--primary fs--14 text-darkest">
                        <tr>
                            <th>Topics</th>
                            <th>Post</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($topics as $topic)
                            
                        <tr>
                            <td>
                                <h4 class="h6 fw--500 text-darkest"><a href="{{ $topic->topic_slug }}" class="btn-link">{{ $topic->topic_title }}</a></h4>

                                <p>{{ $topic->topic_description }} Under <a href="#">{{$topic->cat_title}}</a></p>
                            </td>
                            <td>
                                <p class="ff--primary fw--500 fs--14 text-darkest">{{ count(DB::table('repies')->where('topic_id', $topic->topic_id )->get() )  }}</p>
                            </td>
                            <td>
                                <div class="filter--icon float--right">
                                    <ul class="nav ff--primary">
                                        <li><a href="/mytopic/{{ $topic->topic_id }}/edit"><i class="fa fa-edit fa-2x"></i></a></li>
                                        <li><a href="#" onclick="event.preventDefault();
                                            document.getElementById('delete-form{{ $topic->topic_id }}').submit();"><i class="fa fa-trash-o fa-2x"></i></a></li>
                                        <form id="delete-form{{ $topic->topic_id }}" action="{{ route('mytopics') }}/{{ $topic->topic_id }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Topics List End -->
            <!-- Page Count Start -->
            <div class="page--count pt--30 text-center">
                {{$topics->links()}}
            </div>
            <!-- Page Count End -->
            @else
                <div class="topic--replies">
                    <ul class="nav">
                        <li>
                            <div class="alert">
                                <div class="alert--inner ff--primary text-white bg-primary">
                                    <p>You have not created any topic.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <!-- Main Content End -->
@endsection
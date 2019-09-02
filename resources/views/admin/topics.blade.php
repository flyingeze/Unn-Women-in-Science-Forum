@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Forum Topics
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

            <!-- Filter Nav Start -->
            <div class="filter--nav pb--50 clearfix">
                <div class="filter--icon float--right">
                    <ul class="nav ff--primary">
                        <li><a href="{{ route('new-topics') }}">CREATE NEW <i class="fa fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Filter Nav End -->

            
                @if (count($topices)>0)

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
                        @foreach ($topices as $topic)
                            
                        <tr>
                            <td>
                            <h4 class="h6 fw--500 text-darkest"><a href="{{ $site->url.'/'.$topic->topic_slug }}" class="btn-link">{{ $topic->topic_title }}</a> by <span class="text-primary">{{ $topic->name}}</span></h4>

                                <p>{{ $topic->topic_description }} Under <a href="{{$site->url}}/category/{{ $topic->cat_slug }}">{{ $topic->cat_title }}</a></p>
                            </td>
                            <td>
                                <p class="ff--primary fw--500 fs--14 text-darkest">{{ count(DB::table('repies')->where('topic_id', $topic->topic_id )->get() )  }}</p>
                            </td>
                            <td>
                                <div class="filter--icon float--right">
                                    <ul class="nav ff--primary text-center">
                                        <li><a href="#" onclick="event.preventDefault();
                                            document.getElementById('delete-form{{ $topic->topic_id }}').submit();"><i class="fa fa-trash-o fa-2x"></i></a></li>
                                        <form id="delete-form{{ $topic->topic_id }}" action="{{ route('admintopics') }}/{{ $topic->topic_id }}" method="POST" style="display: none;">
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
                {{$topices->links()}}
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
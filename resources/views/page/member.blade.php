@extends('layouts.app')

<?php 
    $code="m2";
    $code1="";
?>

@section('title')
    {{ $user->name }}
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/profile_pic/').'/'.$user->profile_pic }}" data-overlay="0.85">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="{{ asset('img/profile_pic/').'/'.$user->profile_pic }}" alt="">
                </div>
                <div class="title">
                    <h2 class="h1 text-white">{{ $user->name }}</h2>
                    <h5 class="text-white"> <a href="{{ $user->reg_no}}">{{ $user->reg_no }}</span></h5>
                    <a href="#">{{ $user->department }}</a>
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
                        <!-- Profile Details Start -->
                        <div class="profile--details fs--14">
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">About Me</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
            
                                <div class="profile--info">
                                    <table class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">Full Name</th>
                                            <td><a href="#" class="btn-link">{{ $user->name }}</a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Age Range</th>
                                            <td>{{ $user->age }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Profile Item End -->
            
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">Activities</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
            
                                <div class="profile--info">
                                    <table class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">Number Of Topics</th>
                                            <td><a href="#" class="btn-link">{{ count($topics) }}</a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Number Of Replies</th>
                                            <td><a href="#" class="btn-link">{{ count($repies) }}</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Profile Item End -->
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">Biography</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
            
                                <div class="profile--info">
                                    <p>{{ $user->biography }}</p>
                                </div>
                            </div>
                            <!-- Profile Item End -->
            
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">School Info</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
            
                                <div class="profile--info">
                                    <table class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">Marticulation ID</th>
                                            <td>{{ $user->reg_no }}</td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Department</th>
                                            <td>{{ $user->department }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Profile Item End -->
            
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">Contact</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>
            
                                <div class="profile--info">
                                    <table class="table">
                                        <tr>
                                            <th class="fw--700 text-darkest">Phone</th>
                                            <td><a href="tel:{{ $user->phone_number }}">{{ $user->phone_number }}</a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">E-mail</th>
                                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Website</th>
                                            <td><a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a></td>
                                        </tr>
                                        <tr>
                                            <th class="fw--700 text-darkest">Address</th>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- Profile Item End -->
                        </div>
                        <!-- Profile Details End -->
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
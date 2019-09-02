@extends('layouts.member_app')

<?php 
    $mcode="m1";
    $code="m6";
    $code1="m1";
?>

@section('title')
    Member Profile
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
                                <td><a href="#" class="btn-link">{{ Auth::user()->name }}</a></td>
                            </tr>
                            <tr>
                                <th class="fw--700 text-darkest">Age Range</th>
                                <td>{{ Auth::user()->age }}</td>
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
                        <p>{{ Auth::user()->biography }}</p>
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
                                <td>{{ Auth::user()->reg_no }}</td>
                            </tr>
                            <tr>
                                <th class="fw--700 text-darkest">Department</th>
                                <td>{{ Auth::user()->department }}</td>
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
                                <td><a href="tel:{{ Auth::user()->phone_number }}">{{ Auth::user()->phone_number }}</a></td>
                            </tr>
                            <tr>
                                <th class="fw--700 text-darkest">E-mail</th>
                                <td><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></td>
                            </tr>
                            <tr>
                                <th class="fw--700 text-darkest">Website</th>
                                <td><a href="{{ Auth::user()->website }}" target="_blank">{{ Auth::user()->website }}</a></td>
                            </tr>
                            <tr>
                                <th class="fw--700 text-darkest">Address</th>
                                <td>{{ Auth::user()->address }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Profile Item End -->
            </div>
            <!-- Profile Details End -->
        </div>
    </div>
    <!-- Main Content End -->

@endsection
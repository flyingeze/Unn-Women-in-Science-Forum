@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Home
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

            <!-- Profile Details Start -->
            <div class="profile--details fs--14">
                <!-- Profile Item Start -->
                <div class="profile--item">
                    <div class="profile--heading row text-right">
                        <h3 class=" text-left h4 fw--700">
                            <span class="mr--4">Welcome Page</span>
                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                        </h3>
                    </div>

                    <div class="profile--info">
                        <div class="row">
                            <div class="col-md-4 text-center pb--30 pt--30 mt--20" style="background-color: pink; border-radius:5rem;">
                                <div class="text-primary h1">
                                    {{count($users)}}
                                </div>
                                <h4>Users</h4>
                            </div>
                            
                            <div class="col-md-7 text-center ml--10 mb--10" style="background-color: pink; border-radius:5rem;">
                                <div class="text-primary h1">
                                    {{count($topics)}}
                                </div>
                                <h4>Topics</h4>
                            </div>
                            
                            <div class="col-md-7 text-center ml--10 mb--10" style="background-color: pink; border-radius:5rem;">
                                <div class="text-primary h1">
                                    {{count($replies)}}
                                </div>
                                <h4>Reply</h4>
                            </div>
                            
                            <div class="col-md-7 text-center ml--10 mb--10" style="background-color: pink; border-radius:5rem;">
                                <div class="text-primary h1">
                                    {{count($categorys)}}
                                </div>
                                <h4>Category</h4>
                            </div>
                            
                            <div class="col-md-4 text-center mr--10" style="background-color: pink; border-radius:5rem;">
                                <div class="text-primary h1">
                                    {{count($departments)}}
                                </div>
                                <h4>Departments</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Item End -->
            </div>
            <!-- Profile Details End -->
        </div>
    </div>
    <!-- Main Content End -->

@endsection
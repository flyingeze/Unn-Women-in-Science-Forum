@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Edit Department
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
                        <li><a href="{{ route('department') }}">CANCEL</a></li>
                    </ul>
                </div>
            </div>
            <!-- Filter Nav End -->

            <!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">Edit Department</h3>
                </div>
            </div>
            <!-- Forum Header End -->

            <!-- Topics List Start -->
            <form method="POST" action="">
                @csrf
                <input type="text" name="department_id" value="{{$dept->department_id}}" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Title</span>
                                <input type="text" name="department_title" class="form-control form-md @error('department_title') is-invalid @enderror" value="{{ $dept->department_title }}" placeholder="Name of Department" autofocus>
                            </label>
                            @error('department_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Edit Department</button>
                    </div>
                </div>
            </form>
            <!-- Topics List End -->
        </div>
    </div>
    <!-- Main Content End -->
@endsection
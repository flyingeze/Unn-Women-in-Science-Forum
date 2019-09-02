@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Category
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
                            <span class="mr--4">Category</span>
                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                        </h3>
                        <a href="{{ route('new-cat')}}">
                            <i class="fa fa-plus fa-2x"></i>
                        </a>
                    </div>

                    <div class="profile--info">
                        <table class="table table-responsive">
                            <thead>
                                <td class="h4">Title</td>
                                <td class="h4">Slug</td>
                                <td class="h4">Action</td>
                            </thead>
                            <tbody>
                                @foreach ($cats as $cat)
                                    <tr>
                                        <td>{{ $cat->cat_title }}</td>
                                        <td>{{ $cat->cat_slug }}</td>
                                        <td>
                                            <a href="./cat/{{ $cat->cat_id }}/edit/" class="btn btn-icon"><i class="fa fa-edit"></i></a>
                                            <a href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-form{{ $cat->cat_id }}').submit();" class="btn btn-icon"><i class="fa fa-trash-o"></i></a>
                                            <form id="delete-form{{ $cat->cat_id }}" action="{{ route('cat') }}/{{ $cat->cat_id }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Page Count Start -->
                    <div class="page--count pt--30 text-center">
                        {{$cats->links()}}
                    </div>
                    <!-- Page Count End -->
                </div>
                <!-- Profile Item End -->
            </div>
            <!-- Profile Details End -->
        </div>
    </div>
    <!-- Main Content End -->

@endsection
@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Members
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
                            <span class="mr--4">Members</span>
                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                        </h3>
                    </div>

                    <div class="profile--info">
                        <table class="table">
                            <thead class="">
                                <td class="h4">Name</td>
                                <td class="h4">Email</td>
                                <td class="h4">Reg. No</td>
                                <td class="h4">Phone Number</td>
                                <td class="h4">Topics</td>
                                <td class="h4">Replies</td>
                                <td class="h4">Action</td>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><a href="../member/{{ $user->reg_no }}" target="_blank">{{ $user->name }}</a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->reg_no }}</td>
                                        <td>{{ $user->phone_number }}</td>
                                        <td class="text-center">{{ count(DB::table('topics')->where('topic_by',$user->id )->get()) }}</td>
                                        <td class="text-center">{{ count(DB::table('repies')->where('user_id',$user->id )->get()) }}</td>
                                        <td>
                                            <a href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-form{{ $user->id }}').submit();" class="btn btn-icon"><i class="fa fa-trash-o"></i></a>
                                            <form id="delete-form{{ $user->id }}" action="{{ route('members') }}/{{ $user->id }}" method="POST" style="display: none;">
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
                        {{$users->links()}}
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
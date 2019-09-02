@extends('layouts.member_app')

<?php 
    $mcode="m4";
    $code="m6";
    $code1="m1";
?>

@section('title')
    Profile Settings
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

            <!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">Edit Profile</h3>
                </div>
            </div>
            <!-- Forum Header End -->

            <!-- Topics List Start -->
            <form method="POST" action="{{ route('updateprofile') }}"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" name='id' value="{{Auth::user()->id}}" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Full Name</span>
                                <input type="text" name="name" class="form-control form-md @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" required placeholder="Full name" autofocus>
                            </label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Martriculation ID</span>
                                <input type="text" name="reg_no" class="form-control form-md @error('reg_no') is-invalid @enderror" value="{{ Auth::user()->reg_no }}" required placeholder="Registration Number">
                            </label>
                            @error('reg_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">email</span>
                                <input type="text" name="email" class="form-control form-md @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" required placeholder="Email">
                            </label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Phone Number</span>
                                <input type="text" name="phone_number" class="form-control form-md @error('phone_number') is-invalid @enderror" value="{{ Auth::user()->phone_number }}" required placeholder="Phone Number">
                            </label>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Website Address</span>
                                <input type="url" name="website" class="form-control form-md @error('website') is-invalid @enderror" value="{{  Auth::user()->website }}" placeholder="Website address">
                            </label>
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Address</span>
                                <input type="text" name="address" class="form-control form-md @error('address') is-invalid @enderror" value="{{  Auth::user()->address }}" required placeholder="Home Address">
                            </label>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Image</span>

                                <input type="file" name="profile_pic" class="form-control form-md  @error('profile_pic') is-invalid @enderror">
                            </label>
                            @error('profile_pic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Department</span>
                                <select name="department" class="form-control form-md  @error('department') is-invalid @enderror" data-trigger="selectmenu">
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $dept)
                                        <option value="{{$dept->department_title }}" @if (Auth::user()->department==$dept->department_title)
                                            selected
                                        @endif>{{$dept->department_title }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Biography</span>
                                <textarea type="text" name="biography" class="form-control form-md  @error('biography') is-invalid @enderror" placeholder="Biography" rows="5">{{ Auth::user()->biography }}</textarea>
                            </label>
                            @error('biography')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Update</button>
                    </div>
                </div>
            </form>
            <!-- Topics List End -->
        </div>
    </div>
    <!-- Main Content End -->
@endsection
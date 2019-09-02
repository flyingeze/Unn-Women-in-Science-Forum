@extends('layouts.app')
<?php 
    $code="m6";
    $code1="m3";
?>

@section('title')
    Register
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Register</h2>
        </div>

        <ul class="breadcrumb text-gray ff--primary">
            <li><a href="{{route('home')}}" class="btn-link">Home</a></li>
            <li class="active"><span class="text-primary">Register</span></li>
        </ul>
    </div>
</div>
<!-- Page Header End -->

<!-- Banner Section Start -->
<section class="banner--section">
    <!-- Banner Slider Start -->
        <div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-0 col-xxs-12 pb--60">
                <form method="POST" class="pt--60" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    <span class="text-darker ff--primary fw--500">My name is</span>
                                    <input type="text" name="name" class="form-control form-md @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Full name" autofocus>
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
                                    <span class="text-darker ff--primary fw--500">Registration Number</span>

                                    <input type="text" name="reg_no" class="form-control form-md  @error('reg_no') is-invalid @enderror" value="{{ old('reg_no') }}" placeholder="Matriculation ID">
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
                                    <span class="text-darker ff--primary fw--500">Phone Number</span>

                                    <input type="text" name="phone_number" class="form-control form-md  @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" placeholder="Phone Number">
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
                                    <span class="text-darker ff--primary fw--500">Department</span>

                                    <select name="department" class="form-control form-md  @error('department') is-invalid @enderror" data-trigger="selectmenu">
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $dept)
                                            <option value="{{$dept->title }}" @if (old('department')==$dept->title)
                                                selected
                                            @endif>{{$dept->title }}</option>
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span class="text-darker ff--primary fw--500">Age</span>

                                    <select name="age" class="form-control form-md  @error('age') is-invalid @enderror" value="{{ old('age') }}" data-trigger="selectmenu">
                                        <option value="">Select Age Rang</option>
                                        <option value="18 to 25" @if (old('age')=="18 to 25")
                                            selected
                                        @endif>18 to 25</option>
                                        <option value="26 to 30" @if (old('age')=="26 to 30")
                                            selected
                                        @endif>26 to 30</option>
                                        <option value="31 to 35" @if (old('age')=="31 to 35")
                                            selected
                                        @endif>31 to 35</option>
                                        <option value="36 to 40" @if (old('age')=="36 to 40")
                                            selected
                                        @endif>36 to 40</option>
                                        <option value="41+" @if (old('age')=="41+")
                                            selected
                                        @endif>41+</option>
                                    </select>
                                </label>
                                @error('age')
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
                                    <input type="text" name="address" class="form-control form-md  @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Home Address">
                                </label>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    <span class="text-darker ff--primary fw--500">Email</span>
                                    <input type="email" name="email" class="form-control form-md  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email">
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
                                    <span class="text-darker ff--primary fw--500">Password</span>
                                    <input type="password" name="password" class="form-control form-md" placeholder="Create password">
                                </label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <span class="text-darker ff--primary ">Corfirm Password</span>

                                    <input type="password" name="password_confirmation" class="form-control form-md" placeholder="Confirm password">
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary form-control">Register</button>
                        </div>
                        @if (Route::has('login'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Aready a member?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    <!-- Banner Slider End -->
</section>
<!-- Banner Section End -->
@endsection

@extends('layouts.app')

<?php 
    $code="m6";
    $code1="m2";
?>

@section('title')
    Login
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Login</h2>
        </div>

        <ul class="breadcrumb text-gray ff--primary">
            <li><a href="{{route('home')}}" class="btn-link">Home</a></li>
            <li class="active"><span class="text-primary">Login</span></li>
        </ul>
    </div>
</div>
<!-- Page Header End -->
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-0 col-sm-offset-0 col-xxs-12 pb--60">
        <form method="POST" class="pt--60"  action="{{ route('login') }}">
            @csrf
            
            <div class="form-group">
                <label>
                    <span class="text-darker ff--primary fw--500">E-Mail Address</span>
                    <input type="email" name="email" class="form-control form-md @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="E-Mail Address" autofocus>
                </label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>
                    <span class="text-darker ff--primary fw--500">Password</span>
                    <input type="password" name="password" class="form-control form-md @error('password') is-invalid @enderror"  required placeholder="Password">
                </label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group ">
                    <div class="form-check">
                        <label class="form-check-label" for="remember">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            {{ __('Remember Me') }}
                        </label>
                    </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Not a member?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

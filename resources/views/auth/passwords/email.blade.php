@extends('layouts.app')
<?php 
    $code="m6";
    $code1="";
?>

@section('title')
    Reset Password
@endsection

@section('description')
    Page not found.
@endsection

@section('main')

<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Reset Password</h2>
        </div>

        <ul class="breadcrumb text-gray ff--primary">
            <li><a href="{{route('home')}}" class="btn-link">Home</a></li>
            <li><a href="{{route('login')}}" class="btn-link">Login</a></li>
            <li class="active"><span class="text-primary">Reset Password</span></li>
        </ul>
    </div>
</div>
<!-- Page Header End -->
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-0 col-sm-offset-0 col-xxs-12 pt--60 pb--60">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary col-md">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

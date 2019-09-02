@extends('layouts.app')
<?php 
    $code="m6";
    $code1="m3";
?>

@section('title')
    Verify Email
@endsection

@section('description')
    Page not found.
@endsection

@section('main')

<!-- Page Header Start -->
<div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
    <div class="container">
        <div class="title">
            <h2 class="h1 text-white">Verify Your Email Address</h2>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container">
    <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-0 col-sm-offset-0 col-xxs-12 pb--60">
        <div  class="pt--60">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
        </div>
    </div>
</div>
@endsection

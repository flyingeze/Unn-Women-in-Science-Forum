@extends('layouts.admin_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Edit FAQs
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
                        <li><a href="{{ route('afaqs') }}">CANCEL</a></li>
                    </ul>
                </div>
            </div>
            <!-- Filter Nav End -->

            <!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">Edit FAQs</h3>
                </div>
            </div>
            <!-- Forum Header End -->

            <!-- Topics List Start -->
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Question</span>
                                <input type="text" name="faq_question" class="form-control form-md @error('faq_question') is-invalid @enderror" value="{{ $afaqs->faq_question }}" placeholder="Question" autofocus>
                            </label>
                            @error('faq_question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Answer</span>
                                <textarea type="text" name="faq_answer" class="form-control form-md @error('faq_answer') is-invalid @enderror" placeholder="Answer">{{ $afaqs->faq_answer }}</textarea>
                            </label>
                            @error('faq_answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Edit FAQs</button>
                    </div>
                </div>
            </form>
            <!-- Topics List End -->
        </div>
    </div>
    <!-- Main Content End -->
@endsection
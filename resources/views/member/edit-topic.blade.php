@extends('layouts.member_app')
<?php 
    $mcode="m2";
    $code="m6";
    $code1="m1";
 ?>
@section('title')
    Edit Topic
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

            <!-- Filter Nav Start -->
            <div class="filter--nav pb--50 clearfix">
                <div class="filter--icon float--right">
                    <ul class="nav ff--primary">
                        <li><a href="{{ route('mytopics') }}">CANCEL</a></li>
                    </ul>
                </div>
            </div>
            <!-- Filter Nav End -->

            <!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">Edit Topic</h3>
                </div>
            </div>
            <!-- Forum Header End --> 

            <!-- Topics List Start -->
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Title</span>
                                <input type="text" name="topic_title" class="form-control form-md @error('topic_title') is-invalid @enderror" value="{{ $topic->topic_title }}" placeholder="Title" autofocus>
                            </label>
                            @error('topic_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Slug</span>
                                <input type="text" name="topic_slug" class="form-control form-md @error('topic_slug') is-invalid @enderror" value="{{ $topic->topic_slug }}" placeholder="Slug">
                            </label>
                            @error('topic_slug')
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

                                <input type="file" name="topic_picture" class="form-control form-md  @error('picture') is-invalid @enderror" >
                            </label>
                            @error('topic_picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Category</span>
                                <select name="topic_category" class="form-control form-md  @error('topic_category') is-invalid @enderror" data-trigger="selectmenu">
                                    <option value="">Select Category</option>
                                    @foreach ($categorys as $cats)
                                        <option value="{{$cats->cat_id}}" @if (  $topic->topic_category == $cats->cat_id)
                                            selected
                                        @endif>{{$cats->cat_title}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('topic_category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Description</span>
                                <textarea type="text" id="article-ckeditor" name="topic_description" class="form-control form-md  @error('topic_description') is-invalid @enderror" placeholder="Description" rows="5">{{ $topic->topic_description }}</textarea>
                            </label>
                            @error('topic_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Rules</span>
                                <textarea type="text" name="topic_rule" class="form-control form-md  @error('topic_rule') is-invalid @enderror" placeholder="Rules">{{ $topic->topic_rule }}</textarea>
                            </label>
                            @error('topic_rule')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary form-control">Edit Topic</button>
                    </div>
                </div>
            </form>
            <!-- Topics List End -->
        </div>
    </div>
    <!-- Main Content End -->
@endsection
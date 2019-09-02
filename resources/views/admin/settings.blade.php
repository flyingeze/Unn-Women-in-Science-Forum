@extends('layouts.admin_app')

<?php 
    $mcode="m4";
    $code="m6";
    $code1="m1";
?>

@section('title')
    Site Settings
@endsection

@section('description')
    Page not found.
@endsection

@section('main')
    <!-- Main Content Start -->
    <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
        <div class="main--content-inner drop--shadow">
            <!-- Content Nav Start -->
            @include('inc.admin_nav')
            <!-- Content Nav End -->

            <!-- Forum Header Start -->
            <div class="forum--header pb--50">
                <div class="forum--title">
                    <h3 class="h3 fw--500 text-default">Edit Site Info</h3>
                </div>
            </div>
            <!-- Forum Header End -->

            <!-- Topics List Start -->
            <form method="POST" action="{{ route('update_site_info') }}"  enctype="multipart/form-data">
                    @csrf
                    <input type="text" name='id' value="{{$site->id}}" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Site Title</span>
                                <input type="text" name="title" class="form-control form-md @error('title') is-invalid @enderror" value="{{$site->title}}" required placeholder="Site Title" autofocus>
                            </label>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Site URL</span>
                                <input type="text" name="url" class="form-control form-md @error('url') is-invalid @enderror" value="{{ $site->url }}" required placeholder="Site URL">
                            </label>
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Official Email</span>
                                <input type="email" name="email" class="form-control form-md @error('email') is-invalid @enderror" value="{{  $site->email  }}" required placeholder="Site Email">
                            </label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Site Owner</span>
                                <input type="text" name="by" class="form-control form-md @error('by') is-invalid @enderror" value="{{  $site->by  }}" required placeholder="Site owner name">
                            </label>
                            @error('by')
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
                                <input type="text" name="telephone" class="form-control form-md @error('telephone') is-invalid @enderror" value="{{  $site->telephone  }}" required placeholder="Phone Number">
                            </label>
                            @error('telephone')
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
                                <input type="text" name="address" class="form-control form-md @error('address') is-invalid @enderror" value="{{   $site->address  }}" required placeholder="Office Address">
                            </label>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->banner1 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">Welcome Banner</span>
                                        <input type="file" name="banner1" class="form-control form-md  @error('banner1') is-invalid @enderror">
                                    </label>
                                    @error('banner1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->image1 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">Image 1</span>

                                        <input type="file" name="image1" class="form-control form-md  @error('image1') is-invalid @enderror">
                                    </label>
                                    @error('image1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->banner2 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">Banner 2</span>

                                        <input type="file" name="banner2" class="form-control form-md  @error('banner2') is-invalid @enderror">
                                    </label>
                                    @error('banner2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->image2 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">Image 2</span>

                                        <input type="file" name="image2" class="form-control form-md  @error('image2') is-invalid @enderror">
                                    </label>
                                    @error('image2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->banner3 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">About Us Image</span>

                                        <input type="file" name="banner3" class="form-control form-md  @error('banner3') is-invalid @enderror">
                                    </label>
                                    @error('banner3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('img/upload/').'/'.$site->image3 }}" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>
                                        <span class="text-darker ff--primary fw--500">Site Logo</span>

                                        <input type="file" name="image3" class="form-control form-md  @error('image3') is-invalid @enderror">
                                    </label>
                                    @error('image3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Welcome Text</span>
                                <textarea type="text" name="banner_text" class="form-control form-md @error('banner_text') is-invalid @enderror" rows="5" required placeholder="Office Address">{{   $site->banner_text  }}</textarea>
                            </label>
                            @error('banner_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">About Us</span>
                                <textarea type="text" name="about" class="form-control form-md  @error('about') is-invalid @enderror" placeholder="About the site" rows="5">{{ $site->about }}</textarea>
                            </label>
                            @error('about')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Why Us</span>
                                <textarea type="text" name="why_us" class="form-control form-md  @error('why_us') is-invalid @enderror" placeholder="Why choose us" rows="5">{{ $site->why_us }}</textarea>
                            </label>
                            @error('why_us')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>
                                <span class="text-darker ff--primary fw--500">Info</span>
                                <textarea type="text" name="info" class="form-control form-md  @error('info') is-invalid @enderror" placeholder="Why choose us" rows="5">{{ $site->info }}</textarea>
                            </label>
                            @error('info')
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
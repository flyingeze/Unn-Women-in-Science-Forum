@extends('layouts.app')

<?php 
    $code="m4";
    $code1="";
?>

@section('title')
    FAQ
@endsection

@section('description')
    Page not found.
@endsection

@section('main')

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/upload/').'/'.$site->banner2 }}" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">FAQ</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="{{route('home')}}" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Frequently Asked Question</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- FAQ Section Start -->
        <section class="faq--section pt--60 pb--20">
            <div class="container">
                <!-- Text Block Start -->
                <div class="text--block pb--60">
                    <div class="content fs--14">
                        <h4>Frequently Asked Question</h4>
                    </div>
                </div>
                <!-- Text Block End -->

                <div class="row">
                    <div class="col-md-6 pb--60">
                        <!-- FAQ Items Start -->
                        <div class="faq--items" id="faqItems" data-scroll-reveal="group">
                            <!-- FAQ Item Start -->
                            @foreach ($faqs as $faq)
                                <div class="faq--item style--2 panel">
                                    <div class="title">
                                        <h3 class="h6">
                                            <a href="#faqItem0{{$faq->faq_id}}" data-parent="#faqItems" data-toggle="collapse" class="collapsed">
                                                <span>{{$faq->faq_question}}</span>
                                            </a>
                                        </h3>
                                    </div>

                                    <div id="faqItem0{{$faq->faq_id}}" class="content collapse">
                                        <div class="content--inner">
                                            <p>{{$faq->faq_answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- FAQ Item End -->
                                
                            <!-- Page Count Start -->
                            <div class="page--count pt--30 text-center">
                                {{$faqs->links()}}
                            </div>
                            <!-- Page Count End -->
                        </div>
                        <!-- FAQ Items End -->

                        <!-- Text Block Start -->
                        <div class="text--block pt--40" data-scroll-reveal="bottom">
                            <div class="content fs--14">
                                <h4>Can’t Find The Answer to Your Question?</h4>

                                <p>If you can’t find the answer to your question that you are looking for. don’t worry please contact <a>{{$site->telephone}}</a> or e-mail <a href="mail::{{$site->email}}">{{$site->email}}</a></p>
                            </div>
                        </div>
                        <!-- Text Block End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block style--1" data-scroll-reveal="group">
                            <img src="{{ asset('img/upload/').'/'.$site->image2 }}" alt="">
                            <img src="{{ asset('img/upload/').'/'.$site->image1 }}" alt="">
                        </div>
                        <!-- Image Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->
@endsection
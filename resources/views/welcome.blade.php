@extends('layouts.main')
@section('header')
    <link rel="stylesheet" href="/css/banner.css" type="text/css">
@endsection
@section('content')

    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">

            @foreach($banners as $key=>$banner)
                <div class="item item-{{$key+1}}">
                    <div class="img-fill" style="background-image: url('/img/{{$banner->photo}}'); opacity: .8">
                        <div class="text-content">
                            <h6 >{{$banner->subtitle}}</h6>
                            <h4>{{$banner->title}}</h4>
                            <p>{{$banner->description}}</p>
                            <a href="<?php echo route('contact') ?>" class="filled-button-two">read more</a>
                            <a href="<?php echo route('contact') ?>" class="filled-button">contact</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!-- The Banner Ends Here -->



    <!-- Home About Begin -->
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home__about__text">
                        <div class="section-title">
                            <h2>Our Business</h2>
                            <p class="text-justify">We are an established business consisting of qualified professionals and registered under Pamthuzi Holdings Limited. We pride ourselves in Livestock research and consultancy
                                and specialize in Livestock production, distribution, and marketing of Livestock and Livestock products.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="home__about__item">
                                    <h4>Our Vision</h4>
                                    <p class="text-justify">To be a leading livestock producer and a trusted
                                        livestock research and consulting firm to help contribute to national food security and job creation. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="home__about__item">
                                    <h4>Our Mission</h4>
                                    <p class="text-justify">
                                        To strive to become a producer of quality livestock and livestock products with
                                        its distribution channels and outlets, while being a contender for livestock research and consultancy.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo route('about') ?>" class="primary-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="home__about__img">
                        <img src="/img/markus-spiske-sFydXGrt5OA-unsplash.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About End -->

    <div class="contact-widget set-bg" data-setbg="img/contact-widget.jpg" style="background-image: url('/img/contact-widget.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact__widget__item">
                                <h4>Request A Call Back</h4>
                                <p>We will respond with a phone call to hear you out.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__widget__phone">
                        <a href="https://wa.me/265881259210?text=I%27m%20interested%20in%20your%20services.%20Please%20call%20me%20back" class="site-btn">Request</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Choose Section End -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>

        <x-services/>
    </div>

    <!-- Choose Section Begin -->
    <section class="choose spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why People Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="/img/icons8_customer_insight_96px.png" alt="">
                        <h5>Experience</h5>
                        <p>We have a team of qualified and experienced professionals who
                            work hard to deliver the best results for our clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="/img/icons8_wildfire_96px.png" alt="">
                        <h5>Passion</h5>
                        <p>Beyond business, we love what we do, and nothing beats the ability to ensure customer satisfaction. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="choose__item">
                        <img src="/img/icons8_insurance_agent_96px.png" alt="">
                        <h5>Professionalism</h5>
                        <p>We take any assignment seriously and strive to deliver timely, efficiently, and per the set standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

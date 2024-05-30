@extends('layouts.main')
@php($title = 'About')
@section('content')


    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about__img">
                            <img src="/img/markus-spiske-sFydXGrt5OA-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="about__text">
                            <h2>Our Company</h2>
                            <p class="text-justify">Welcome to Pamthuzi Livestock Farms and Research Center, where we believe that passion and innovation are intrinsic to great customer service!
                                <br> <br>
                                We are an established business consisting of qualified professionals and registered under Pamthuzi Holdings Limited.
                                We pride ourselves in Livestock research and
                                consultancy and specialize in Livestock production, distribution, and marketing of Livestock and Livestock products.</p>
                            <a href="<?php echo route('contact')?>" class="primary-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="home__about__item">
                        <h4>Our Vision</h4>
                        <p class="text-justify">To strive to become a producer of quality livestock and livestock
                            products with its distribution channels and outlets, while being a contender for livestock research and consultancy</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="home__about__item">
                        <h4>Our Value</h4>
                        <p class="text-justify">
                            The livestock sector is key to both economic growth and resilience in the face of climate change.
                            All key players and stakeholders must be equipped with the right tools to ensure their success. We are here as a catalyst
                            and driver of your efforts toward success, that is why we value great service delivery in a timely and efficient manner.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="section-title">
                        <h2>Our Team</h2>
                        <p>Meet Our Team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="/img/andrew.jpg">
                    </div>
                    <h4>Andrew Makalani</h4>
                    <p style="color: #88C417;">Founder and Team Leader</p>
                    <p class="text-justify">
                        The team leader is a qualified and seasoned professional in Animal Science.
                        With expertise in animal production economics, nutrition, forage production science, and
                        business development, he brings ten years of active contribution to Malawi’s Livestock sector.
                        The team leader's experience spans key positions, from the Ministry of Agriculture to academia,
                        and hands-on involvement in international livestock production technologies.
                        The team leader is poised to deliver with unwavering professionalism and dedication.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="/img/eliot.jpg">
                    </div>
                    <h4>Lemani Elliot Levi
                    </h4>
                    <p style="color: #88C417;">Veterinarian</p>
                    <div class="section-text mt-2 text-justify">
                        <p>
                            Seasoned and qualified veterinarian with twenty years of active practice and experience.
                            Well versed in important local and cross-boundary livestock diseases. He brings expertise in animal care,
                            diagnostics, and treatment. From routine check-ups to complex surgeries, he ensures the well-being of our furry companions.
                            Passionate about animals and an advocate of animal welfare.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="/img/austin.jpg">
                    </div>
                    <h4>Austin Mlowoka</h4>
                    <p style="color: #88C417;">Animal Husbandry Expert</p>
                    <p class=" text-justify">
                        With a wealth of experience for over twenty-nine years in the field, our Animal Husbandry expert combines passion for animals with scientific knowledge. From managing livestock health to optimizing breeding programs, you are fully covered and in good hands. The keen eye for detail ensures healthy herds, efficient feed management, and sustainable practices. Whether it’s dairy cows, poultry, or exotic species, the guidance will always be invaluable.                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection

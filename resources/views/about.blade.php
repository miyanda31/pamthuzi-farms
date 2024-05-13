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
                                consultancy and specialize in Livestock production, distribution, and marketing of Livestock and Livestock products..</p>
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
                    <div class="team__item set-bg" data-setbg="/img/IMG_2227.JPG">

                        <div class="team__text">
                            <div class="team__title">
                                <h4>Andrew Makalani</h4>
                                <span>Livestock Production Specialist</span>
                            </div>
                            <p>A strategic, CEO/Director with fourteen years of progressive responsibility in a variety of business environments.
                                Proven leadership and track record in managed care, sales, a variety of clinical settings and small business ownership.
                                A motivated team player with immense knowledge of multi-tasking and meeting strict deadlines.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="/img/IMG-20231125-WA0006.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h4>Stain Kabele</h4>
                                <span>Team Leader</span>
                            </div>
                            <p>In charge of the credit granting process and their duties include:
                                assessing the creditworthiness of customers, minimizing debt losses, increasing sales, investigating credit applications,
                                managing corporate financing programs, and maintaining the corporate credit policy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team__item set-bg" data-setbg="/img/IMG-20231125-WA0007.jpg">
                        <div class="team__text">
                            <div class="team__title">
                                <h4>Antony Mkhwimba</h4>
                                <span>Animal Health Specialist</span>
                            </div>
                            <p>Highly organized and efficient secretary with over eight years of experience providing administrative support to executives in a fast-paced office environment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection

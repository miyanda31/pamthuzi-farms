@extends('layouts.main')
@php($title = 'Contact')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option contact-breadcrumb set-bg" data-setbg="img/breadcrumb/contact-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="contact__form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__text">
                            <div class="contact__form__title">
                                <h2>Get In Touch</h2>
                                <p>Please contact us or send us an email or go to our forum.</p>
                            </div>
                            <form action="#">
                                <div class="input-list">
                                    <input type="text" placeholder="Your name">
                                    <input type="text" placeholder="Your email">
                                </div>
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center">Before you contact us</h2>
            <x-frequently/>
        </div>
    </section>
    <!-- Contact End -->

@endsection
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
                                <p>Please contact us or email us or go to our forum.</p>
                            </div>
                            @livewire('contact-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

@endsection

@extends('layouts.main')
@php($title = 'Services')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option set-bg" data-setbg="/img/breadcrumb/history-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Services</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{route('services')}}">Services</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Services Details Section Begin -->
    <section class="services-details spad">
        <div class="container">
            <x-services/>
        </div>
    </section>

    <x-frequently/>
@endsection

@extends('layouts.main')

@section('content')

    <!-- Page Content -->
    <div class=" header-text" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>

    <div class="single-services mb-5">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-md-8 ml-auto mr-auto">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img style="width: 100%" src="htpps://pamthuziholdings.net/img/{{$banner->photo}}" alt="">
                            <h3 class="text-center">{{$banner->title}}</h3>
                            <p>{{$banner->description}}</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pamthuzi Livestock Farms and Research Center - {{$title??'Home'}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pamthuzi Livestock Farms and Research Center, Research, Consultancy, Farming, Implementation, Evaluation" name="keywords">
    <meta content="We are an established business consisting of qualified professionals and registered under Pamthuzi Holdings Limited.
    We pride ourselves in Livestock research and consultancy and specialize in Livestock production, distribution,
    and marketing of Livestock and Livestock products." name="description">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">

    @yield('header')

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="{{route('home')}}"><img width="30%" src="/img/logo.jpg" alt=""></a>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li class="{{request()->route()->getName() == 'home'?'active':''}}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{request()->route()->getName() == 'services'?'active':''}}"><a href="{{route('services')}}">Services</a></li>
            <li class="{{request()->route()->getName() == 'contact'?'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
            <li class="{{request()->route()->getName() == 'about'?'active':''}}"><a href="{{route('about')}}">About</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <ul class="offcanvas__widget">
        <li><i class="fa fa-phone"></i> {{env('APP_PHONE')}}</li>
        <li><a href="https://www.facebook.com/SALIRECOF"><i class="fa fa-facebook"></i> @pamthuzifarms</a></li>
        <li><i class="fa fa-whatsapp"></i><a class="text-dark" href="https://wa.me/265882063594"> {{env('APP_PHONE')}}</a></li>
        <li><i class="fa fa-envelope"></i> {{env('APP_EMAIL')}} </li>
    </ul>
</div>


<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <ul class="header__top__widget">
                        <li><i class="fa fa-whatsapp"></i><a  target="_blank" class="text-white" href="https://wa.me/265881259210"> {{env('APP_PHONE')}}</a></li>
                        <li><i class="fa fa-envelope"></i> {{env('APP_EMAIL')}} </li>
                        <li><a   target="_blank" class="text-white" href="https://www.facebook.com/SALIRECOF"><i class="fa fa-facebook"></i> @pamthuzifarms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo d-block d-sm-block d-md-block d-lg-none d-xl-none ">
                    <a href="{{route('home')}}"><img style="width: 10%" src="/img/logo.jpg" alt=""></a>
                </div>
                <div class="header__logo d-none d-sm-none d-md-none d-lg-block d-xl-block ">
                    <a href="{{route('home')}}"><img style="width: 30%" src="/img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="header__nav">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{request()->route()->getName() == 'home'?'active':''}}"><a href="{{route('home')}}">Home</a></li>
                            <li class="{{request()->route()->getName() == 'services'?'active':''}}"><a href="{{route('services')}}">Services</a></li>
                            <li class="{{request()->route()->getName() == 'contact'?'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
                            <li class="{{request()->route()->getName() == 'about'?'active':''}}"><a href="{{route('about')}}">About</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>
<!-- Header Section End -->

@yield('content')

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="{{route('home')}}"><img style="width: 30%" class="rounded" src="/img/logo.jpg" alt=""></a>
                    </div>
                    <i class="text-white">Farming with foresight, Leading with research</i>
                    <div class="footer__widget">
                        <ul>
                            <li><a href="javascript:void;"><i class="fa fa-map-marker"></i> {{env('APP_ADDRESS')}}</a></li>
                            <li><a href="javascript:void;"><i class="fa fa-phone"></i> {{env('APP_PHONE')}}</a></li>
                            <li><a  target="_blank" href="https://wa.me/265881259210"><i class="fa fa-whatsapp"></i> {{env('APP_PHONE')}}</a></li>
                            <li><a  target="_blank" href="https://www.facebook.com/SALIRECOF"><i class="fa fa-facebook"></i> @pamthuzifarms</a></li>
                            <li><a href="javascript:void;"><i class="fa fa-envelope"></i> {{env('APP_EMAIL')}}</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Services</h5>
                    <div class="footer__widget">
                        <ul>
                            <li><a href="{{route('services')}}">Enterprise Startups</a></li>
                            <li><a href="{{route('services')}}">Feed Formulation</a></li>
                            <li><a href="{{route('services')}}">Capacity Building</a></li>
                            <li><a href="{{route('services')}}">Animal Health</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget footer__widget--address">
                    <h5>Open Hours</h5>
                    <p>We work 6 days a week, Please contact us for any inquiry.</p>
                    <ul>
                        <li>Monday - Friday:  08:00 to 16:00 with lunch break</li>
                        <li>Saturday: 09:00 to 12:00</li>
                        <li>Sunday: Closed all day</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text text-center">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://torchlightmw.com" target="_blank">Torchlight Investments</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/accordions.js"></script>
<script src="/js/main.js"></script>
@yield('footer')


</body>
</html>


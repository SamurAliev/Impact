<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta character set -->
    <meta charset="utf-8">
    <!-- mobile specific meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- site's title -->
    <title>Impact</title>
    <!-- site's icon -->
    <link rel="icon" href="{{asset('assets/img/logo/logo-phone.png')}} " type="image/x-icon">
    @yield('custom_css')

<!-- site's description -->
    <meta name="description" content="">
    <!-- site's keyword -->
    <meta name="keywords" content="">


    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- carousel -->
    <link rel='stylesheet' href='{{asset('assets/css/front.css')}}'>


</head>

<!-- =======================================================
  * Template Name: The Impact
  * Author:
  * Author URL:
  ======================================================== -->

<body>


<!-- preloader -->
{{--<div class="intro_animation">--}}
{{--    <div class="overlay">--}}
{{--        <div class="loader preloader">--}}
{{--            <div class="animate_gif">--}}
{{--                <div id="loader" style="background-image: url(assets/img/loader.gif);"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader -->


<!-- whole -->
<div class="perspective effect-rotate-left">
    <!-- container -->
    <div class="container">

        <div class="outer-nav--return"></div>
        <!-- viewport -->
        <div id="viewport" class="l-viewport">
            <!-- l-wrapper -->
            <div class="l-wrapper">


                <!-- header -->
                <header class="header">
                    <a id="navbar-brand-notebook" class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('assets/img/logo/logo-notebook.png')}}" alt="mdb logo">
                    </a>
                    <a id="navbar-brand-phone" class="navbar-brand" href="index.{{route('index')}}">
                        <img src="{{asset('assets/img/logo/logo-phone.png')}}" alt="mdb logo">
                    </a>
                    <button class="header--cta cta">оставить заявку</button>
                    <div class="navber-social&menu">
                        <div class="navbar-social">
                            <a href="tel:+998-33-388-88-10"
                               onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});">
                                <ion-icon class="call-icon call-button" name="call-outline"></ion-icon>
                            </a>
                            <a href="https://www.instagram.com/impact.uz/">
                                <ion-icon class="insta-icon" name="logo-instagram"></ion-icon>
                            </a>
                            <a href="https://t.me/impactuz">
                                <ion-icon class="telegram-icon" name="paper-plane-outline"></ion-icon>
                            </a>
                            <a href="#">
                                <ion-icon class="global-icon" name="globe-outline"></ion-icon>
                            </a>
                        </div>
                        <div class="header--nav-toggle">
                            <span></span>
                        </div>
                    </div>
                </header>
                <!-- header -->




                @yield('content')

            </div>
            <!-- l-wrapper -->
        </div>
        <!-- viewport -->
    </div>
    <!-- container -->


    <!-- outer-nav -->
    <ul class="outer-nav">
        <li class="is-active">Главная</li>
        <li>Услуги</li>
        <li>Про нас</li>
        <li>Связаться</li>
    </ul>
    <!-- outer-nav -->


</div>
<!-- whole -->


<div id="cursorBlob"></div>


<!-- icons -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<!-- carousel -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='{{asset('assets/js/front.js')}}'></script>
@yield('custom_js')

</body>

</html>

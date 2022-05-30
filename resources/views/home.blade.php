@extends('layouts.website.master')

@section('content')
<div class="content-wrapper">

    <!-- Main Slider -->

    <div class="crumina-module crumina-module-slider container-full-width">
        <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg-1 main-slider-bg-light">

                    <div class="container">
                        <div class="row table-cell">

                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

                                <div class="slider-content align-center">

                                    <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                        {{__('admin/home.home_page_title')}}

                                        <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                            <use xlink:href="#utouch-icon-arrow-left"></use>
                                        </svg>

                                        <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                            <use xlink:href="#utouch-icon-arrow-left"></use>
                                        </svg>

                                    </h1>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <div>
                                            <h5 onmouseover="this.style.color='orange'" onmouseout="this.style.color=''" style="font-weight: bold;">Getting Day Planned (GDP)</h5>
                                        </div>
                                        {{__('admin/home.home_page_content')}}
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.color='#000000'" onmouseout="this.style.color=''" href="{{route('allContributions')}}" class="btn btn--yellow btn--with-shadow">
                                            {{__('admin/home.home_page_learn-more')}}
                                        </a>

                                        <a onmouseover="this.style.borderColor='#000000'" onmouseout="this.style.borderColor=''" href="{{route('allEvents')}}" class="btn btn-border btn--with-shadow c-primary">
                                            {{__('admin/home.home_page_content3_button')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
                                    {{-- <img src="{{asset('website/img/catering.jpg')}}" style="border-radius: 15px;" width="" height="" alt="slider"> --}}
                                    <!--original: slides1.png-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide bg-2 main-slider-bg-light">

                    <div class="container table">
                        <div class="row table-cell">

                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content align-both">
                                    <h2 class="slider-content-title" data-swiper-parallax="-100">
                                        <span class="c-primary">GDP</span>
                                        {{__('admin/home.home_page_title2')}}
                                    </h2>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <span>GDP</span> {{__('admin/home.home_page_content2')}}
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.color='#0083FF'" onmouseout="this.style.color=''" href="#" class="btn btn-market btn--with-shadow">
                                            <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                                <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                            </svg>
                                            <div class="text">
                                                <span class="sup-title">Download on the</span>
                                                <span class="title">App Store</span>
                                            </div>
                                        </a>

                                        <a onmouseover="this.style.color='#0083FF'" onmouseout="this.style.color=''" href="#" class="btn btn-market btn--with-shadow">
                                            <img class="utouch-icon" src="{{asset('website/svg-icons/google-play.svg')}}" alt="google">
                                            <div class="text">
                                                <span class="sup-title">Download on the</span>
                                                <span class="title">Google Play</span>
                                            </div>
                                        </a>

                                        <img src="{{asset('website/img/balloon.png')}}">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

                    <div class="container table full-height">
                        <div class="row table-cell">
                            <div class="col-lg-6 col-sm-12 table-cell">

                                <div class="slider-content align-both">

                                    <h2 class="slider-content-title" data-swiper-parallax="-100">{{__('admin/home.home_page_title3')}}</h2>

                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        {{__('admin/home.home_page_content3')}}
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.backgroundColor ='orange'" onmouseout="this.style.backgroundColor =''" href="02_company.html" class="btn btn--lime btn--with-shadow">
                                            {{__('admin/home.home_page_content3_button')}}
                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="200">
                                    <img src="{{asset('website/img/events_image.png')}}" alt="slider">
                                    <!--original: slides2.png-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--Prev next buttons-->

            <div class="btn-prev with-bg">
                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                    <use xlink:href="#utouch-icon-arrow-left-1"></use>
                </svg>
                <svg class="utouch-icon utouch-icon-arrow-left1">
                    <use xlink:href="#utouch-icon-arrow-left1"></use>
                </svg>
            </div>

            <div class="btn-next with-bg">
                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                </svg>
                <svg class="utouch-icon utouch-icon-arrow-right1">
                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                </svg>
            </div>

        </div>
    </div>

    <!-- end main slider -->

    <!-- Info Boxes -->

    <section class="medium-padding100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('website/img/wedding.png')}}" alt="wedding">
                            <img class="cloud" src="{{asset('website/img/clouds8.png')}}" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title">Wedding Arrangement</a>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincidunt ut laoreet dolore magna aliquam.
                            </p>
                        </div>

                        {{-- <a href="#" class="btn-next">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                <use xlink:href="#utouch-icon-arrow-right-1"></use>
                            </svg>
                            <svg class="utouch-icon utouch-icon-arrow-right1">
                                <use xlink:href="#utouch-icon-arrow-right1"></use>
                            </svg>
                        </a> --}}

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('website/img/party.png')}}" alt="party">
                            <img class="cloud" src="{{asset('website/img/clouds9.png')}}" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title">Birthday Party</a>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincidunt ut laoreet dolore magna aliquam.
                            </p>
                        </div>

                        {{-- <a href="#" class="btn-next">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                <use xlink:href="#utouch-icon-arrow-right-1"></use>
                            </svg>
                            <svg class="utouch-icon utouch-icon-arrow-right1">
                                <use xlink:href="#utouch-icon-arrow-right1"></use>
                            </svg>
                        </a> --}}

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="{{asset('website/img/sushi2.png')}}" alt="food_service">
                            <img class="cloud" src="{{asset('website/img/clouds10.png')}}" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title">Food Service</a>
                            <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincidunt ut laoreet dolore magna aliquam.
                            </p>
                        </div>

                        {{-- <a href="#" class="btn-next">
                            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                <use xlink:href="#utouch-icon-arrow-right-1"></use>
                            </svg>
                            <svg class="utouch-icon utouch-icon-arrow-right1">
                                <use xlink:href="#utouch-icon-arrow-right1"></use>
                            </svg>
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... end Info Boxes -->


    <!-- Slider with vertical tabs -->

    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

        <div class="swiper-container" data-show-items="1">
            <div class="swiper-wrapper">

                <div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/barber-home.jpg')}}" style="border-radius:20px;" alt="barber">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">Barber / Coiffer</p>
                                    <h2 class="heading-title">Check out our new barbers!</h2>
                                    <div class="heading-text">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                        Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                        litterarum formas humanitatis per.
                                    </div>
                                </div>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                        <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                    </svg>
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">App Store</span>
                                    </div>
                                </a>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <img class="utouch-icon" src="{{asset('website/svg-icons/google-play.svg')}}" alt="google">
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">Google Play</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bg-orange-light bg-6" data-mh="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/')}}" alt="zaffa">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <h6 class="heading-sup-title">User Interface</h6>
                                    <h2 class="heading-title">Discover new horisons</h2>
                                    <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                        Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                        litterarum formas humanitatis per.
                                    </div>
                                </div>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                        <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                    </svg>
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">App Store</span>
                                    </div>
                                </a>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <img class="utouch-icon" src="{{asset('website/svg-icons/google-play.svg')}}" alt="google">
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">Google Play</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide bg-red bg-7" data-mh="slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/iphone3.png')}}" alt="iphone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <h6 class="heading-sup-title">User Interface</h6>
                                    <h2 class="heading-title">Discover new horisons</h2>
                                    <div class="heading-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                        Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                        litterarum formas humanitatis per.
                                    </div>
                                </div>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <svg class="utouch-icon utouch-icon-apple-logotype-1">
                                        <use xlink:href="#utouch-icon-apple-logotype-1"></use>
                                    </svg>
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">App Store</span>
                                    </div>
                                </a>

                                <a href="#" class="btn btn-market btn--with-shadow">
                                    <img class="utouch-icon" src="{{asset('website/svg-icons/google-play.svg')}}" alt="google">
                                    <div class="text">
                                        <span class="sup-title">Download on the</span>
                                        <span class="title">Google Play</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-slides slider-slides--vertical-line">
                <a href="#" class="slides-item">
                    <span class="round primary"></span>1.
                </a>

                <a href="#" class="slides-item">
                    <span class="round orange"></span>2.
                </a>

                <a href="#" class="slides-item">
                    <span class="round red"></span>3.
                </a>

            </div>
        </div>
    </section>

    <!-- ... Slider with vertical tabs -->


    <!-- Video -->

    <section class="bg-8 background-contain pt100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-heading">
                        <h6 class="heading-sup-title">Watch the video</h6>
                        <h2 class="heading-title">How <span class="c-primary">GDP</span> works</h2>
                        <p class="heading-text">
                            The video explains how the users of the website are able to communicate together on the website
                            & get every thing done through the website. A whole process functionality is made
                            (including events, negotiations, etc.) which is the pre-payment steps until reaching the final process
                            which is the payment process (for both perspectives "Customer & Supplier").
                        </p>
                    </div>
                    {{-- <a href="02_company.html" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
                        <svg class="utouch-icon utouch-icon-arrow-right1">
                            <use xlink:href="#utouch-icon-arrow-right1"></use>
                        </svg>
                        <div class="text">
                            <span class="title">Get Started Now!</span>
                        </div>
                    </a> --}}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-our-video">
                        <div class="video-thumb">
                            <img src="{{asset('website/img/video-thumb.png')}}" alt="video">
                            <a href="#" class="video-control js-popup-iframe">
                                <img src="{{asset('website/img/play.png')}}" alt="play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... end Video -->

    {{-- <!-- Info Boxes -->--}}

    {{-- <section class="bg-9 background-contain medium-padding120">--}}
    {{-- <div class="container">--}}
    {{-- <div class="row">--}}
    {{-- <div class="display-flex info-boxes">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">--}}
    {{-- <div class="info-box-image">--}}
    {{-- <img src="{{asset('website/svg-icons/chat.svg')}}" alt="chat" class="utouch-icon">--}}
    {{-- </div>--}}
    {{-- <div class="info-box-content">--}}
    {{-- <h5 class="info-box-title">Private Chat Integration</h5>--}}
    {{-- <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod--}}
    {{-- tincidunt.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="crumina-module crumina-info-box info-box--standard-round icon-right negative-margin-right150">--}}
    {{-- <div class="info-box-image">--}}
    {{-- <img src="{{asset('website/svg-icons/pictures.svg')}}" alt="chat" class="utouch-icon">--}}
    {{-- </div>--}}
    {{-- <div class="info-box-content">--}}
    {{-- <h5 class="info-box-title">Perfect Grafic View</h5>--}}
    {{-- <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam--}}
    {{-- nonummy nibh euismod.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 align-center">--}}
    {{-- <img class="particular-image" src="{{asset('website/img/image.png')}}" alt="image">--}}
    {{-- <a href="03_products.html" class="btn btn--red btn--with-shadow">--}}
    {{-- Learn More--}}
    {{-- </a>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">--}}
    {{-- <div class="info-box-image">--}}
    {{-- <img src="{{asset('website/svg-icons/clock.svg')}}" alt="chat" class="utouch-icon">--}}
    {{-- </div>--}}
    {{-- <div class="info-box-content">--}}
    {{-- <h5 class="info-box-title">Lifetime Updates</h5>--}}
    {{-- <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod--}}
    {{-- tincidunt.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="crumina-module crumina-info-box info-box--standard-round negative-margin-left150">--}}
    {{-- <div class="info-box-image">--}}
    {{-- <img src="{{asset('website/svg-icons/calendar.svg')}}" alt="chat" class="utouch-icon">--}}
    {{-- </div>--}}
    {{-- <div class="info-box-content">--}}
    {{-- <h5 class="info-box-title">Calendar Sinhronize</h5>--}}
    {{-- <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam--}}
    {{-- nonummy euismod.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </section>--}}

    {{-- <!-- ... Info Boxes -->--}}


    <!-- Counters -->

    <section class="bg-secondary-color background-contain bg-10">

        <div class="container">
            <div class="row">

                <div style="text-align:center; width: 65%; margin-left: auto; margin-right: auto; padding-top:5%;">
                    <h5 class="c-white" style="font-size:170%;">GDP</h5>
                    <p class="c-semitransparent-white" style="font-weight:bold;">
                        <em style="font-size:100%">
                            "is an awesome online service that could help many users to find the service/product they need
                            with an affordable price & also matches everyone's income level which is also a friendly
                            feature (customers). Also it helps many service (suppliers) providers to run their businesses
                            through it."
                        </em>
                    </p>
                </div>

                <div class="counters">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter c-yellow">
                                <div class="units">+</div>
                                <span data-speed="2000" data-refresh-interval="3" data-to="7850" data-from="500">7850</span>
                            </div>
                            <h5 class="counter-title">Line of codes</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="{{\App\Models\User::count()}}" data-from="1">{{\App\Models\User::count()}}</span>
                            </div>
                            <h5 class="counter-title">No. of Customers</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="{{\App\Models\User::count()}}" data-from="1">{{\App\Models\User::count()}}</span>
                            </div>
                            <h5 class="counter-title">No. of Suppliers</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="{{\App\Models\Comment::count()}}" data-from="1">{{\App\Models\Comment::count()}}</span>
                            </div>
                            <h5 class="counter-title">No. of Comments</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="{{\App\Models\Event::count()}}" data-from="1">{{\App\Models\Event::count()}}</span>
                            </div>
                            <h5 class="counter-title">No. of Events</h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- ... end  Counters -->


    {{-- <!-- FAQS Slider -->--}}

    {{-- <section class="crumina-module crumina-module-slider pt100">--}}
    {{-- <div class="container">--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12 mb30">--}}
    {{-- <div class="crumina-module crumina-heading" style="">--}}
    {{-- <h6 class="heading-sup-title">FAQ</h6>--}}
    {{-- <h2 class="heading-title">Six important questions on application</h2>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{-- <div class="swiper-container navigation-bottom" data-effect="fade">--}}
    {{-- <div class="slider-slides">--}}
    {{-- <a href="#" class="slides-item">--}}
    {{-- 1--}}
    {{-- </a>--}}

    {{-- <a href="#" class="slides-item">--}}
    {{-- 2--}}
    {{-- </a>--}}

    {{-- <a href="#" class="slides-item">--}}
    {{-- 3--}}
    {{-- </a>--}}

    {{-- <a href="#" class="slides-item">--}}
    {{-- 4--}}
    {{-- </a>--}}

    {{-- <a href="#" class="slides-item">--}}
    {{-- 5--}}
    {{-- </a>--}}

    {{-- <a href="#" class="slides-item">--}}
    {{-- 6--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-wrapper">--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/dial.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">--}}
    {{-- <h5 class="slider-faqs-title">soluta eleifend congue?</h5>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est--}}
    {{-- notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas--}}
    {{-- humanitatis.--}}
    {{-- </p>--}}
    {{-- <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>--}}
    {{-- <ul class="list list--standard">--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Gectores legere me lius quod</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Mirum est notare quam</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Zril delenit augue duis</a>--}}
    {{-- </li>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/fingerprint.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">--}}
    {{-- <h5 class="slider-faqs-title">Mirum quam gothica?</h5>--}}
    {{-- <p>Ilaritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum--}}
    {{-- est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum--}}
    {{-- formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium--}}
    {{-- lectorum.--}}
    {{-- </p>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <ul class="list list--standard">--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Gectores legere me lius quod</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Mirum est notare quam</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Zril delenit augue duis</a>--}}
    {{-- </li>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <ul class="list list--standard">--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Mirum est notare quam</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Zril delenit augue duis</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Gectores legere me lius quod</a>--}}
    {{-- </li>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/devices.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <h5 class="slider-faqs-title">Investigationes quod lectores?</h5>--}}
    {{-- <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Claritas est--}}
    {{-- etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare--}}
    {{-- quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas--}}
    {{-- humanitatis.--}}
    {{-- </p>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard">--}}
    {{-- <div class="info-box-image display-flex">--}}
    {{-- <svg class="utouch-icon utouch-icon-checked">--}}
    {{-- <use xlink:href="#utouch-icon-checked"></use>--}}
    {{-- </svg>--}}
    {{-- <h6 class="info-box-title">Quick Settings</h6>--}}
    {{-- </div>--}}
    {{-- <p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui--}}
    {{-- nunc nobis videntur parum clari.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard">--}}
    {{-- <div class="info-box-image display-flex">--}}
    {{-- <svg class="utouch-icon utouch-icon-checked">--}}
    {{-- <use xlink:href="#utouch-icon-checked"></use>--}}
    {{-- </svg>--}}
    {{-- <h6 class="info-box-title">Looks Perfect</h6>--}}
    {{-- </div>--}}
    {{-- <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/payment-method.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">--}}
    {{-- <h5 class="slider-faqs-title">Duis autem vel eum iriure?</h5>--}}
    {{-- <p class="weight-bold">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum--}}
    {{-- formas humanitatis. Gest etiam processus dynamicus, qui sequitur.--}}
    {{-- </p>--}}
    {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum--}}
    {{-- est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum--}}
    {{-- formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.--}}
    {{-- </p>--}}
    {{-- <a href="03_products.html" class="btn btn-border btn--with-shadow c-secondary">--}}
    {{-- Learn More--}}
    {{-- </a>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/chat1.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">--}}
    {{-- <h5 class="slider-faqs-title">wisi minim veniam, quis nostrud?</h5>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium--}}
    {{-- lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,--}}
    {{-- anteposuerit litterarum formas humanitatis.--}}
    {{-- </p>--}}
    {{-- <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>--}}
    {{-- <div class="play-with-title">--}}
    {{-- <a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">--}}
    {{-- <img src="{{asset('website/img/play.png')}}" alt="play">--}}
    {{-- </a>--}}
    {{-- <h6 class="play-title">Watch the video of instruction</h6>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">--}}
    {{-- <div class="slider-faqs-thumb">--}}
    {{-- <img class="utouch-icon" src="{{asset('website/svg-icons/tap.svg')}}" alt="image">--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">--}}
    {{-- <h5 class="slider-faqs-title">Eodem typi nunc videntur?</h5>--}}

    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium--}}
    {{-- lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,--}}
    {{-- anteposuerit litterarum formas humanitatis.--}}
    {{-- </p>--}}
    {{-- <p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>--}}
    {{-- <ul class="list list--standard">--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Mirum est notare quam</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Zril delenit augue duis</a>--}}
    {{-- </li>--}}
    {{-- <li>--}}
    {{-- <svg class="utouch-icon utouch-icon-correct-symbol-1">--}}
    {{-- <use xlink:href="#utouch-icon-correct-symbol-1"></use>--}}
    {{-- </svg>--}}
    {{-- <a href="#">Gectores legere me lius quod</a>--}}
    {{-- </li>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- </div>--}}

    {{-- </div>--}}

    {{-- <!--Prev next buttons-->--}}

    {{-- <div class="btn-slider-wrap navigation-left-bottom">--}}

    {{-- <div class="btn-prev">--}}
    {{-- <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">--}}
    {{-- <use xlink:href="#utouch-icon-arrow-left-1"></use>--}}
    {{-- </svg>--}}
    {{-- <svg class="utouch-icon utouch-icon-arrow-left1">--}}
    {{-- <use xlink:href="#utouch-icon-arrow-left1"></use>--}}
    {{-- </svg>--}}
    {{-- </div>--}}

    {{-- <div class="btn-next">--}}
    {{-- <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">--}}
    {{-- <use xlink:href="#utouch-icon-arrow-right-1"></use>--}}
    {{-- </svg>--}}
    {{-- <svg class="utouch-icon utouch-icon-arrow-right1">--}}
    {{-- <use xlink:href="#utouch-icon-arrow-right1"></use>--}}
    {{-- </svg>--}}
    {{-- </div>--}}

    {{-- </div>--}}

    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </section>--}}

    {{-- <!-- ... end FAQS Slider -->--}}


    {{-- <!-- Info Boxes -->--}}

    {{-- <section class="crumina-module crumina-module-slider bg-blue-lighteen background-contain bg-11 medium-padding100">--}}
    {{-- <div class="container">--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">--}}
    {{-- <div class="crumina-module crumina-heading">--}}
    {{-- <h6 class="heading-sup-title">Screenshots</h6>--}}
    {{-- <h2 class="heading-title">Beautiful interface</h2>--}}
    {{-- <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem--}}
    {{-- consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,--}}
    {{-- anteposuerit litterarum formas humanitatis per est usus legentis in iis qui facit eorum--}}
    {{-- claritatem.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- <div class="row">--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard">--}}
    {{-- <div class="info-box-image display-flex">--}}
    {{-- <svg class="utouch-icon utouch-icon-checked">--}}
    {{-- <use xlink:href="#utouch-icon-checked"></use>--}}
    {{-- </svg>--}}
    {{-- <h6 class="info-box-title">Quick Settings</h6>--}}
    {{-- </div>--}}
    {{-- <p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui--}}
    {{-- nunc nobis videntur parum clari.--}}
    {{-- </p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">--}}
    {{-- <div class="crumina-module crumina-info-box info-box--standard">--}}
    {{-- <div class="info-box-image display-flex">--}}
    {{-- <svg class="utouch-icon utouch-icon-checked">--}}
    {{-- <use xlink:href="#utouch-icon-checked"></use>--}}
    {{-- </svg>--}}
    {{-- <h6 class="info-box-title">Looks Perfect</h6>--}}
    {{-- </div>--}}
    {{-- <p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}

    {{-- <div class="col-lg-5 col-lg-offset-1 col-md-12 col-md-offset-0 col-sm-12 col-xs-12">--}}
    {{-- <div class="swiper-container pagination-bottom slider-tripple-right-image" data-show-items="1" data-effect="coverflow" data-centered-slider="false" data-stretch="170" data-depth="195">--}}
    {{-- <div class="swiper-wrapper">--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <img src="{{asset('website/img/img-slide1.png')}}" alt="slide">--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <img src="{{asset('website/img/img-slide1.png')}}" alt="slide">--}}
    {{-- </div>--}}
    {{-- <div class="swiper-slide">--}}
    {{-- <img src="{{asset('website/img/img-slide1.png')}}" alt="slide">--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- <!-- If we need pagination -->--}}
    {{-- <div class="swiper-pagination"></div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </div>--}}
    {{-- </section>--}}

    {{-- <!-- ... end Info Boxes -->--}}


    <!-- Pricing Tables -->

    {{-- <section class="background-contain bg-13 medium-padding100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12 mb60">
                    <div class="crumina-module crumina-heading align-center">
                        <h6 class="heading-sup-title">Our Pricing Plans</h6>
                        <h2 class="heading-title">Choose the product that you really need!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing-wrap">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard">
                            <div class="main-pricing-content">
                                <h2 class="h1 rate">$<span class="price">0</span></h2>
                                <h5 class="pricing-title">Freebie Plan</h5>

                                <div class="pricing-line bg-green"></div>

                                <p class="pricing-description">Mirum est notare quam littera gothica, quam nunc putamus parum.</p>

                                <p class="sub-description">Ut wisi enim ad minim veniam, nostrud ullamcorper.</p>

                            </div>

                            <div class="bg-pricing-content bg-green">
                                <a href="15_pricing_tables.html" class="h6 title">Get trial version</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard main-plan">
                            <div class="main-pricing-content">
                                <h2 class="h1 rate">$<span class="price">49</span></h2>
                                <h5 class="pricing-title">Premium Plan</h5>

                                <div class="pricing-line bg-pamaranch"></div>

                                <p class="pricing-description">Claritas est etiam processus dynamicus, qui sequitur legere me lius quod.</p>

                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        Unlimited Free Update
                                    </li>
                                    <li class="position-item">
                                        Unlimited Disk Dreator
                                    </li>
                                    <li class="position-item">
                                        Unlimited User Support
                                    </li>
                                    <li class="position-item">
                                        Money Transfer System
                                    </li>
                                    <li class="position-item">
                                        Unlimited Support
                                    </li>
                                </ul>

                                <p class="sub-description">Ut wisi enim ad minim veniam, nostrud ullamcorper.</p>
                            </div>

                            <div class="bg-pricing-content bg-pamaranch">
                                <a href="#" class="h6 title">Become a member</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-pricing-tables-item pricing-tables-item-standard">
                            <div class="main-pricing-content">
                                <h2 class="h1 rate">$<span class="price">29</span></h2>
                                <h5 class="pricing-title">Business Plan</h5>

                                <div class="pricing-line bg-red"></div>

                                <p class="pricing-description">Investigationes demonstraverunt lectores legere.</p>

                                <ul class="pricing-tables-position">
                                    <li class="position-item del">
                                        Unlimited Free Update
                                    </li>
                                    <li class="position-item">
                                        Unlimited Disk Dreator
                                    </li>
                                    <li class="position-item">
                                        Unlimited User Support
                                    </li>
                                    <li class="position-item del">
                                        Money Transfer System
                                    </li>
                                    <li class="position-item">
                                        Unlimited Support
                                    </li>
                                </ul>

                            </div>

                            <div class="bg-pricing-content bg-red">
                                <a href="#" class="h6 title">Buy It Now!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ... end Pricing Tables -->


    <!-- Testimonials -->

    <section class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                    <div class="swiper-container" data-effect="fade">
                        <div class="swiper-wrapper">

                            <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                <div class="testimonial-img-author" data-swiper-parallax="-100">
                                    <img src="{{asset('website/img/testimonial1.png')}}" alt="testimonial">
                                </div>

                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>

                                <h6 class="testimonial-text" data-swiper-parallax="-300">
                                    Using this website was a very good experience. It eased the arrangement process of my birthday party
                                    this year in everything such as getting the right cooks with an affordable price.
                                    It was one of the most things that i really liked here in this website
                                    which is the negotiation about the service's price with the suppliers.
                                </h6>

                                <div class="author-info-wrap" data-swiper-parallax="-100">

                                    <div class="author-info">
                                        <a href="#" class="h6 author-name">Mohamed El-haddad</a>
                                        <div class="author-company">Professor, 45 years old</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                <div class="testimonial-img-author" data-swiper-parallax="-100">
                                    <img src="{{asset('website/img/testimonial2.png')}}" alt="avatar">
                                </div>

                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>

                                <h6 class="testimonial-text" data-swiper-parallax="-300">
                                    I would recommend anyone to use this website if it's hard to find a suitable service with an affordable price
                                    in the real life world with the traditional way. in this website that the suppliers provides many services
                                    with a variety of different categories. It actually saved my money & time before when i was searching
                                    for a dress to buy to attend my best friend's party.
                                </h6>

                                <div class="author-info-wrap" data-swiper-parallax="-100">

                                    <div class="author-info">
                                        <a href="#" class="h6 author-name">Reham Kouta</a>
                                        <div class="author-company">Teacher Assistance, 33 years old</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                <div class="testimonial-img-author" data-swiper-parallax="-100">
                                    <img src="{{asset('website/img/testimonial3.png')}}" alt="avatar">
                                </div>

                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>

                                <h6 class="testimonial-text" data-swiper-parallax="-300">
                                    It was a delight experience since i used this website and i am still using it actually.
                                    Most of my men suits that were already bought are from suppliers from this website.
                                </h6>

                                <div class="author-info-wrap" data-swiper-parallax="-100">

                                    <div class="author-info">
                                        <a href="#" class="h6 author-name">Khaled Badran</a>
                                        <div class="author-company">Professor, 52 years old</div>
                                    </div>

                                </div>
                            </div>

                            <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                <div class="testimonial-img-author" data-swiper-parallax="-100">
                                    <img src="{{asset('website/img/testimonial4.png')}}" alt="avatar">
                                </div>

                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <span class="fa fa-star checked" style="color: orange;"></span>

                                <h6 class="testimonial-text" data-swiper-parallax="-300">
                                    I don't usually use online shopping/procurement but since my friend told me about this website
                                    i registered in it and tried it and it was really easy and helpful experience.
                                    Also i like the fact that customers are able to negotiate with suppliers
                                    to make a deal about the price of the transaction that will be done
                                    which is actually so friendly & comfortable for both the buyer and the seller.
                                </h6>

                                <div class="author-info-wrap" data-swiper-parallax="-100">

                                    <div class="author-info">
                                        <a href="#" class="h6 author-name">Menna Hani</a>
                                        <div class="author-company">Teacher Assistance, 27 years old</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Prev next buttons-->

        <div class="btn-prev">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                <use xlink:href="#utouch-icon-arrow-left-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-left1">
                <use xlink:href="#utouch-icon-arrow-left1"></use>
            </svg>
        </div>

        <div class="btn-next">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                <use xlink:href="#utouch-icon-arrow-right-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-right1">
                <use xlink:href="#utouch-icon-arrow-right1"></use>
            </svg>
        </div>
    </section>

    <!-- ... end Testimonials -->

</div>
@endsection


@section('script')
<!-- jQuery-scripts for Modules (Send Message) -->
<script src="{{asset('website/modules/forms/src/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('website/modules/forms/src/js/sweetalert2.all.js')}}"></script>
<script src="{{asset('website/modules/forms/src/js/scripts.js')}}"></script>
<!-- /jQuery-scripts for Modules (Send Message) -->

@endsection
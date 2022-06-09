@extends('layouts.website.master')

@section('content')
<div class="content-wrapper">

    <!-- Carousel Slider Starts -->

    {{-- <div class="slider-111">
        <div id="carouselExampleCaptions" class="carousel slide sliders" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{asset('website/img/catering.jpg')}}" class="d-block w-100 Carousel" style="height: 83vh; opacity: 0.7;" alt="...">
    <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 caption-111">
        <h3><img class="icon-111" src="https://img.icons8.com/ios/50/000000/conference.png" />Citizens Portal</h3>
        <p>Citizen Portal Services</p>
        <a class="btn button-111" href="#">Sign In</a>
        <a class="btn button-111" href="#">Sign Up</a>
    </div>
</div>

<div class="carousel-item">
    <img src="{{asset('website/img/slider2.jpg')}}" class="d-block w-100" style="height: 83vh; opacity: 0.5;" alt="...">
    <div class="carousel-caption d-none d-md-block position-absolute bottom-50 end-50 caption-111">
        <h3><img class="icon-111" src="https://img.icons8.com/ios/50/000000/scales.png" />Lawyers Portal</h3>
        <p>Lawyer Portal Services</p>
        <a class="btn button-111" href="#">Sign In</a>
        <a class="btn button-111" href="#">Sign Up</a>
    </div>
</div>

<div class="carousel-item">
    <img src="{{asset('website/img/slider3.jpg')}}" class="d-block w-100" style="height: 83vh; opacity: 0.7;" alt="...">
    <div class="carousel-caption d-none d-md-block position-absolute top-50 start-50 caption-111">
        <h3><img class="icon-111" src="https://img.icons8.com/ios/50/000000/court-judge.png" />Judges Portal</h3>
        <p>Judges Portal Services</p>
        <a class="btn button-111" href="#">Sign In</a>
        <a class="btn button-111" href="#">Sign Up</a>
    </div>
</div>

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
</div> --}}

<!-- Carousel Slider Ends -->

<!-- Start Main Slider -->

<div class="crumina-module crumina-module-slider container-full-width">
    <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade" style="cursor: grabbing; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/catering-2.jpg')}}); background-repeat: no-repeat; background-size: 100% auto;">
        <div class="swiper-wrapper">
            <div class="swiper-slide main-slider-bg-light">

                <div class="container table">
                    <div class="row table-cell">

                        <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">
                            <!--first-main-slider-show css: border: double 5px rgba(255, 255, 255, 0.65); box-shadow:10px 10px 10px #000; -->

                            <div class="slider-content align-center">

                                <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                    <span style="color: #F89522; font-size:50px;">{{__('admin/home.home_page_title')}}</span>
                                </h1>

                                <h6 class="slider-content-text" data-swiper-parallax="-200"">
                                    <div>
                                        <h5 style=" font-size:30px; font-weight: bold; color: #FFFEF7; cursor: context-menu;">Getting Day Planned (GDP)</h5>
                            </div>
                            <span style="color: #FFFEF7; font-size:20px;">{{__('admin/home.home_page_content')}}</span>
                            </h6>

                            <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                <a onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'" href="#" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;">
                                    {{__('admin/home.home_page_learn-more')}}
                                </a>

                                <a onmouseover="this.style.color='#FFFEF7'" onmouseout="this.style.color='#F89522'" href="{{route('allContributions')}}" class="btn btn-border btn--with-shadow" style="border-color:#F89522; color: #F89522; text-decoration:bold;">
                                    Contributions
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="swiper-slide main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/friends-2.jpg')}}); background-repeat: no-repeat; background-size: 100% auto;">

            <div class="swiper-wrapper">
                <div class="swiper-slide main-slider-bg-light">

                    <div class="container table">
                        <div class="row table-cell">

                            <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">
                                <!--first-main-slider-show css: border: double 5px rgba(255, 255, 255, 0.65); box-shadow:10px 10px 10px #000; -->

                                <div class="slider-content align-center">

                                    <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                        <span style="color: #F89522; font-size:60px;">Let us help</span></br>
                                        <span style="color: #FFFEF7; font-size:60px;">You Create</span>
                                    </h1>

                                    <h6 class="slider-content-text" data-swiper-parallax="-200"">

                                <span style=" color: #FFFEF7; font-size:20px;">Planning a Wedding, Proposal, or Event in our busy city is not easy
                                        , and it takes skills "and time" to make it all look easy-going</span>
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'" href="{{route('allContributions')}}" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;">
                                            Check our categories
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide thumb-left main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/sparks2.jpg')}}); background-repeat: no-repeat; background-size: 100% auto;">

            <div class="container table full-height">
                <div class="row table-cell">
                    <div class="col-lg-6 col-sm-12 table-cell">

                        <div class="slider-content align-both">

                            <h2 class="slider-content-title" data-swiper-parallax="-100" style="color: #F89522;">{{__('admin/home.home_page_title3')}}</h2>

                            <h6 class="slider-content-text" data-swiper-parallax="-200" style="color: #FFFEF7;">
                                {{__('admin/home.home_page_content3')}}
                            </h6>

                            <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                <a onmouseover="this.style.backgroundColor ='6D4A23'" onmouseout="this.style.backgroundColor ='F89522'" href="02_company.html" class="btn btn--lime btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;">
                                    {{__('admin/home.home_page_content3_button')}}
                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-12 table-cell">
                        <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="200">
                            <img src="{{asset('website/img/events_image.png')}}" alt="slider" style="height:600px ;">

                            <!-- original: slides2.png -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Prev next buttons-->

    <div class="btn-prev with-bg" style="background-color: #F89522;">
        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
            <use xlink:href="#utouch-icon-arrow-left-1"></use>
        </svg>
        <svg class="utouch-icon utouch-icon-arrow-left1">
            <use xlink:href="#utouch-icon-arrow-left1"></use>
        </svg>
    </div>

    <div class="btn-next with-bg" style="background-color: #F89522;">
        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
            <use xlink:href="#utouch-icon-arrow-right-1"></use>
        </svg>
        <svg class="utouch-icon utouch-icon-arrow-right1">
            <use xlink:href="#utouch-icon-arrow-right1"></use>
        </svg>
    </div>

</div>
</div>

<!-- End Main Slider -->


<!-- Info Boxes -->

<section id="suppliers-services-home-page" class="crumina-module crumina-module-slider medium-padding100" style="background-color: rgba(241, 234, 225, 0.962)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
                <div class="crumina-module crumina-heading align-center">
                    <h4 class="heading-title">Check Our Suppliers' Services</h4>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="swiper-container pagination-bottom" data-show-items="4">
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                        <div class="swiper-slide">
                            
                            <div class="crumina-module crumina-info-box info-box--time-line">

                                <div class="info-box-image bg-secondary-color" style="{{'background-color: '.$category->color}};"> <!-- bg-color from DB for icon -->
                                    <img src="{{$category->icon}}"> <!--icon from DB-->
                                    <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                        <use xlink:href="#utouch-icon-dot-arrow"></use>
                                    </svg>
                                </div>

                                <div class="info-box-content">
                                    <h6 class="timeline-year c-secondary">{{$category->name}}</h6>
                                    {{-- <a href="#" class="h6 info-box-title">Lorem</a> --}}
                                    <p class="info-box-text">
                                        {!! $category->content !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!--Prev next buttons-->

                    <div class="btn-slider-wrap navigation-center-bottom">

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

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="medium-padding100">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">
                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('website/img/wedding.png')}}" alt="wedding">
                        <img class="cloud" src="{{asset('website/img/clouds8.png')}}" alt="cloud">
                    </div>
                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title" style="cursor: context-menu;">{{__('admin/home.service1')}}</a>
                        <p class="info-box-text">
                            {{__('admin/home.service1_content')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">
                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('website/img/party.png')}}" alt="party">
                        <img class="cloud" src="{{asset('website/img/clouds9.png')}}" alt="cloud">
                    </div>
                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title" style="cursor: context-menu;">{{__('admin/home.service2')}}</a>
                        <p class="info-box-text">
                            {{__('admin/home.service2_content')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-info-box info-box--standard-hover">
                    <div class="info-box-image">
                        <img class="utouch-icon" src="{{asset('website/img/sushi2.png')}}" alt="food_service">
                        <img class="cloud" src="{{asset('website/img/clouds10.png')}}" alt="cloud">
                    </div>
                    <div class="info-box-content">
                        <a href="#" class="h5 info-box-title" style="cursor: context-menu;">{{__('admin/home.service3')}}</a>
                        <p class="info-box-text">
                            {{__('admin/home.service3_content')}}
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section> --}}

<!-- ... end Info Boxes -->


<!-- Slider with vertical tabs -->

<section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

    <div class="swiper-container" data-show-items="1">
        <div class="swiper-wrapper">

            <div class="swiper-slide " data-mh="slide" style="background-color:#273842 ;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('website/img/prom.jpg')}}" style="border-radius:5%;" alt="Prom Prep">
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading custom-color c-white">
                                <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">Graduation / Parties</p>
                                <h2 class="heading-title">Breaking new Graduation offers are on doors, Check them out!</h2>
                                <div class="heading-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                    litterarum formas humanitatis per.
                                </div>
                            </div>

                            <a href="#" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#C52A0C'" onmouseout="this.style.color=''">
                                <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/40/undefined/external-graduation-cap-learning-xnimrodx-lineal-color-xnimrodx-2.png" />
                                <div class="text" style="padding-left:5px ;">
                                    <span class="sup-title">Check now on</span>
                                    <span class="title">Parties</span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide " data-mh="slide" style="background-color: #79543D;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('website/img/fireworks.jpg')}}" style="border-radius:5%;" alt="fireworks">
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

                            <a href="#" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='orange'" onmouseout="this.style.color=''">
                                <img src="https://img.icons8.com/external-basicons-color-edtgraphics/40/undefined/external-fireworks-birthday-edtim-outline-color-edtim-2.png" />
                                <div class="text" style="padding-left:5px ;">
                                    <span class="sup-title">Check now on</span>
                                    <span class="title">Decorations</span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide " data-mh="slide" style="background-color: #CC969D;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="slider-tabs-vertical-thumb">
                                <img src="{{asset('website/img/roses.jpg')}}" style="border-radius:20px;" alt="barber">
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

                            <a href="#" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#A16B78'" onmouseout="this.style.color=''">
                                <img src="https://img.icons8.com/external-photo3ideastudio-flat-photo3ideastudio/40/undefined/external-rose-supermarket-photo3ideastudio-flat-photo3ideastudio.png" />
                                <div class="text">
                                    <span class="sup-title">Check now on</span>
                                    <span class="title">Flowers</span>
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
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title">{{__('admin/home.how_it_works_video')}}</h6>
                    <h2 class="heading-title">{{__('admin/home.how_it_works1')}} <span class="c-primary">GDP</span> {{__('admin/home.how_it_works2')}}</h2>
                    <p class="heading-text" style="font-size:110%; font-family: Arial, Helvetica, sans-serif;">
                        {{__('admin/home.how_it_works_content')}} "<strong><u>{{__('admin/home.customer_title')}}</u></strong>" & "<strong><u>{{__('admin/home.supplier_title')}}</u></strong>").
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

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom:5%;">
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

            <div style="text-align:center; width: 82%; margin-left: auto; margin-right: auto; padding-top:5%;">
                <h5 class="c-white" style="font-size:200%;">{{__('admin/home.what_s')}} GDP{{__('admin/home.question_mark')}}</h5>
                <p class="c-semitransparent-white" style="font-weight:bold;">
                    <em style="font-size:120%; font-family:Arial, Helvetica, sans-serif;">
                        <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span><br>
                        <span style="color:rgb(208, 208, 208);">{{__('admin/home.middle_section')}}</span> <br>
                        <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span><br>
                        "{{__('admin/home.middle_section_content')}}"
                    </em>
                </p>
            </div>

            <div class="counters">

                {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers counter c-yellow">
                                <div class="units">+</div>
                                <span data-speed="2000" data-refresh-interval="3" data-to="7850" data-from="500">7850</span>
                            </div>
                            <h5 class="counter-title" style="font-size: 200%; color:#939FAD;">Line of codes</h5>
                        </div>
                    </div> --}}

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>
                                {{$no_of_customers}}
                                <!---- from the HomeController of the main website -> 
                                                                   counting users where user_type is equal to "customer" ---->
                            </span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_customers')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>
                                {{$no_of_suppliers}}
                                <!---- from the HomeController of the main website -> 
                                                                   counting users where user_type is equal to "supplier" ---->
                            </span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_suppliers')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>
                                {{\App\Models\Comment::count()}}
                            </span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_comments')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>
                                {{\App\Models\Event::count()}}
                            </span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_events')}}</h5>
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

        <div style="text-align:center; padding-bottom:1%;">
            <h5 class="c-black" style="font-size:200%;"><u>{{ __('admin/home.testimonials')}}</u></h5>
        </div>

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
                                    <div class="author-company">Professor, 40 years old</div>
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
                                    <div class="author-company">Teacher Assistance, 34 years old</div>
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
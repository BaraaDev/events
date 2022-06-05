

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">

    <!-- Main Slider -->

    <div class="crumina-module crumina-module-slider container-full-width" style="cursor: grabbing;">
        <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" style="background-color: rgb(211, 227, 235);">
                <!-- Slides -->
                <div class="swiper-slide main-slider-bg-light">

                    <div class="container table">
                        <div class="row table-cell">

                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

                                <div class="slider-content align-center">

                                    <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                        <?php echo e(__('admin/home.home_page_title')); ?>


                                        <svg class="first-decoration utouch-icon utouch-icon-arrow-left">
                                            <use xlink:href="#utouch-icon-arrow-left"></use>
                                        </svg>

                                        <svg class="second-decoration utouch-icon utouch-icon-arrow-left">
                                            <use xlink:href="#utouch-icon-arrow-left"></use>
                                        </svg>

                                    </h1>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <div>
                                            <h5 onmouseover="this.style.color='orange'" onmouseout="this.style.color=''" style="font-weight: bold; cursor: context-menu;">Getting Day Planned (GDP)</h5>
                                        </div>
                                        <?php echo e(__('admin/home.home_page_content')); ?>

                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.color='#000000'" onmouseout="this.style.color=''" href="<?php echo e(route('allContributions')); ?>" class="btn btn--yellow btn--with-shadow">
                                            <?php echo e(__('admin/home.home_page_learn-more')); ?>

                                        </a>

                                        <a onmouseover="this.style.borderColor='#000000'" onmouseout="this.style.borderColor=''" href="<?php echo e(route('allEvents')); ?>" class="btn btn-border btn--with-shadow c-primary">
                                            <?php echo e(__('admin/home.home_page_content3_button')); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
                                    
                                    <!--original: slides1.png-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-slide main-slider-bg-light" style="background-color: rgb(246, 224, 201);">

                    <div class="container table">
                        <div class="row table-cell">

                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content align-both">
                                    <h2 class="slider-content-title" data-swiper-parallax="-100">
                                        <span class="c-primary">GDP</span>
                                        <?php echo e(__('admin/home.home_page_title2')); ?>

                                    </h2>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <span>GDP</span> <?php echo e(__('admin/home.home_page_content2')); ?>

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
                                            <img class="utouch-icon" src="<?php echo e(asset('website/svg-icons/google-play.svg')); ?>" alt="google">
                                            <div class="text">
                                                <span class="sup-title">Download on the</span>
                                                <span class="title">Google Play</span>
                                            </div>
                                        </a>

                                        <img src="<?php echo e(asset('website/img/balloon.png')); ?>">

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide thumb-left main-slider-bg-light" style="background-color: rgb(238, 247, 214);">

                    <div class="container table full-height">
                        <div class="row table-cell">
                            <div class="col-lg-6 col-sm-12 table-cell">

                                <div class="slider-content align-both">

                                    <h2 class="slider-content-title" data-swiper-parallax="-100"><?php echo e(__('admin/home.home_page_title3')); ?></h2>

                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <?php echo e(__('admin/home.home_page_content3')); ?>

                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

                                        <a onmouseover="this.style.backgroundColor ='orange'" onmouseout="this.style.backgroundColor =''" href="02_company.html" class="btn btn--lime btn--with-shadow">
                                            <?php echo e(__('admin/home.home_page_content3_button')); ?>

                                        </a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="200">
                                    <img src="<?php echo e(asset('website/img/events_image.png')); ?>" alt="slider">
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
                            <img class="utouch-icon" src="<?php echo e(asset('website/img/wedding.png')); ?>" alt="wedding">
                            <img class="cloud" src="<?php echo e(asset('website/img/clouds8.png')); ?>" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title"><?php echo e(__('admin/home.service1')); ?></a>
                            <p class="info-box-text">
                                <?php echo e(__('admin/home.service1_content')); ?>

                            </p>
                        </div>

                        

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="<?php echo e(asset('website/img/party.png')); ?>" alt="party">
                            <img class="cloud" src="<?php echo e(asset('website/img/clouds9.png')); ?>" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title"><?php echo e(__('admin/home.service2')); ?></a>
                            <p class="info-box-text">
                                <?php echo e(__('admin/home.service2_content')); ?>

                            </p>
                        </div>

                        

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-info-box info-box--standard-hover">

                        <div class="info-box-image">
                            <img class="utouch-icon" src="<?php echo e(asset('website/img/sushi2.png')); ?>" alt="food_service">
                            <img class="cloud" src="<?php echo e(asset('website/img/clouds10.png')); ?>" alt="cloud">
                        </div>

                        <div class="info-box-content">
                            <a href="#" class="h5 info-box-title"><?php echo e(__('admin/home.service3')); ?></a>
                            <p class="info-box-text">
                                <?php echo e(__('admin/home.service3_content')); ?>

                            </p>
                        </div>

                        

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
                                    <img src="<?php echo e(asset('website/img/barber-home.jpg')); ?>" style="border-radius:20px;" alt="barber">
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
                                    <img class="utouch-icon" src="<?php echo e(asset('website/svg-icons/google-play.svg')); ?>" alt="google">
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
                                    <img src="<?php echo e(asset('website/img/')); ?>" alt="zaffa">
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
                                    <img class="utouch-icon" src="<?php echo e(asset('website/svg-icons/google-play.svg')); ?>" alt="google">
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
                                    <img src="<?php echo e(asset('website/img/iphone3.png')); ?>" alt="iphone">
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
                                    <img class="utouch-icon" src="<?php echo e(asset('website/svg-icons/google-play.svg')); ?>" alt="google">
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
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <div class="crumina-module crumina-heading">
                        <h6 class="heading-sup-title">Watch the video</h6>
                        <h2 class="heading-title">How <span class="c-primary">GDP</span> works?</h2>
                        <p class="heading-text" style="font-size:110%; font-family: Arial, Helvetica, sans-serif;">
                            The video explains how the users of the website are able to communicate together on the website
                            & get every thing done through the website. A whole process functionality is made
                            (including events, negotiations, etc.) which is the pre-payment steps until reaching the final process
                            which is the payment process (for both perspectives "<strong><u>Customer</u></strong>" & "<strong><u>Supplier</u></strong>").
                        </p>
                    </div>
                    
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom:5%;">
                    <div class="crumina-module crumina-our-video">
                        <div class="video-thumb">
                            <img src="<?php echo e(asset('website/img/video-thumb.png')); ?>" alt="video">
                            <a href="#" class="video-control js-popup-iframe">
                                <img src="<?php echo e(asset('website/img/play.png')); ?>" alt="play">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ... end Video -->

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


    <!-- Counters -->

    <section class="bg-secondary-color background-contain bg-10">

        <div class="container">
            <div class="row">

                <div style="text-align:center; width: 82%; margin-left: auto; margin-right: auto; padding-top:5%;">
                    <h5 class="c-white" style="font-size:200%;">What's GDP?</h5>
                    <p class="c-semitransparent-white" style="font-weight:bold;">
                        <em style="font-size:120%; font-family:Arial, Helvetica, sans-serif;">
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span><br>
                            <span style="color:rgb(208, 208, 208);">the website represents the power of negotiation between the customers and the suppliers</span> <br>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span><br>
                            "It's an awesome online service that could help many users to find the service/product they need
                            with an affordable price & also matches everyone's income level which is also a friendly
                            feature (customers). Also it helps many service providers (suppliers) to run their businesses 
                            through it smoothly and much better."
                        </em>
                    </p>
                </div>

                <div class="counters">

                    
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="<?php echo e(\App\Models\User::count()); ?>" data-from="1">
                                        <?php echo e(\App\Models\User::count()); ?>

                                </span>
                            </div>
                            <h5 class="counter-title"><?php echo e(__('admin/home.number_of_customers')); ?></h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="<?php echo e(\App\Models\User::count()); ?>" data-from="1"><?php echo e(\App\Models\User::count()); ?></span>
                            </div>
                            <h5 class="counter-title"><?php echo e(__('admin/home.number_of_suppliers')); ?></h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="<?php echo e(\App\Models\Comment::count()); ?>" data-from="1"><?php echo e(\App\Models\Comment::count()); ?></span>
                            </div>
                            <h5 class="counter-title"><?php echo e(__('admin/home.number_of_comments')); ?></h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="crumina-module crumina-counter-item">
                            <div class="counter-numbers c-yellow">
                                <span data-speed="2000" data-refresh-interval="2" data-to="<?php echo e(\App\Models\Event::count()); ?>" data-from="1"><?php echo e(\App\Models\Event::count()); ?></span>
                            </div>
                            <h5 class="counter-title"><?php echo e(__('admin/home.number_of_events')); ?></h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- ... end  Counters -->


    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    

    
    
    

    
    
    

    
    
    

    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    

    

    

    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    

    

    
    
    
    
    

    


    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


    <!-- Pricing Tables -->

    

    <!-- ... end Pricing Tables -->


    <!-- Testimonials -->

    <section class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">
        <div class="container">

            <div style="text-align:center; padding-bottom:1%;">
                <h5 class="c-black" style="font-size:200%;"><u>Testimonials</u></h5>
            </div>

            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                    <div class="swiper-container" data-effect="fade">
                        <div class="swiper-wrapper">

                            <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                <div class="testimonial-img-author" data-swiper-parallax="-100">
                                    <img src="<?php echo e(asset('website/img/testimonial1.png')); ?>" alt="testimonial">
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
                                    <img src="<?php echo e(asset('website/img/testimonial2.png')); ?>" alt="avatar">
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
                                    <img src="<?php echo e(asset('website/img/testimonial3.png')); ?>" alt="avatar">
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
                                    <img src="<?php echo e(asset('website/img/testimonial4.png')); ?>" alt="avatar">
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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<!-- jQuery-scripts for Modules (Send Message) -->
<script src="<?php echo e(asset('website/modules/forms/src/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/modules/forms/src/js/sweetalert2.all.js')); ?>"></script>
<script src="<?php echo e(asset('website/modules/forms/src/js/scripts.js')); ?>"></script>
<!-- /jQuery-scripts for Modules (Send Message) -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/home.blade.php ENDPATH**/ ?>
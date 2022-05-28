<?php $__env->startSection('content'); ?>
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
                                                <h5 onmouseover="this.style.color='orange'" onmouseout="this.style.color=''" style="font-weight: bold;">Getting Day Planned (GDP)</h5>
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
                                        <img src="<?php echo e(asset('website/img/slides5-modified.png')); ?>" width="200" height="600" alt="slider"> <!--original: slides1.png-->
                                        <img src="<?php echo e(asset('website/img/slides7.png')); ?>" width="300" height="600" alt="slider"> <!--original: slides1.png-->
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
                    <div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

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
                                        <img src="<?php echo e(asset('website/img/events_image.png')); ?>" alt="slider"> <!--original: slides2.png-->
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

        <!-- ... end Main Slider -->

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
                                <a href="#" class="h5 info-box-title">Wedding Arrangement</a>
                                <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh euismod tincidunt ut laoreet dolore magna aliquam.
                                </p>
                            </div>

                            <a href="#" class="btn-next">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                </svg>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-info-box info-box--standard-hover">

                            <div class="info-box-image">
                                <img class="utouch-icon" src="<?php echo e(asset('website/img/party.png')); ?>" alt="party">
                                <img class="cloud" src="<?php echo e(asset('website/img/clouds9.png')); ?>" alt="cloud">
                            </div>

                            <div class="info-box-content">
                                <a href="#" class="h5 info-box-title">Birthday Party</a>
                                <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh euismod tincidunt ut laoreet dolore magna aliquam.
                                </p>
                            </div>

                            <a href="#" class="btn-next">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                </svg>
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-info-box info-box--standard-hover">

                            <div class="info-box-image">
                                <img class="utouch-icon" src="<?php echo e(asset('website/img/sushi2.png')); ?>" alt="food_service">
                                <img class="cloud" src="<?php echo e(asset('website/img/clouds10.png')); ?>" alt="cloud">
                            </div>

                            <div class="info-box-content">
                                <a href="#" class="h5 info-box-title">Food Service</a>
                                <p class="info-box-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                    nibh euismod tincidunt ut laoreet dolore magna aliquam.
                                </p>
                            </div>

                            <a href="#" class="btn-next">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                </svg>
                            </a>

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
                                        <img src="<?php echo e(asset('website/img/iphone.png')); ?>" alt="iphone">
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

                    <div class="swiper-slide bg-orange-light bg-6" data-mh="slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                    <div class="slider-tabs-vertical-thumb">
                                        <img src="<?php echo e(asset('website/img/iphone2.png')); ?>" alt="iphone">
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
                        <span class="round primary"></span>01.
                    </a>

                    <a href="#" class="slides-item">
                        <span class="round orange"></span>02.
                    </a>

                    <a href="#" class="slides-item">
                        <span class="round red"></span>03.
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
                            <h2 class="heading-title">How the <span class="c-primary">Utouch</span> works</h2>
                            <p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                anteposuerit litterarum formas humanitatis per.
                            </p>
                        </div>
                        <a href="02_company.html" class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
                            <svg class="utouch-icon utouch-icon-arrow-right1">
                                <use xlink:href="#utouch-icon-arrow-right1"></use>
                            </svg>
                            <div class="text">
                                <span class="title">Get Started Now</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-our-video">
                            <div class="video-thumb">
                                <img src="<?php echo e(asset('website/img/video-thumb.png')); ?>" alt="video">
                                <a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
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
                    <div class="counters">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="crumina-module crumina-counter-item">
                                <div class="counter-numbers counter c-yellow">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="6237" data-from="2">6237</span>
                                </div>
                                <h5 class="counter-title">Line of codes</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="crumina-module crumina-counter-item">
                                <div class="counter-numbers counter c-yellow">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="4000" data-from="2">4000</span>
                                </div>
                                <h5 class="counter-title">Solutions</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="crumina-module crumina-counter-item">
                                <div class="counter-numbers counter c-yellow">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="3" data-from="2">3</span>
                                    <div class="units">M+</div>
                                </div>
                                <h5 class="counter-title">Active users</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="crumina-module crumina-counter-item">
                                <div class="counter-numbers counter c-yellow">
                                    <span data-speed="2000" data-refresh-interval="3" data-to="8" data-from="2">8</span>
                                    <div class="units">M+</div>
                                </div>
                                <h5 class="counter-title">Download</h5>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="c-white">Utouch is an awesome app</h5>
                            <p class="c-semitransparent-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!-- ... end  Counters -->


    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    

    
    
    

    
    
    

    
    
    

    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    

    

    

    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    

    

    
    
    
    
    

    


    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    


    <!-- Pricing Tables -->

        <section class="background-contain bg-13 medium-padding100">
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
        </section>

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
                                        <img src="<?php echo e(asset('website/img/author2.png')); ?>" alt="avatar">
                                    </div>

                                    <h6 class="testimonial-text" data-swiper-parallax="-300">
                                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
                                    </h6>

                                    <div class="author-info-wrap" data-swiper-parallax="-100">

                                        <div class="author-info">
                                            <a href="#" class="h6 author-name">Doe Simpson</a>
                                            <div class="author-company">Student, 23 years old</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                    <div class="testimonial-img-author" data-swiper-parallax="-100">
                                        <img src="<?php echo e(asset('website/img/author2.png')); ?>" alt="avatar">
                                    </div>

                                    <h6 class="testimonial-text" data-swiper-parallax="-300">
                                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
                                    </h6>

                                    <div class="author-info-wrap" data-swiper-parallax="-100">

                                        <div class="author-info">
                                            <a href="#" class="h6 author-name">Doe Simpson</a>
                                            <div class="author-company">Student, 23 years old</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                                    <div class="testimonial-img-author" data-swiper-parallax="-100">
                                        <img src="<?php echo e(asset('website/img/author2.png')); ?>" alt="avatar">
                                    </div>

                                    <h6 class="testimonial-text" data-swiper-parallax="-300">
                                        Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum parum claram.
                                    </h6>

                                    <div class="author-info-wrap" data-swiper-parallax="-100">

                                        <div class="author-info">
                                            <a href="#" class="h6 author-name">Doe Simpson</a>
                                            <div class="author-company">Student, 23 years old</div>
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

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event\resources\views/home.blade.php ENDPATH**/ ?>
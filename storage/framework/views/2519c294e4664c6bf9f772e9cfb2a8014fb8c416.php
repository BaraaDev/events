

<?php $__env->startSection('title'); ?>
   - <?php echo app('translator')->get('website/home.home'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">


    <!-- Start Main Slider -->
    <div class="crumina-module crumina-module-slider container-full-width">
        <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade" style="cursor: grabbing; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo e(asset('website/img/catering-2.jpg')); ?>); background-repeat: no-repeat; background-size: 100% 100%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-slider-bg-light">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">
                                <div class="slider-content align-center">
                                    <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                        <span style="color: #F89522; font-size:50px;"><?php echo e(__('admin/home.home_page_title')); ?></span>
                                    </h1>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <div><h5 style=" font-size:30px; font-weight: bold; color: #FFFEF7; cursor: context-menu;">Getting Day Planned (GDP)</h5></div>
                                        <span style="color: #FFFEF7; font-size:20px;"><?php echo e(__('admin/home.home_page_content')); ?></span>
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                        <a onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'" href="#" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;"><?php echo e(__('admin/home.home_page_learn-more')); ?></a>
                                        <a href="<?php echo e(route('allContributions')); ?>" class="contribution-button btn btn-border btn--with-shadow" style="border-color:#F89522; color: #F89522; text-decoration:bold;"><?php echo e(__('website/home.contributions')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo e(asset('website/img/friends-2.jpg')); ?>); background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main-slider-bg-light">

                            <div class="container table">
                                <div class="row table-cell">

                                    <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">

                                        <div class="slider-content align-center">

                                            <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                                <span style="color: #F89522; font-size:60px;">Let us help</span><br>
                                                <span style="color: #FFFEF7; font-size:60px;">You Create</span>
                                            </h1>

                                            <h6 class="slider-content-text" data-swiper-parallax="-200">
                                                <span style=" color: #FFFEF7; font-size:20px;">Planning a Wedding, Proposal, or Event in our busy city is not easy, and it takes skills "and time" to make it all look easy-going</span>
                                            </h6>

                                            <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                                <a href="https://events.dev/en#suppliers-services-home-page" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;" onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'">
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

                <div class="swiper-slide thumb-left main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo e(asset('website/img/sparks2.jpg')); ?>); background-repeat: no-repeat; background-size: 100% 100%;">

                    <div class="container table full-height">
                        <div class="row table-cell">
                            <div class="col-lg-6 col-sm-12 table-cell">

                                <div class="slider-content align-both">
                                    <h2 class="slider-content-title" data-swiper-parallax="-100" style="color: #F89522;"><?php echo e(__('admin/home.home_page_title3')); ?></h2>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200" style="color: #FFFEF7;"><?php echo e(__('admin/home.home_page_content3')); ?></h6>
                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300"><a onmouseover="this.style.backgroundColor ='6D4A23'" onmouseout="this.style.backgroundColor ='F89522'" href="https://events.dev/en#suppliers-services-home-page" class="btn btn--lime btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;"><?php echo e(__('admin/home.home_page_content3_button')); ?></a></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="200">
                                    <img src="<?php echo e(asset('website/img/events_image.png')); ?>" alt="slider" style="height:600px ;">
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
    <section id="suppliers-services-home-page" class="crumina-module crumina-module-slider medium-padding100" style="background-color: rgba(241, 234, 225, 0.962); border-top: solid 5px #F89522; border-bottom: solid 5px #F89522;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
                    <div class="crumina-module crumina-heading align-center">
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(auth()->user()->user_type == 'customer'): ?>
                                <h4 class="heading-title">Submit an Event Request Form & Pick The Service Category You Need Within It</h4>
                                <span>
                                    <a href="<?php echo e(route('event.create')); ?>" class="btn btn--with-shadow" style="background-color: rgb(250, 141, 114); color:#FFFEF7; border: solid 3px black;" onmouseover="this.style.background='rgb(139, 85, 71)'" onmouseout="this.style.background='rgb(250, 141, 114)'">
                                        Make an Event Request Now!
                                    </a>
                                </span>
                            <?php elseif(auth()->user()->user_type == 'supplier'): ?>
                                <h4 class="heading-title">All The Available Services Categories</h4>
                            <?php elseif(auth()->user()->user_type == 'dashboard'): ?>
                                <h4 class="heading-title">Services Categories</h4>
                                <h5 class="heading-title"><a href="<?php echo e(route('categories.create')); ?>" style="color: rgb(17, 17, 187);" onmouseover="this.style.color='purple'" onmouseout="this.style.color='rgb(17, 17, 187)'">Click Here</a> to Add a New Service!</h5>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <h4 class="heading-title">Services Categories</h4>
                            <h5 class="heading-title">If You Need a Service, Hurry Up & Sign Up Now and make a Request for an Event.</h5>
                                <span>
                                    <a href="<?php echo e(route('register')); ?>" class="btn btn-border btn--with-shadow c-secondary mb30" onmouseover="this.style.backgroundColor='#C3CFDD'" onmouseout="this.style.backgroundColor='rgb(246, 208, 193)'" style="background-color: rgb(246, 208, 193);">
                                        Sign Up!
                                    </a>
                                </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="swiper-container pagination-bottom" data-show-items="4">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $services_section; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="crumina-module crumina-info-box info-box--time-line">
                                    <a href="<?php echo e(route('event.category',$service->id)); ?>">
                                        <div class="info-box-image bg-secondary-color" style="background-color:<?php echo e($service->color); ?>;" onmouseover="this.style.backgroundColor='grey'" onmouseout="this.style.backgroundColor='<?php echo e($service->color); ?>'"> <!-- bg-color from DB for icon -->
                                            <img class="utouch-icon" src="<?php echo e(asset("website/".$service->icon)); ?>"> <!--icon from DB-->
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow" style="fill: rgb(0, 0, 0);"></use>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="info-box-content">
                                        <h6 class="timeline-year c-secondary" style="color:<?php echo e($service->color); ?>;"><a href="<?php echo e(route('event.category',$service->id)); ?>" onmouseover="this.style.color='grey'" onmouseout="this.style.color=''"><?php echo e($service->name); ?></a></h6> <!-- headline-text-color from DB for icon -->
                                        <p class="info-box-text"><?php echo \Str::words($service->content,'20',' ...'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!--Prev next buttons-->
                        <div class="btn-slider-wrap navigation-center-bottom">
                            <div class="btn-prev">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                                    <use xlink:href="#utouch-icon-arrow-left-1" style="fill: #F89522;"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-left1">
                                    <use xlink:href="#utouch-icon-arrow-left1" style="fill: #F89522;"></use>
                                </svg>
                            </div>

                            <div class="btn-next">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                    <use xlink:href="#utouch-icon-arrow-right-1" style="fill: #F89522;"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                    <use xlink:href="#utouch-icon-arrow-right1" style="fill: #F89522;"></use>
                                </svg>
                            </div>
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

                <div class="swiper-slide " data-mh="slide" style="background-color:#273842 ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="<?php echo e(asset('website/img/prom.jpg')); ?>" style="border-radius:5%;" alt="Prom Prep">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">Graduation Parties</p>
                                    <h2 class="heading-title">Brand new Graduation offers are on doors, Check them out!</h2>
                                    <div class="heading-text">
                                        Throw a memorable graduation party for any age graduate. We're calling all graduates from 2022! 
                                        In just a few short months, it will be time to let loose and PARTY! Are you ready? Chances are 
                                        you haven't even thought that far ahead, and to be honest, that's what we wanted. We set up and 
                                        worked with the best organisers and suppliers in Egypt, and we did it for the least amount of 
                                        money. Go find your offers and start making plans for your graduation party now.
                                    </div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#C52A0C'" onmouseout="this.style.color=''">
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
                                    <img src="<?php echo e(asset('website/img/fireworks.jpg')); ?>" style="border-radius:5%;" alt="fireworks">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">Decorations</p>
                                    <h2 class="heading-title">Trendiest Party Decorations: Indoor & Outdoor Party Decor, Party Banners, Decoration Idea- check it out now!</h2>
                                    <div class="heading-text">
                                        You may get effect lighting, international flags, party confetti, and other items to decorate 
                                        for a festive occasion via our vendors and use them to spruce up the venue for your next party. 
                                        Anything from customised banners to inexpensive piatas, door curtains, and even cake 
                                        decorations, among many other things. All of this, at the most competitive prices and 
                                        most up-to-date styles conceivable.
                                    </div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='orange'" onmouseout="this.style.color=''">
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
                                    <img src="<?php echo e(asset('website/img/roses.jpg')); ?>" style="border-radius:20px;" alt="barber">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">Florists</p>
                                    <h2 class="heading-title">GDP offers great flower deals to people who want fresh but cheap flowering for all types of events.</h2>
                                    <div class="heading-text">
                                        At your event, you can WOW your guests with beautiful flowers. Flower wall installations, 
                                        for example, are a great way to make beautiful photo moments at corporate events, 
                                        film screenings, and product launches. From a small flower arrangement to the production 
                                        of an entire event. With special deals from the best vendors in the market.
                                    </div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#A16B78'" onmouseout="this.style.color=''">
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


    <!-- Start Video -->
    <section class="bg-8 background-contain pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title"><?php echo e(__('admin/home.how_it_works_video')); ?></h6>
                    <h2 class="heading-title"><?php echo e(__('admin/home.how_it_works1')); ?> <span class="c-primary">GDP</span> <?php echo e(__('admin/home.how_it_works2')); ?></h2>
                    <p class="heading-text" style="font-size:110%; font-family: Arial, Helvetica, sans-serif;">
                        <?php echo e(__('admin/home.how_it_works_content')); ?> "<strong><u><?php echo e(__('admin/home.customer_title')); ?></u></strong>" & "<strong><u><?php echo e(__('admin/home.supplier_title')); ?></u></strong>").
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom:5%;">
                <div class="crumina-module crumina-our-video">
                    <div class="video-thumb">
                        <img src="<?php echo e(asset('website/img/video-thumb.png')); ?>" alt="video">
                        <a href="javascript:void(0);" class="video-control js-popup-iframe">
                            <img src="<?php echo e(asset('website/img/play.png')); ?>" alt="play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Video -->


    <!-- Start container -->
    <section class="bg-secondary-color background-contain bg-10">
    <div class="container">
        <div class="row">

            <div style="text-align:center; width: 82%; margin-left: auto; margin-right: auto; padding-top:5%;">
                <h5 class="c-white" style="font-size:200%;"><?php echo e(__('admin/home.what_s')); ?> GDP<?php echo e(__('admin/home.question_mark')); ?></h5>
                <p class="c-semitransparent-white" style="font-weight:bold;">
                    <em style="font-size:120%; font-family:Arial, Helvetica, sans-serif;">
                    <hr>
                        <span style="color:rgb(208, 208, 208);"><?php echo e(__('admin/home.middle_section')); ?></span>
                    <hr>
                        <span style="color: rgb(150, 150, 150);">"<?php echo e(__('admin/home.middle_section_content')); ?>"</span>
                    </em>
                </p>
            </div>

            <div class="counters">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span><?php echo e($no_of_customers); ?></span>
                        </div>
                        <h5 class="counter-title"><?php echo e(__('admin/home.number_of_customers')); ?></h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span><?php echo e($no_of_suppliers); ?></span>
                        </div>
                        <h5 class="counter-title"><?php echo e(__('admin/home.number_of_suppliers')); ?></h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span><?php echo e(\App\Models\Comment::count()); ?></span>
                        </div>
                        <h5 class="counter-title"><?php echo e(__('admin/home.number_of_comments')); ?></h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span><?php echo e(\App\Models\Event::count()); ?></span>
                        </div>
                        <h5 class="counter-title"><?php echo e(__('admin/home.number_of_events')); ?></h5>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End container -->
    </section>



    <!-- Testimonials -->
    <section class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">

        <div class="header-lines-decoration">
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
        </div>

    <div class="container">

        <div style="text-align:center; padding-bottom:1%;">
            <h5 class="c-black" style="font-size:200%;"><u><?php echo e(__('admin/home.testimonials')); ?></u></h5>
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
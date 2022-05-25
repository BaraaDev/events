<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <!-- Stunning Header -->

        <div class="crumina-stunning-header crumina-stunning-header--small stunning-header--content-inline bg-black">
            <div class="container">
                <div class="stunning-header-content c-white custom-color">
                    <div class="inline-items">
                        <h4 class="stunning-header-title"><?php echo e($contribution->title); ?></h4>




                    </div>
                </div>
            </div>
        </div><!-- ... end Stunning Header -->
        <!-- Breadcrcumbs -->
        <div class="container">
            <div class="row">
                <div class="breadcrumbs-wrap inline-items with-border">
                    <a href="<?php echo e(route('home')); ?>" class="btn btn--transparent btn--round">
                        <svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                    </a>

                    <ul class="breadcrumbs">
                        <li class="breadcrumbs-item">
                            <a href="<?php echo e(route('allContributions')); ?>"><?php echo e(__('website/home.contributions')); ?></a>
                            <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                        </li>
                        <li class="breadcrumbs-item active">
                            <span><?php echo e($contribution->title); ?></span>
                            <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ... end Breadcrcumbs -->


        <!-- Blog posts-->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <article class="hentry post post-standard has-post-thumbnail sticky post-standard-details">

                        <div class="post-thumb">
                            <img src="<?php echo e($contribution->photo); ?>" alt="post">
                        </div>

                        <div class="post__content">

                            <a href="#" class="social__item main">
                                <svg class="utouch-icon utouch-icon-1496680146-share"><use xlink:href="#utouch-icon-1496680146-share"></use></svg>
                            </a>

                            <div class="share-product">

                                <ul class="socials">
                                    <li>
                                        <a href="" class="social__item facebook">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="social__item twitter">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <div class="post__date">

                                <time class="published" datetime="2017-03-20 12:00:00">
                                    <a href="#" class="number"><?php echo e($contribution->created_at->format('d')); ?></a>
                                    <span class="month"><?php echo e($contribution->created_at->format('M Y')); ?></span>
                                    <span class="day"><?php echo e($contribution->created_at->format('D')); ?></span>
                                </time>
                            </div>

                            <div class="post__content-info">

                                <h3 class="post__title entry-title"><?php echo e($contribution->title); ?></h3>

                                <div class="post-additional-info">
                                    <span class="post__author author vcard"><?php echo e(__('website/home.By')); ?> <a href="javascript:void(0)" class="fn"><?php echo e($contribution->create_user->name ?? ''); ?></a></span>

                                    <span class="category"><?php echo e(__('website/home.In')); ?> <a href="<?php echo e(route('contribution.category',$contribution->category->id ?? '')); ?>"><?php echo e($contribution->category->name ?? ''); ?></a></span>

                                </div>

                            </div>

                            <p>
                                <?php echo e($contribution->content); ?>

                            </p>



                        </div>

                    </article>

                    <div class="blog-details-author">

                        <div class="author-info">
                            <a href="#" class="h6 author-name"><?php echo e($contribution->create_user->name ?? ''); ?></a>
                            <p><?php echo e($contribution->create_user->bio ?? ''); ?></p>
                        </div>

                        <ul class="socials socials--round socials--colored">
                            <li>
                                <a href="https://facebook.com/<?php echo e($contribution->create_user->facebook ?? ''); ?>" target="_blank" rel="nofollow" class="social__item facebook">
                                    <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/<?php echo e($contribution->create_user->twitter ?? ''); ?>" target="_blank" rel="nofollow" class="social__item twitter">
                                    <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div class="pagination-arrow">
                        <?php if($next): ?>
                            <a href="<?php echo e(route('contribution.show',$next->id)); ?>" class="btn-prev-wrap">
                                <div class="btn-prev">
                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                                    <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                                </div>
                                <div class="btn-content">
                                    <div class="btn-content-title"><?php echo e(__('website/home.next_contribution')); ?></div>
                                    <p class="btn-content-subtitle"><?php echo e($next->title); ?></p>
                                </div>
                            </a>
                        <?php else: ?>

                        <?php endif; ?>

                        <a class="list-post" href="#">
                            <svg class="utouch-icon utouch-icon-menu-1"><use xlink:href="#utouch-icon-menu-1"></use></svg>
                        </a>

                        <?php if($previous): ?>
                            <a href="<?php echo e(route('contribution.show',$previous->id)); ?>" class="btn-next-wrap">
                                <div class="btn-content">
                                    <div class="btn-content-title"><?php echo e(__('website/home.previous_contribution')); ?></div>
                                    <p class="btn-content-subtitle"><?php echo e($previous->title); ?></p>
                                </div>
                                <div class="btn-next">
                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                                    <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>


                <!-- Sidebar-->
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <aside aria-label="sidebar" class="sidebar sidebar-right">



                        <aside class="widget w-category">
                            <h5 class="widget-title"><?php echo e(__('website/home.categories')); ?></h5>
                            <ul class="category-list">
                                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li>
                                        <a href="<?php echo e(route('contribution.category',$category->id)); ?>"><?php echo e($category->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger" role="alert"><?php echo e(__('website/home.no_categories')); ?></div>
                                <?php endif; ?>
                            </ul>
                        </aside>

                        <aside class="widget w-popular-products crumina-module crumina-module-slider">
                            <h5 class="widget-title">Popular Projects</h5>
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="swiper-slide product-item">
                                            <div class="product-item-thumb">
                                                <div class="square-colored bg-product-blue-dark"></div>
                                                <img src="<?php echo e($event->photo); ?>" alt="product">
                                            </div>
                                            <div class="product-item-content">
                                                <h6 class="title"><?php echo e($event->title); ?></h6>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo e(__('website/event.no_events')); ?>

                                        </div>
                                    <?php endif; ?>

                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </aside>
                    </aside>
                </div><!-- End Sidebar-->
            </div>
        </div><!-- End Blog posts-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event\resources\views/website/contributions/show.blade.php ENDPATH**/ ?>
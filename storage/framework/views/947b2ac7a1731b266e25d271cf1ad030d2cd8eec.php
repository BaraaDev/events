
<?php $__env->startSection('title'); ?>
    - <?php echo app('translator')->get('website/home.events'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    <?php if(auth()->user()): ?>
                        <?php if(auth()->user()->user_type == 'customer'): ?>
                        <div class="inline-items">
                            <h4 class="stunning-header-title"><?php echo e(__('website/event.your_latest_events')); ?></h4>
                            <a href="<?php echo e(route('event.create')); ?>" class="btn btn--green btn--with-shadow f-right">
                                <?php echo e(__('website/event.add_event')); ?>

                            </a>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="breadcrumbs-wrap inline-items">
                        <?php $__env->startComponent('components.breadcrumbs-wrap'); ?>
                            <?php $__env->slot('breadcrumbs_item_active'); ?>
                                <li class="breadcrumbs-item active">
                                    <span class="breadcrumbs-custom"><?php echo e(__('website/home.events')); ?></span>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                            <?php $__env->endSlot(); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </div>
                </div>
            </div>
        </div><!-- end Header -->

        <!-- Start Events -->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="curriculum-event-wrap">
                        <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="curriculum-event c-primary" data-mh="curriculum">
                                <div class="curriculum-event-thumb">
                                    <img src="<?php echo e($event->photo); ?>" alt="<?php echo e($event->title); ?>">
                                    <div class="category-link c-yellow"><?php echo e($event->category->name ?? ''); ?></div>

                                    <div class="curriculum-event-content">
                                        <div class="author-block inline-items">
                                            <div class="author-avatar">
                                                <img src="<?php echo e($event->user->photo); ?>" alt="<?php echo e($event->user->name ?? ''); ?>">
                                            </div>
                                            <div class="author-info">
                                                <a href="#" class="h6 author-name"><?php echo e($event->user->name ?? ''); ?></a>
                                                <div class="author-prof">(<?php echo e($event->user->user_type ?? ''); ?>)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-standard overlay--primary"></div>
                                </div>
                                <div class="curriculum-event-content">
                                    <div class="icon-text-item display-flex">
                                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                                        <div class="text">
                                            <?php echo e($event->created_at->format('D d-Y')); ?> –
                                            <a href="<?php echo e(route('event.country',$event->country_id)); ?>"><?php echo e($event->country->name ?? ''); ?></a> ,
                                            <a href="<?php echo e(route('event.governorate',$event->governorate_id)); ?>"><?php echo e($event->governorate->name ?? ''); ?></a> ,
                                            <a href="<?php echo e(route('event.city',$event->city_id)); ?>"><?php echo e($event->city->name ?? ''); ?></a>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                            <div class="c-green"><?php echo e($event->status ?? ''); ?></div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4">
                                            <div class="c-green" style="float: left; margin: 0 auto;"><?php echo e($event->budget); ?> USD</div>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(route('event.show',$event->id)); ?>" class="h5 title"><?php echo e($event->title); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(__('website/event.no_events')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                    <?php echo $events->links('pagination::simple-default'); ?>

                </div>
            </div>
        </section><!-- end Events -->
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/website/events/index.blade.php ENDPATH**/ ?>
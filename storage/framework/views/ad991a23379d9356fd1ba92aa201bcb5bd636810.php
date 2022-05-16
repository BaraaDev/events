

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Stunning Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    <div class="inline-items">
                        <h4 class="stunning-header-title"><?php echo e($event->title); ?></h4>
                    </div>
                    <div class="breadcrumbs-wrap inline-items">
                    <?php $__env->startComponent('components.breadcrumbs-wrap'); ?>
                        <?php $__env->slot('breadcrumbs_item'); ?>
                            <li class="breadcrumbs-item">
                                <a href="<?php echo e(route('allEvents')); ?>" class="breadcrumbs-custom"><?php echo e(__('website/home.events')); ?></a>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        <?php $__env->endSlot(); ?>

                        <?php $__env->slot('breadcrumbs_item_active'); ?>
                            <li class="breadcrumbs-item active">
                                <span class="breadcrumbs-custom"><?php echo e($event->title); ?></span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        <?php $__env->endSlot(); ?>
                    <?php echo $__env->renderComponent(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--end Header -->


        <!-- Start Event-->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="block-rounded-shadow">
                            <h3><?php echo e($event->title); ?></h3>
                            <img src="<?php echo e($event->photo); ?>" alt="<?php echo e($event->title); ?>">
                            <p><?php echo $event->description; ?></p>
                        </div>

                        <div class="comments">
                            <?php if(auth()->user()): ?>
                                <?php if(count($event->comments->where('user_id',auth()->user()->id)) == 0): ?>
                                    <form class="contact-form" action="<?php echo e(route('comment.add')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h3><?php echo e(__('website/event.add_offer_now')); ?></h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <input name="value" placeholder="<?php echo e(__('website/event.offer_value')); ?>" type="number" autocomplete="off" onkeyup="$('#gain_value').val($(this).val()- ($(this).val()*15/100) );$('.gain_value').text($(this).val()- ($(this).val()*15/100) );">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <input disabled placeholder="<?php echo e(__('website/event.you_will_get')); ?>" id="gain_value" type="number" autocomplete="off">
                                            </div>

                                            <input name="event_id" value="<?php echo e($event->id); ?>" type="hidden" autocomplete="off">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="with-icon">
                                                    <textarea name="comment_body" required placeholder="<?php echo e(__('website/event.offer_details')); ?>" style="min-height: 160px;"></textarea>
                                                    <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                                </div>
                                            </div>

                                            <div class="submit-block">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn--large btn--green btn--with-shadow full-width">
                                                        <span class="text"><?php echo e(__('website/event.add_offer')); ?></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="crumina-module crumina-heading align-center">
                                    <div class="heading-text"> <?php echo e(__('website/event.to_add')); ?>

                                        <a href="<?php echo e(route('register')); ?>"><?php echo e(__('website/event.register')); ?></a> <?php echo e(__('website/event.or')); ?>

                                        <a href="<?php echo e(route('login')); ?>"><?php echo e(__('website/event.log_in')); ?></a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="d-flex--content-inline">
                                <h3><?php echo e(__('website/event.provided_offers')); ?></h3>
                            </div>

                            <?php $__empty_1 = true; $__currentLoopData = $event->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <ol class="comments__list" id="comments<?php echo e($comment->id); ?>">
                                <li class="comments__item">
                                    <div class="comment-entry comment comments__article">
                                        <div class="comments__avatar">
                                            <img src="<?php echo e($comment->user->photo ?? ''); ?>" alt="<?php echo e($comment->user->name ?? ''); ?>">
                                        </div>
                                        <div class="comments__body">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="d-flex--content-inline">
                                                        <header class="comment-meta comments__header">
                                                            <cite class="fn url comments__author">
                                                                <a href="javascript:void(0)" rel="external" class="h6"><?php echo e($comment->user->name ?? ''); ?></a>
                                                            </cite>
                                                            <div class="comments__time">
                                                                <time class="published" title="<?php echo e($comment->created_at->diffForHumans()); ?>" datetime="<?php echo e($comment->created_at); ?>"><?php echo e($comment->created_at->format('dD M Y, H:m a')); ?></time>
                                                            </div>
                                                        </header>
                                                    </div>
                                                </div>
                                                <?php if(auth()->user()): ?>
                                                    <?php if($comment->user_id == auth()->user()->id): ?>
                                                        <div class="col-lg-4 col-md-4">
                                                            <?php echo Form::open([
                                                                'route' => ['comment.delete',$comment->id],
                                                                'method' => 'delete'
                                                            ]); ?>

                                                            <button class="btn btn--red" style="margin-bottom: 20px; margin-left: 0;">
                                                                Delete
                                                            </button>
                                                            <?php echo Form::close(); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                            </div>
                                            <div class="comment-content comment">
                                                <p><?php echo e($comment->body ?? ''); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger" role="alert">
                                    <strong><?php echo e(__('website/event.Oh_snap')); ?> </strong><?php echo e(__('website/event.no_offers')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <aside aria-label="sidebar" class="sidebar sidebar-right">

                            <aside class="widget w-category">
                                <h5 class="widget-title"><?php echo e(__('website/event.event_card')); ?></h5>
                                <ul class="category-list">
                                    <li><a><?php echo e(__('website/home.status')); ?>:<span class="cat-count c-yellow"><?php echo e($event->status); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.publication_date')); ?>:<span class="cat-count"><?php echo e($event->created_at->format('Y-d-h')); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.budget')); ?>:<span class="cat-count"><?php echo e($event->budget); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.applicants_numbers')); ?>:<span class="cat-count"><?php echo e($event->comments->count()); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.average_offers')); ?>:<span class="cat-count"><?php echo e(intval($event->comments->sum('value') ?? '' / $event->comments->count() ?? '')); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.country')); ?>:<span class="cat-count"><?php echo e($event->country->name ?? ''); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.governorate')); ?>:<span class="cat-count"><?php echo e($event->governorate->name ?? ''); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.city')); ?>:<span class="cat-count"><?php echo e($event->city->name ?? ''); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.category')); ?>:<span class="cat-count"><?php echo e($event->category->name ?? ''); ?></span></a></li>
                                </ul>
                            </aside>

                            <aside class="widget w-author">
                                <div class="testimonial-img-author">
                                    <img src="<?php echo e($event->user->photo ?? ''); ?>" alt="author">
                                    <div class="socials">

                                        <a href="http://facebook.com/<?php echo e($event->user->facebook ?? ''); ?>" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/>
                                            </svg>
                                        </a>

                                        <a href="http://twitter.com/<?php echo e($event->user->twitter ?? ''); ?>" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <a href="#" class="h5 title"><?php echo e($event->user->name ?? ''); ?></a>
                                <p class="contacts-text"><?php echo e($event->user->address ?? ''); ?></p>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
                                    <span class="info"><a href="tel://<?php echo e($event->user->phone ?? ''); ?>"><?php echo e($event->user->phone ?? ''); ?></a> </span>
                                </div>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
                                    <span class="info"><a href="mailto://<?php echo e($event->user->email ?? ''); ?>"><?php echo e($event->user->email ?? ''); ?></a> </span>
                                </div>
                            </aside>

                            <aside class="widget w-tags">
                                <h5 class="widget-title"><?php echo e(__('website/event.required_skills')); ?></h5>
                                <ul class="tags-list">
                                    <?php $__empty_1 = true; $__currentLoopData = $event->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li><a ><?php echo e($tag->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="alert alert-danger" role="alert"><?php echo e(__('website/event.no_tag')); ?></div>
                                    <?php endif; ?>
                                </ul>
                            </aside>
                        </aside>
                    </div>
                </div>
            </div>
        </section><!-- end Event-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/website/events/show.blade.php ENDPATH**/ ?>

<?php $__env->startSection('title'); ?>
    - <?php echo e($event->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Stunning Header -->
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
                <?php if(session('delete') ?? '' ): ?>
                    <?php echo $__env->make('layouts.website.partials.alert.danger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="block-rounded-shadow">
                            <h3><?php echo e($event->title); ?></h3>
                            <img src="<?php echo e($event->photo); ?>" alt="<?php echo e($event->title); ?>">
                            <p><?php echo e($event->description); ?></p>
                        </div>

                        <div class="comments">
                            <?php if($event->status == 'Available' || $order && $order->is_paid == 0): ?>
                                <?php if(auth()->user()): ?>
                                    <?php if(count($event->comments->where('user_id',auth()->user()->id)) == 0): ?>
                                        <?php if(auth()->user()->user_type == 'supplier'): ?>
                                        <form class="contact-form" action="<?php echo e(route('comment.add')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3><?php echo e(__('website/event.add_offer_now')); ?></h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input required name="value" placeholder="<?php echo e(__('website/event.offer_value')); ?>" type="number" autocomplete="off" onkeyup="$('#gain_value').val($(this).val()- ($(this).val()*5/100) );$('.gain_value').text($(this).val()- ($(this).val()*5/100) );">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input required disabled placeholder="<?php echo e(__('website/event.you_will_get')); ?>" id="gain_value" type="number" autocomplete="off">
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
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="crumina-module crumina-heading align-center">
                                        <div class="heading-text"> <?php echo e(__('website/event.to_add')); ?>

                                            <a href="<?php echo e(route('register')); ?>" style="color: #0083FF; font-weight: bold;"><?php echo e(__('website/event.register')); ?></a> <?php echo e(__('website/event.or')); ?>

                                            <a href="<?php echo e(route('login')); ?>" style="color: #0083FF; font-weight: bold;"><?php echo e(__('website/event.log_in')); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <div class="d-flex--content-inline">
                                <h3><?php echo e(__('website/event.provided_offers')); ?></h3>
                            </div>
                            <?php if(session('message') ?? '' ): ?>
                                <?php echo $__env->make('layouts.website.partials.alert.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                                <?php if($event->status == 'Available' || $order && $order->is_paid == 0): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $event->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <ol class="comments__list">
                                    <li class="comments__item">
                                        <div class="comment-entry comment comments__article">
                                            <div class="comments__avatar">
                                                <img src="<?php echo e($comment->user->photo ?? ''); ?>" alt="<?php echo e($comment->user->name ?? ''); ?>">
                                            </div>
                                            <div class="comments__body">
                                                <div class="row">
                                                    <div class="<?php if(auth()->user()): ?> <?php if(auth()->user()->user_type == 'customer' || auth()->user()->user_type == 'dashboard'): ?> col-lg-4 col-md-4 <?php else: ?> col-lg-8 col-md-8 <?php endif; ?> <?php endif; ?>" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right; margin: 0 auto;" <?php endif; ?>>
                                                        <div class="d-flex--content-inline">
                                                            <header class="comment-meta comments__header">
                                                                <cite class="fn url comments__author">
                                                                    <a href="javascript:void(0)" rel="external" class="h6"><?php echo e($comment->user->name ?? ''); ?></a>
                                                                </cite>
                                                                <div class="comments__time">
                                                                    <time class="published" title="<?php echo e($comment->created_at->diffForHumans()); ?>" datetime="<?php echo e($comment->created_at); ?>"><?php echo e($comment->created_at->format('d D M Y, H:m a')); ?></time>
                                                                </div>
                                                            </header>
                                                        </div>
                                                    </div>
                                                    <?php if(auth()->user()): ?>
                                                        <?php if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard'): ?>

                                                            <?php if(auth()->user()->user_type == 'customer'): ?>
                                                                <div class="col-lg-4 col-md-4">
                                                                    <?php echo Form::open([
                                                                        'route' => ['payNow'],
                                                                        'method' => 'post'
                                                                    ]); ?>

                                                                    <input type="hidden" value="<?php echo e($event->id); ?>" name="event_id">
                                                                    <input type="hidden" value="<?php echo e($comment->user_id); ?>" name="user_to">
                                                                    <input type="hidden" value="<?php echo e($comment->value); ?>" name="value">
                                                                    <button class="btn btn--green" style="margin-bottom: 20px; margin-left: 0;" title="<?php echo e(__('website/home.payNow')); ?>"><?php echo e($comment->value); ?> (USD)</button>
                                                                    <?php echo Form::close(); ?>

                                                                </div>
                                                            <?php endif; ?>

                                                            <div class="col-lg-4 col-md-4">
                                                                <?php echo Form::open([
                                                                    'route' => ['comment.delete',$comment->id],
                                                                    'method' => 'delete'
                                                                ]); ?>

                                                                <button class="btn btn--red" style="margin-bottom: 20px; margin-left: 0;"><?php echo e(__('website/home.delete')); ?></button>
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
                                        <?php if(auth()->user()): ?>
                                            <?php if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id || auth()->user()->user_type == 'dashboard'): ?>
                                                <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo $__env->make('website.events.reply', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>

                                    </li>
                                    <?php if(auth()->user()): ?>
                                        <?php if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard'): ?>
                                            <a href="" class="btn bg-yellow" style="margin-bottom: 3%;" onclick="$(this).next('div').slideToggle(500);return false;"><?php echo e(__('website/home.reply')); ?></a>
                                            <div style="display: none">
                                                <form method="post" action="<?php echo e(route('reply.event', $comment->id)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="with-icon">
                                                            <textarea name="comment_body" required placeholder="<?php echo e(__('website/event.offer_details')); ?>" style="min-height: 160px;"></textarea>
                                                            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                                            <input type="hidden" name="commentable_id" value="<?php echo e($event->id); ?>" />
                                                            <input type="hidden" name="comment_id" value="<?php echo e($comment->id); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn bg-blue"><?php echo e(__('website/home.add_reply')); ?></button>
                                                    </div>
                                                </form>
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </ol>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong><?php echo e(__('website/event.Oh_snap')); ?> </strong><?php echo e(__('website/event.no_offers')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php else: ?>
                                    <div class="alert alert-danger" role="alert">
                                       <?php echo e(__('website/event.expired')); ?>

                                    </div>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <aside aria-label="sidebar" class="sidebar sidebar-right">

                            <aside class="widget w-category">
                                <h5 class="widget-title"><?php echo e(__('website/event.event_card')); ?></h5>
                                <ul class="category-list">
                                    <li><a><?php echo e(__('website/home.status')); ?>:
                                                <?php if($event->status == 'Available'): ?>
                                                    <span class="cat-count c-yellow" style="background-color: rgb(200, 234, 186); padding: 3%; color: rgb(10, 156, 7); font-size: 13px;" onmouseover="this.style.color='#0083FF'" onmouseout="this.style.color='rgb(10, 156, 7)'">
                                                        Active
                                                    </span>
                                                <?php elseif($event->status == 'Expired'): ?>
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 185, 185); padding: 3%; color: rgb(173, 19, 19); font-size: 13px;" onmouseover="this.style.color='snow'" onmouseout="this.style.color='rgb(173, 19, 19)'">
                                                        Paid
                                                    </span>
                                                <?php else: ?> <!-- $event->status == 'Stopped' -->
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 228, 185); padding: 3%; color: rgb(255, 115, 0); font-size: 13px;" onmouseover="this.style.color='black'" onmouseout="this.style.color='rgb(255, 115, 0)'">
                                                        Pending
                                                    </span>
                                                <?php endif; ?>
                                        </a>
                                    </li>
                                    <li><a><?php echo e(__('website/home.publication_date')); ?>:<span class="cat-count"><?php echo e($event->created_at->format('Y-d-h')); ?></span></a></li>
                                    <li><a><?php echo e(__('website/home.budget')); ?>:<span class="cat-count"><?php echo e($event->budget); ?> USD</span></a></li>
                                    <li><a><?php echo e(__('website/home.no_of_suppliers_involved')); ?>:<span class="cat-count"><?php echo e($event->comments->count()); ?></span></a></li>
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
                                <a href="#" class="h6 title"><?php echo e(__('website/home.customer')); ?></a>
                                <a href="#" class="h4 title"><?php echo e($event->user->name ?? ''); ?></a>
                                <p class="contacts-text"><?php echo e($event->user->address ?? ''); ?></p>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
                                    <span class="info" title="<?php echo e($event->user->created_at->format('Y M') ?? ''); ?>"><?php echo e($event->user->created_at->format('Y M') ?? ''); ?></span>
                                </div>
                            </aside>
                            <?php if($order && $order->is_paid == 1): ?>
                                <aside class="widget w-author">
                                    <div class="testimonial-img-author">
                                        <img src="<?php echo e($order->user_to->photo ?? ''); ?>" alt="<?php echo e($order->user_to->name ?? ''); ?>">
                                    </div>

                                    <a href="javascript:void(0);" class="h6 title"><?php echo e(__('website/home.supplier')); ?></a>
                                    <a href="javascript:void(0);" class="h4 title"><?php echo e($order->user_to->name ?? ''); ?></a>
                                    <p class="contacts-text"><?php echo e($order->user_to->address ?? ''); ?></p>
                                </aside>
                            <?php endif; ?>


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
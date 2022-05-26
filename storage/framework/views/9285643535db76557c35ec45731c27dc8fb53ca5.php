<ol class="children">
    <li class="comments__item">
        <div class="comment-entry comment comments__article">
            <div class="comments__avatar">
                <img src="<?php echo e($reply->user->photo ?? ''); ?>" alt="<?php echo e($reply->user->name ?? ''); ?>">
            </div>
            <div class="comments__body">
                <div class="row">
                    <div class="col-lg-7 col-md-7" <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> style="float: right; margin: 0 auto;" <?php endif; ?>>
                        <div class="d-flex--content-inline">
                            <header class="comment-meta comments__header">

                                <cite class="fn url comments__author">
                                    <a href="#" rel="external" class="h6"><?php echo e($reply->user->name ?? ''); ?></a>
                                </cite>
                                <div class="comments__time">
                                    <time class="published" title="<?php echo e($reply->created_at->diffForHumans()); ?>" datetime="<?php echo e($reply->created_at); ?>"><?php echo e($reply->created_at->format('dD M Y, H:m a')); ?></time>
                                </div>
                            </header>
                        </div>
                    </div>
                    <?php if(auth()->user()): ?>
                        <?php if($reply->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard'): ?>

                            <div class="col-lg-5 col-md-5">
                                <?php echo Form::open([
                                    'route' => ['comment.delete',$reply->id],
                                    'method' => 'delete'
                                ]); ?>

                                <button class="btn btn--red" style="margin-bottom: 20px; margin-left: 0;"><?php echo e(__('website/home.delete')); ?></button>
                                <?php echo Form::close(); ?>

                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="comment-content comment">
                    <p><?php echo e($reply->body); ?></p>
                </div>
            </div>
        </div>
    </li>
</ol>
<?php /**PATH E:\laragon\www\event\resources\views/website/events/reply.blade.php ENDPATH**/ ?>
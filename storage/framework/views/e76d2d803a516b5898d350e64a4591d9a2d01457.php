

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/email.inbox')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->yieldContent('components'); ?>

    <div class="container-fluid">
        <div class="email-wrap">
            <div class="row">
                <div class="col-xl-3 col-md-6 xl-30">
                    <div class="email-sidebar">
                        <div class="email-left-aside">
                            <div class="card">
                                <div class="card-body">
                                    <div class="email-app-sidebar">
                                        <div class="media">
                                            <div class="media-size-email"><img class="me-3 rounded-circle" src="<?php echo e(asset('admin/images/user/user.png')); ?>" alt="" /></div>
                                            <div class="media-body">
                                                <h6 class="f-w-600"><?php echo e($setting->title); ?></h6>
                                                <p><?php echo e($setting->email); ?></p>
                                            </div>
                                        </div>
                                        <ul class="nav main-menu" role="tablist">
                                            <li class="nav-item">
                                                <p class="btn-primary btn-block btn-mail w-100" id="pills-darkhome-tab" data-bs-toggle="pill" role="tab" aria-controls="pills-darkhome" aria-selected="true">
                                                 <?php echo e(__('admin/email.email_list')); ?>

                                                </p>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('mail.inbox')); ?>" <?php if(routeActive('mail.inbox')): ?> aria-selected="true" <?php endif; ?>>
                                                    <span class="title"><i class="icon-import"></i><?php echo e(__('admin/email.inbox')); ?></span><span class="badge pull-right">(<?php echo e(\App\Models\Contact::where('is_read',0)->count()); ?>)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route('mail.all-mail')); ?>" <?php if(routeActive('mail.all-mail')): ?> aria-selected="true" <?php endif; ?>>
                                                    <span class="title"><i class="icon-folder"></i><?php echo e(__('admin/email.all_mail')); ?></span><span class="badge pull-right">(<?php echo e(\App\Models\Contact::count()); ?>)
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo e(route('mail.trash')); ?>" <?php if(routeActive('mail.trash')): ?> aria-selected="true" <?php endif; ?>>
                                                    <span class="title"><i class="icon-trash"></i><?php echo e(__('admin/email.trash')); ?></span><span class="badge pull-right">(<?php echo e(\App\Models\Contact::onlyTrashed()->count()); ?>)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $__env->yieldContent('content-email'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\events\resources\views/layouts/email/master.blade.php ENDPATH**/ ?>
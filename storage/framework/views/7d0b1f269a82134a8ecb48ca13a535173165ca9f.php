
<?php $__env->startSection('title'); ?>
    <?php echo e(__('admin/email.read_message')); ?> (<?php echo e($readMail->name); ?>)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('components'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/email.read_message')); ?> (<?php echo e($readMail->name); ?>)</h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item"><a href="<?php echo e(route('mail.inbox')); ?>"><?php echo e(__('admin/email.inbox')); ?></a></li>
        <li class="breadcrumb-item active"><?php echo e(__('admin/email.read_message')); ?> (<?php echo e($readMail->name); ?>)</li>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-email'); ?>
    <div class="col-xl-9 col-md-12 xl-60">
        <div class="email-right-aside">
            <div class="card email-body">
                <div class="email-profile">
                    <div class="email-right-aside">
                        <div class="email-body">
                            <div class="email-content">
                                <div class="email-top">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="media">
                                                <img class="me-3 rounded-circle" src="<?php echo e(asset('admin/images/user/user.png')); ?>" alt="<?php echo e($readMail->name); ?>" />
                                                <div class="media-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h6 class="d-block"><?php echo e($readMail->name); ?></h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6 class="d-block"><?php echo e($readMail->user->user_type ?? 'user_type not found'); ?></h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6 class="d-block"><a href="tel://<?php echo e($readMail->phone); ?>"><?php echo e($readMail->phone); ?></a></h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6 class="d-block"><a href="mailto://<?php echo e($readMail->email); ?>"><?php echo e($readMail->email); ?></a> </h6>
                                                        </div>
                                                    </div>
                                                    <p><?php echo e($readMail->subject); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="emailread-group">
                                        <div class="read-group">
                                            <p><?php echo e($readMail->message); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.email.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/email/show.blade.php ENDPATH**/ ?>
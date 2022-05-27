<?php $__env->startSection('title'); ?>
    <?php echo e(__('admin/email.all_mail')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('components'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/email.all_mail')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item"><a href="<?php echo e(route('mail.inbox')); ?>"><?php echo e(__('admin/email.inbox')); ?></a></li>
        <li class="breadcrumb-item active"><?php echo e(__('admin/email.all_mail')); ?></li>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-email'); ?>
    <div class="col-xl-9 col-md-12 xl-70">
        <div class="email-right-aside">
            <div class="card email-body">
                <div class="email-profile">
                    <div class="inbox">
                        <?php echo $__env->make('dashboard.email.media-body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.email.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event\resources\views/dashboard/email/allMail.blade.php ENDPATH**/ ?>
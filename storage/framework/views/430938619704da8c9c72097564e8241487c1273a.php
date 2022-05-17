

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/user.edit_profile')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/user.edit_profile')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item"><?php echo e(__('admin/user.users')); ?></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('profile')); ?>"><?php echo e($model->name); ?></a> </li>
        <li class="breadcrumb-item active"><?php echo e(__('admin/user.edit_profile')); ?></li>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('layouts.admin.partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0"><?php echo e(__('admin/user.my_profile')); ?></h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('edit-profile-post')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo $__env->make('dashboard.users.form-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block" type="submit"><?php echo e(__('admin/home.save')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <form action="<?php echo e(route('edit-myProfile')); ?>" method="post" class="card" files="true" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0"><?php echo e(__('admin/user.edit_profile')); ?></h4>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <?php echo $__env->make('dashboard.users.form-myProfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit"><?php echo e(__('admin/user.update_profile')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/users/edit.blade.php ENDPATH**/ ?>
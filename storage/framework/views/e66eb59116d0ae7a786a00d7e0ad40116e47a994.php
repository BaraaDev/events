
<?php $model = app('App\Models\Category'); ?>

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/Category.create')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/Category.create')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item"><a href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('admin/category.categories')); ?></a> </li>
        <li class="breadcrumb-item active"><?php echo e(__('admin/Category.create')); ?></li>

    <?php echo $__env->renderComponent(); ?>

    <?php echo $__env->make('layouts.admin.partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-sm-12 col-xl-6 xl-100">
        <div class="card">
            <div class="card-header pb-0">
                <h5><?php echo e(__('admin/category.addCategory')); ?></h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> active  <?php endif; ?>" id="ar-tab" data-bs-toggle="pill" href="#ar" role="tab" aria-controls="ar" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.arabic')); ?><div class="media"></div></a></li>
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?> active  <?php endif; ?>" id="en-tab" data-bs-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.english')); ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'fr'): ?> active  <?php endif; ?>" id="fr-tab" data-bs-toggle="pill" href="#fr" role="tab" aria-controls="fr" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.french')); ?></a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="<?php echo e(route('categories.store')); ?>" method="post" id="alert-form">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('dashboard.categories.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <button class="btn btn-success mt-4 d-block me-auto" type="submit"><?php echo e(__('admin/Category.add_new')); ?></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\events\resources\views/dashboard/categories/create.blade.php ENDPATH**/ ?>
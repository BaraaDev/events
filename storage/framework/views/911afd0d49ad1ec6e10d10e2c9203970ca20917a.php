
<?php $__env->startSection('title'); ?>
- <?php echo app('translator')->get('website/home.all_categories'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

    <!-- Stunning Header -->

    <div class="crumina-stunning-header crumina-stunning-header--small stunning-header--content-inline bg-black">
        <div class="container">
            <div class="stunning-header-content c-white custom-color">
                <div class="inline-items">
                    <h4 class="stunning-header-title"><?php echo e(__('website/home.all_categories')); ?></h4>

                    
                    
                    
                </div>
            </div>
        </div>
    </div><!-- ... end Stunning Header -->
    <!-- Breadcrumbs -->
    <div class="container">
        <div class="row">
            <div class="breadcrumbs-wrap inline-items with-border">
                <a href="<?php echo e(route('home')); ?>" class="btn btn--transparent btn--round">
                    <svg class="utouch-icon utouch-icon-home-icon-silhouette">
                        <use xlink:href="#utouch-icon-home-icon-silhouette"></use>
                    </svg>
                </a>

                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item active">
                        <span><?php echo e(__('website/home.categories')); ?></span>
                        <svg class="utouch-icon utouch-icon-media-play-symbol">
                            <use xlink:href="#utouch-icon-media-play-symbol"></use>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ... end Breadcrumbs -->

    <!-- Main content starts -->

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
        </aside>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\events\resources\views/website/categories/index.blade.php ENDPATH**/ ?>
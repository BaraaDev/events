

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/tag.all_tags')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/tag.tags')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item active"><?php echo e(__('admin/tag.tags')); ?></li>
        <?php $__env->slot('bookmark'); ?>
            <a href="<?php echo e(route('tags.create')); ?>" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="<?php echo e(__('admin/tag.addTag')); ?>"><?php echo e(__('admin/tag.addTag')); ?></a>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php echo $__env->make('layouts.admin.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <h5><?php echo e(__('admin/tag.showTag')); ?> - <span class="b-b-success"><?php echo e(App\Models\Tag::count()); ?></span></h5>
                        <span><?php echo e(__('admin/tag.DescriptionTag')); ?></span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/tag.NameTag')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_history')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.update_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                                        <td class="text-center"><?php echo e($tag->name ?? 'not found'); ?></td>
                                        <td class="text-center"><?php echo e($tag->created_at->format('Y-D-M')); ?></td>
                                        <td class="text-center"><?php echo e($tag->create_user->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($tag->update_user->name ?? ''); ?></td>
                                        <td class="text-center">
                                            <?php echo Form::open([
                                                'route' => ['tags.destroy',$tag->id],
                                                'method' => 'delete'
                                            ]); ?>

                                            <button class="btn btn-danger btn-xs" onclick="return confirm('<?php echo e(__('admin/home.confirm')); ?>');" type="submit" title="<?php echo e(__('admin/home.delete')." ($tag->name)"); ?>"><?php echo e(__('admin/home.delete')); ?> </button>

                                            <a href="<?php echo e(route('tags.edit',$tag->id)); ?>" class="btn btn-primary btn-xs" type="button" title="<?php echo e(__('admin/home.edit')." ($tag->name)"); ?>"><li class="icon-pencil"></li> <?php echo e(__('admin/home.edit')); ?></a>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="alert alert-primary">
                                            <?php echo e(__('admin/home.alert_no_data')); ?>

                                        </div>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="m-b-30" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-primary">
                        <?php echo $tags->links('pagination::bootstrap-4'); ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('admin/js/bootstrap/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/bootstrap/bootstrap.min.js')); ?>"></script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/tags/index.blade.php ENDPATH**/ ?>
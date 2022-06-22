

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/contribution.all_contributions')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/contribution.contributions')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item active"><?php echo e(__('admin/contribution.contributions')); ?></li>

        <?php $__env->slot('bookmark'); ?>
            <a href="<?php echo e(route('contributions.create')); ?>" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="<?php echo e(__('admin/contribution.addContribution')); ?>"><?php echo e(__('admin/contribution.addContribution')); ?></a>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('layouts.admin.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?php echo e(__('admin/contribution.showContribution')); ?> - <span class="b-b-success"><?php echo e(App\Models\Contribution::count()); ?></span></h5>
                        <span><?php echo e(__('admin/contribution.DescriptionContribution')); ?></span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/contribution.title')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/contribution.content')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/category.NameCategory')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.status')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.update_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_history')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $contributions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contribution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>

                                        <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                                        <td class="text-center"><?php echo e($contribution->title); ?></td>
                                        <td class="text-center"><?php echo e(Str::limit($contribution->content,'45','......')); ?></td>
                                        <td class="text-center"><a href="<?php echo e(route('categories.edit',$contribution->category->id ?? '')); ?>"><?php echo e($contribution->category->name ?? ''); ?></a></td>
                                        <td class="text-center">
                                            <?php if($contribution->status == 0): ?>
                                                <div class="badge badge-danger">
                                                    <span><?php echo e(__('admin/home.unavailable_title')); ?></span>
                                                </div>
                                            <?php elseif($contribution->status == 1): ?>
                                                <div class="badge badge-success">
                                                    <span style="color:bisque;"><?php echo e(__('admin/home.available_title')); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center"><?php echo e($contribution->create_user->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($contribution->update_user->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($contribution->created_at->translatedFormat('Y-m-d')); ?></td>
                                        <td class="text-center">
                                            <?php echo Form::open([
                                                'route' => ['contributions.destroy',$contribution->id],
                                                'method' => 'delete'
                                            ]); ?>


                                            <button class="btn btn-danger btn-xs" onclick="return confirm('<?php echo e(__('admin/home.confirm')); ?>');" type="submit" title="<?php echo e(__('admin/home.delete')." ($contribution->name)"); ?>"><?php echo e(__('admin/home.delete')); ?> </button>

                                            <a href="<?php echo e(route('contributions.edit',$contribution->id)); ?>" class="btn btn-primary btn-xs" type="button" title="<?php echo e(__('admin/home.edit')." ($contribution->name)"); ?>"><li class="icon-pencil"></li> <?php echo e(__('admin/home.edit')); ?></a>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="alert alert-secondary">
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
                        <?php echo $contributions->links('pagination::bootstrap-5'); ?>

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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event\resources\views/dashboard/contributions/index.blade.php ENDPATH**/ ?>
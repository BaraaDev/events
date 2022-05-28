

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/service.deleted_services')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3><?php echo e(__('admin/service.deleted_services')); ?></h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('services.index')); ?>"><?php echo e(__('admin/service.services')); ?></a> </li>
<li class="breadcrumb-item active"><?php echo e(__('admin/service.deleted_services')); ?></li>
<?php $__env->slot('bookmark'); ?>
<a href="<?php echo e(route('services.create')); ?>" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="<?php echo e(__('admin/service.addService')); ?>"><?php echo e(__('admin/service.addService')); ?></a>
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php echo $__env->make('layouts.admin.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('admin/service.Show_deleted_services')); ?> - <span class="b-b-success"><?php echo e(App\Models\service::onlyTrashed()->count()); ?></span></h5>
                    <span><?php echo e(__('admin/service.DescriptionService_delete')); ?></span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/service.NameServices')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/service.description')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/category.NameCategory')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/service.price')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/service.address')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/service.available_date')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_history')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_delete')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                                        <td class="text-center"><?php echo e($service->name); ?></td>
                                        <td class="text-center"><?php echo e($service->description); ?></td>
                                        <td class="text-center"><?php echo e($service->category->name); ?></td>
                                        <td class="text-center"><?php echo e($service->price); ?></td>
                                        <td class="text-center"><?php echo e($service->address); ?></td>
                                        <td class="text-center"><?php echo e($service->available_date); ?></td>
                                        <td class="text-center"><?php echo e($service->create_user->name ?? ''); ?></td>
                                        <td class="text-center" title="<?php echo e($service->created_at->format('Y-D-M h:m')); ?>"><?php echo e($service->created_at->format('Y-D-M')); ?></td>
                                        <td class="text-center" title="<?php echo e($service->deleted_at->format('Y-D-M h:m')); ?>"><?php echo e($service->deleted_at->format('Y-D-M')); ?></td>
                                        <td class="text-center">
                                            <?php echo Form::open([
                                            'route' => ['services.forceDelete',$service->id],
                                            'method' => 'delete'
                                            ]); ?>

                                            <button class="btn btn-danger btn-xs" onclick="return confirm('<?php echo e(__('admin/home.confirmDelete')); ?>');" type="submit" title="<?php echo e(__('admin/home.delete_forever')." ($service->name)"); ?>"><?php echo e(__('admin/home.delete_forever')); ?> </button>
                                            <a href="<?php echo e(route('services.restore',$service->id)); ?>" onclick="return confirm('<?php echo e(__('admin/home.confirmRestore')); ?>');" class="btn btn-primary btn-xs" type="button" title="<?php echo e(__('admin/home.restore')." ($service->name)"); ?>"><?php echo e(__('admin/home.restore')); ?></a>
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
                    <?php echo $services->links('pagination::bootstrap-4'); ?>

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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\event\resources\views/dashboard/services/delete.blade.php ENDPATH**/ ?>
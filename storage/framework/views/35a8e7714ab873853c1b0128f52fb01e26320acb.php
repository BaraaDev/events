

<?php $__env->startSection('title'); ?> <?php echo e(__('admin/city.all_cities')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3><?php echo e(__('admin/city.cities')); ?></h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item active"><?php echo e(__('admin/city.cities')); ?></li>
<?php $__env->slot('bookmark'); ?>
<a href="<?php echo e(route('cities.create')); ?>" class="btn btn-pill btn-air-success btn-success-gradien" type="button" title="<?php echo e(__('admin/city.addCity')); ?>"><?php echo e(__('admin/city.addCity')); ?></a>
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php echo $__env->make('layouts.admin.partials.messages.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('admin/city.showCities')); ?> - <span class="b-b-success"><?php echo e(App\Models\City::count()); ?></span></h5>
                    <span><?php echo e(__('admin/city.cityDescription')); ?></span>
                </div>
                <div class="card-block row">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/city.cityNames')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/governorate.NameGovernorate')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/country.NameCountry')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.update_user')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.create_history')); ?></th>
                                        <th scope="col" class="text-center"><?php echo e(__('admin/home.action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo e($loop->iteration); ?></th>
                                        <td class="text-center"><?php echo e($city->name); ?></td>
                                        <td class="text-center"><?php echo e($city->governorate->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($city->country->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($city->create_user->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($city->update_user->name ?? ''); ?></td>
                                        <td class="text-center"><?php echo e($city->created_at->format('Y-D-M')); ?></td>
                                        <td class="text-center">
                                            <?php echo Form::open([
                                            'route' => ['cities.destroy',$city->id],
                                            'method' => 'delete'
                                            ]); ?>

                                            <button class="btn btn-danger btn-xs" onclick="return confirm('<?php echo e(__('admin/home.confirm')); ?>');" type="submit" title="<?php echo e(__('admin/home.delete')." ($city->name)"); ?>"><?php echo e(__('admin/home.delete')); ?> </button>
                                            <a href="<?php echo e(route('cities.edit',$city->id)); ?>" class="btn btn-primary btn-xs" type="button" title="<?php echo e(__('admin/home.edit')." ($city->name)"); ?>">
                                                <li class="icon-pencil"></li> <?php echo e(__('admin/home.edit')); ?>

                                            </a>
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
                    <?php echo $cities->links('pagination::bootstrap-4'); ?>

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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\events\resources\views/dashboard/cities/index.blade.php ENDPATH**/ ?>
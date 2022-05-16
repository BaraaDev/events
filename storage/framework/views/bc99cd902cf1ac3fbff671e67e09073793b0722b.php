<div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> show active <?php endif; ?>" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/city.city')); ?> <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')); ?>" type="text" name="name_ar" placeholder="<?php echo e(__('admin/home.Enter_name_ar')); ?>" autocomplete="off">
            <?php $__errorArgs = ['name_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?> show active <?php endif; ?>" id="en" role="tabpanel" aria-labelledby="en-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/city.city')); ?> <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')); ?>" type="text" name="name_en" placeholder="<?php echo e(__('admin/home.Enter_name_en')); ?>" autocomplete="off">
            <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'fr'): ?> show active <?php endif; ?>" id="fr" role="tabpanel" aria-labelledby="fr-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/city.city')); ?> <span class="text-danger">*</span> </label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')); ?>" type="text" name="name_fr" placeholder="<?php echo e(__('admin/home.Enter_name_fr')); ?>" autocomplete="off">
            <?php $__errorArgs = ['name_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="form-label col-lg-3"><?php echo e(__('admin/country.countries')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <?php $country = app('App\Models\Country'); ?>
        <?php echo Form::select('country_id',$country->pluck('name','id'),Request::old('country_id') ? Request::old('country_id') : $model->country_id,[
        'placeholder' => __('admin/home.select'),
        'class' => 'form-control select'.( $errors->has('country_id') ? ' is-invalid' : '' )
        ]); ?>

        <?php $__errorArgs = ['country_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<div class="form-group row">

    <label class="form-label col-lg-3"><?php echo e(__('admin/governorate.Governorates')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <?php $governorates = app('App\Models\Governorate'); ?>
        <?php echo Form::select('governorate_id',$governorates->pluck('name','id'),Request::old('governorate_id') ? Request::old('governorate_id') : $model->governorate_id,[
        'placeholder' => __('admin/home.select'),
        'class' => 'form-control select'.( $errors->has('governorate_id') ? ' is-invalid' : '' )
        ]); ?>

        <?php $__errorArgs = ['governorate_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<?php /**PATH E:\laragon\www\events\resources\views/dashboard/cities/form.blade.php ENDPATH**/ ?>
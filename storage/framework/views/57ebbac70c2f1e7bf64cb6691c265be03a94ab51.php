<div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> show active <?php endif; ?>" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.title')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['title_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')); ?>" type="text" name="title_ar" placeholder="<?php echo e(__('admin/home.Enter_name_ar')); ?>" autocomplete="off">
            <?php $__errorArgs = ['title_ar'];
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.content')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control <?php $__errorArgs = ['content_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="content_ar"><?php echo e(Request::old('content_ar') ? Request::old('content_ar') : $model->getTranslation('content','ar')); ?></textarea>
            <?php $__errorArgs = ['content_ar'];
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.title')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')); ?>" type="text" name="title_en" placeholder="<?php echo e(__('admin/home.Enter_name_en')); ?>" autocomplete="off">
            <?php $__errorArgs = ['title_en'];
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.content')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control <?php $__errorArgs = ['content_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="content_en"><?php echo e(Request::old('content_en') ? Request::old('content_en') : $model->getTranslation('content','en')); ?></textarea>
            <?php $__errorArgs = ['content_en'];
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.title')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['title_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')); ?>" type="text" name="title_fr" placeholder="<?php echo e(__('admin/home.Enter_name_fr')); ?>" autocomplete="off">
            <?php $__errorArgs = ['title_fr'];
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/contribution.content')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <textarea class="form-control <?php $__errorArgs = ['content_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="content_fr"><?php echo e(Request::old('content_fr') ? Request::old('content_fr') : $model->getTranslation('content','fr')); ?></textarea>
            <?php $__errorArgs = ['content_fr'];
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
    <label class="form-label col-lg-3"><?php echo e(__('admin/category.category')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <?php $category = app('App\Models\Category'); ?>
        <?php echo Form::select('category_id',$category->pluck('name','id'),Request::old('category_id') ? Request::old('category_id') : $model->category_id,[
            'placeholder' => __('admin/home.select'),
            'class'       => 'form-control select'. ( $errors->has('category_id') ? ' is-invalid' : '' )
        ]); ?>

        <?php $__errorArgs = ['category_id'];
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
    <label class="form-label col-lg-3"><?php echo e(__('admin/home.image')); ?></label>
    <div class="col-lg-9">
        <input class="form-control <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" name="images"/>
        <?php $__errorArgs = ['images'];
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
    <label class="form-label col-lg-3"><?php echo e(__('admin/home.status')); ?> <span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select name="status" class="form-control select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <option><?php echo e(__('admin/home.select')); ?></option>
            <option value="1" <?php echo e(isset($model) && $model->status == 1 ? 'selected'  : ''); ?>><?php echo e(__('admin/home.available')); ?></option>
            <option value="0" <?php echo e(isset($model) && $model->status == 0 ? 'selected'  : ''); ?>><?php echo e(__('admin/home.stopped')); ?></option>
        </select>
        <?php $__errorArgs = ['status'];
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
<?php /**PATH E:\laragon\www\events\resources\views/dashboard/contributions/form.blade.php ENDPATH**/ ?>
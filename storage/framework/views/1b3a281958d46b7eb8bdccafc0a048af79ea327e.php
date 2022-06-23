<div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> show active <?php endif; ?>" id="ar" role="tabpanel" aria-labelledby="ar-tab">
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.category')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_ar') ? Request::old('name_ar') : $model->getTranslation('name','ar')); ?>" type="text" name="name_ar" placeholder="<?php echo e(__('admin/home.enter_name_ar')); ?>" autocomplete="off">
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

    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.content')); ?> <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.category')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_en') ? Request::old('name_en') : $model->getTranslation('name','en')); ?>" type="text" name="name_en" placeholder="<?php echo e(__('admin/home.enter_name_en')); ?>" autocomplete="off">
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
    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.content')); ?> <span class="text-danger">*</span></label>
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
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.category')); ?> <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            <input class="form-control <?php $__errorArgs = ['name_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(Request::old('name_fr') ? Request::old('name_fr') : $model->getTranslation('name','fr')); ?>" type="text" name="name_fr" placeholder="<?php echo e(__('admin/home.enter_name_fr')); ?>" autocomplete="off">
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

    <div class="form-group row">
        <label class="form-label col-lg-3"><?php echo e(__('admin/category.content')); ?> <span class="text-danger">*</span></label>
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
    <label class="form-label col-lg-3">Icon's Text & Background Color<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select class="form-control <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="color"><?php echo e(Request::old('color') ? Request::old('color') : $model->color); ?>

            <option><?php echo e(__('admin/home.select')); ?></option>
            <option <?php echo e(isset($model) && $model->color == 'red' ? 'selected' : ''); ?> value="red">Red</option>
            <option <?php echo e(isset($model) && $model->color == 'blue' ? 'selected' : ''); ?> value="blue">Blue</option>
            <option <?php echo e(isset($model) && $model->color == 'cyan' ? 'selected' : ''); ?> value="cyan">Cyan</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(241, 148, 47)' ? 'selected' : ''); ?> value="rgb(241, 148, 47)">Orange</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(126, 57, 57)' ? 'selected' : ''); ?> value="rgb(126, 57, 57)">Brown</option>
            <option <?php echo e(isset($model) && $model->color == 'grey' ? 'selected' : ''); ?> value="grey">Grey</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(217, 128, 128)' ? 'selected' : ''); ?> value="rgb(217, 128, 128)">Light Red</option>
            <option <?php echo e(isset($model) && $model->color == 'beige' ? 'selected' : ''); ?> value="beige">Beige</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(145, 57, 124)' ? 'selected' : ''); ?> value="rgb(145, 57, 124)">Light Purple</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(50, 177, 164)' ? 'selected' : ''); ?> value="rgb(50, 177, 164)">Greenish Blue</option>
            <option <?php echo e(isset($model) && $model->color == 'rgb(207, 84, 137)' ? 'selected' : ''); ?> value="rgb(207, 84, 137)">Light Pinkish Red</option>
        </select>
        <?php $__errorArgs = ['color'];
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
    <label class="form-label col-lg-3">Icon<span class="text-danger">*</span></label>
    <div class="col-lg-9">
        <select class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="icon" value="<?php echo e(Request::old('icon') ? Request::old('icon') : $model->icon); ?>">
            <option><?php echo e(__('admin/home.select')); ?></option>
            <option value="svg/conference.svg">Conferences</option>
            <option value="svg/catering.svg">Catering</option>
            <option value="svg/birthday-parties.svg">Birthday Parties</option>
            <option value="svg/engagement-ring.svg">Engagement Ring</option>
            <option value="svg/barber-hairdresser.svg">Barber/Hairdresser</option>
            <option value="svg/grooms-and-brides-attires.svg">Grooms & Brides Attires</option>
            <option value="svg/graduation-parties.svg">Graduation Parties</option>
            <option value="svg/decorations.svg">Decorations</option>
            <option value="svg/flowers.svg">Florists</option>
        </select> <!-- the directory link of the image icon -->
        <?php $__errorArgs = ['icon'];
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
            <option value="1" <?php echo e(isset($model) && $model->status == 1 ? 'selected'  : ''); ?>><?php echo e(__('admin/home.available_title')); ?></option>
            <option value="0" <?php echo e(isset($model) && $model->status == 0 ? 'selected'  : ''); ?>><?php echo e(__('admin/home.unavailable_title')); ?></option>
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
<?php /**PATH E:\laragon\www\events\resources\views/dashboard/categories/form.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title'); ?> <?php echo e(__('admin/home.settings')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('admin/home.settings')); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item active"><?php echo e(__('admin/home.settings')); ?></li>

    <?php echo $__env->renderComponent(); ?>
    <?php echo $__env->make('layouts.admin.partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-sm-12 col-xl-6 xl-100">
        <div class="card">
            <div class="card-header pb-0">
                <h5><?php echo e(__('admin/home.check_changes')); ?></h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> active  <?php endif; ?>" id="ar-tab" data-bs-toggle="pill" href="#ar" role="tab" aria-controls="ar" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.arabic')); ?><div class="media"></div></a></li>
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'en'): ?> active  <?php endif; ?>" id="en-tab" data-bs-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.english')); ?></a></li>
                    <li class="nav-item"><a class="nav-link <?php if(LaravelLocalization::getCurrentLocale() == 'fr'): ?> active  <?php endif; ?>" id="fr-tab" data-bs-toggle="pill" href="#fr" role="tab" aria-controls="fr" aria-selected="<?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> true <?php else: ?> false <?php endif; ?>"><?php echo e(__('admin/home.french')); ?></a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="<?php echo e(route('setting.update')); ?>" method="post" id="alert-form">
                        <?php echo csrf_field(); ?>

                        <div class="tab-pane fade mt-4 <?php if(LaravelLocalization::getCurrentLocale() == 'ar'): ?> show active <?php endif; ?>" id="ar" role="tabpanel" aria-labelledby="ar-tab">
                            <div class="form-group row">
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.title_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control <?php $__errorArgs = ['title_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(Request::old('title_ar') ? Request::old('title_ar') : $settings->getTranslation('title','ar')); ?>" type="text" name="title_ar" placeholder="<?php echo e(__('admin/home.Enter_title_ar')); ?>" autocomplete="off">
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
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.content_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control <?php $__errorArgs = ['content_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required type="text" name="content_ar"><?php echo e(Request::old('content_ar') ? Request::old('content_ar') : $settings->getTranslation('content','ar')); ?></textarea>
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
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.title_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control <?php $__errorArgs = ['title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(Request::old('title_en') ? Request::old('title_en') : $settings->getTranslation('title','en')); ?>" type="text" name="title_en" placeholder="<?php echo e(__('admin/home.Enter_title_en')); ?>" autocomplete="off">
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
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.content_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control <?php $__errorArgs = ['content_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required type="text" name="content_en"><?php echo e(Request::old('content_en') ? Request::old('content_en') : $settings->getTranslation('content','en')); ?></textarea>
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
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.title_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control <?php $__errorArgs = ['title_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(Request::old('title_fr') ? Request::old('title_fr') : $settings->getTranslation('title','fr')); ?>" type="text" name="title_fr" placeholder="<?php echo e(__('admin/home.Enter_title_fr')); ?>" autocomplete="off">
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
                                <label class="form-label col-lg-3"><?php echo e(__('admin/home.content_site')); ?> <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control <?php $__errorArgs = ['content_fr'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required type="text" name="content_fr"><?php echo e(Request::old('content_fr') ? Request::old('content_fr') : $settings->getTranslation('content','fr')); ?></textarea>
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.email')); ?> <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" required name="email" placeholder="<?php echo e(__('admin/home.enter_email')); ?>" autocomplete="off" required value="<?php echo e(Request::old('email') ? Request::old('email') : $settings->email); ?>"/>
                                <?php $__errorArgs = ['email'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.phone')); ?> <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="phone" placeholder="<?php echo e(__('admin/home.enter_phone')); ?>" autocomplete="off" required value="<?php echo e(Request::old('phone') ? Request::old('phone') : $settings->phone); ?>"/>
                                <?php $__errorArgs = ['phone'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.whatsApp')); ?> <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['whatsApp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="tel" name="whatsApp" placeholder="<?php echo e(__('admin/home.enter_whatsApp')); ?>" autocomplete="off" required value="<?php echo e(Request::old('whatsApp') ? Request::old('whatsApp') : $settings->whatsApp); ?>"/>
                                <?php $__errorArgs = ['whatsApp'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.facebook')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="facebook" placeholder="<?php echo e(__('admin/home.enter_facebook')); ?>" autocomplete="off" value="<?php echo e(Request::old('facebook') ? Request::old('facebook') : $settings->facebook); ?>"/>
                                <?php $__errorArgs = ['facebook'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.twitter')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="twitter" placeholder="<?php echo e(__('admin/home.enter_twitter')); ?>" autocomplete="off" value="<?php echo e(Request::old('twitter') ? Request::old('twitter') : $settings->twitter); ?>"/>
                                <?php $__errorArgs = ['twitter'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.instagram')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="instagram" placeholder="<?php echo e(__('admin/home.enter_instagram')); ?>" autocomplete="off" value="<?php echo e(Request::old('instagram') ? Request::old('instagram') : $settings->instagram); ?>"/>
                                <?php $__errorArgs = ['instagram'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.telegram')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['telegram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="telegram" placeholder="<?php echo e(__('admin/home.enter_telegram')); ?>" autocomplete="off" value="<?php echo e(Request::old('telegram') ? Request::old('telegram') : $settings->telegram); ?>"/>
                                <?php $__errorArgs = ['telegram'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.linkedin')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['linkedin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="linkedin" placeholder="<?php echo e(__('admin/home.enter_linkedin')); ?>" autocomplete="off" value="<?php echo e(Request::old('linkedin') ? Request::old('linkedin') : $settings->linkedin); ?>"/>
                                <?php $__errorArgs = ['linkedin'];
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
                            <label class="form-label col-lg-3"><?php echo e(__('admin/home.location')); ?></label>
                            <div class="col-lg-9">
                                <input class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="location" placeholder="<?php echo e(__('admin/home.enter_location')); ?>" autocomplete="off" value="<?php echo e(Request::old('location') ? Request::old('location') : $settings->location); ?>"/>
                                <?php $__errorArgs = ['location'];
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

                        <button class="btn btn-success mt-4 d-block me-auto" type="submit"><?php echo e(__('admin/tag.update')); ?></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/setting.blade.php ENDPATH**/ ?>
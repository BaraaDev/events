<div class="card-body">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.name')); ?></label>
                <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name" placeholder="<?php echo e(__('admin/user.enter_full_name')); ?>" autocomplete="off" value="<?php echo e(Request::old('name') ? Request::old('name') : $model->name); ?>"/>
                <?php $__errorArgs = ['name'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.username')); ?></label>
                <input class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="username" placeholder="<?php echo e(__('admin/user.enter_username')); ?>" autocomplete="off" value="<?php echo e(Request::old('username') ? Request::old('username') : $model->username); ?>"/>
                <?php $__errorArgs = ['username'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.phone')); ?></label>
                <input class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="tel" name="phone" placeholder="<?php echo e(__('admin/user.enter_phone')); ?>" autocomplete="off" value="<?php echo e(Request::old('phone') ? Request::old('phone') : $model->phone); ?>"/>
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.email')); ?></label>
                <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" placeholder="<?php echo e(__('admin/user.enter_email')); ?>" autocomplete="off" value="<?php echo e(Request::old('email') ? Request::old('email') : $model->email); ?>"/>
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
        <div class="col-sm-6 col-md-6">
            <label class="form-label"><?php echo e(__('admin/user.gender')); ?></label>
            <div class="form-group m-checkbox-inline custom-radio-ml">
                <div class="radio radio-primary">
                    <input id="radioinline1" type="radio" name="gender" <?php echo e(isset($model) && $model->gender == 'male' ? 'checked'  : ''); ?>  value="male">
                    <label class="mb-0" for="radioinline1"><?php echo e(__('admin/user.male')); ?></label>
                </div>
                <div class="radio radio-primary">
                    <input id="radioinline2" type="radio" name="gender" <?php echo e(isset($model) && $model->gender == 'female' ? 'checked'  : ''); ?> value="female">
                    <label class="mb-0" for="radioinline2"><?php echo e(__('admin/user.female')); ?></label>

                </div>

            </div>
            <?php $__errorArgs = ['gender'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.dob')); ?></label>
                <input class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="dob" autocomplete="off" value="<?php echo e(Request::old('dob') ? Request::old('dob') : $model->dob); ?>"/>
                <?php $__errorArgs = ['dob'];
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
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.address')); ?></label>
                <input class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="address" placeholder="<?php echo e(__('admin/user.enter_address')); ?>" autocomplete="off" value="<?php echo e(Request::old('address') ? Request::old('address') : $model->address); ?>"/>
                <?php $__errorArgs = ['address'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.postal_code')); ?></label>
                <input class="form-control <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="postal_code" placeholder="<?php echo e(__('admin/user.enter_postal_code')); ?>" autocomplete="off" value="<?php echo e(Request::old('postal_code') ? Request::old('postal_code') : $model->postal_code); ?>"/>
                <?php $__errorArgs = ['postal_code'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.state_province')); ?></label>
                <input class="form-control <?php $__errorArgs = ['state_province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="state_province" placeholder="<?php echo e(__('admin/user.enter_state_province')); ?>" autocomplete="off" value="<?php echo e(Request::old('state_province') ? Request::old('state_province') : $model->state_province); ?>"/>
                <?php $__errorArgs = ['state_province'];
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
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Country</label>
                <?php $countries = app('App\Models\Country'); ?>
                <?php echo Form::select('country_id',$countries->pluck('name','id'),Request::old('country_id') ? Request::old('country_id') : $model->country_id,[
                    'placeholder' => __('admin/home.select'),
                    'class'       => 'form-control select'. ( $errors->has('country_id') ? ' is-invalid' : '' )
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
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">Governorate</label>
                <?php $governorate = app('App\Models\Governorate'); ?>
                <?php echo Form::select('governorate_id',$governorate->pluck('name','id'),Request::old('governorate_id') ? Request::old('governorate_id') : $model->governorate_id,[
                    'placeholder' => __('admin/home.select'),
                    'class'       => 'form-control select'. ( $errors->has('governorate_id') ? ' is-invalid' : '' )
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
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">City</label>
                <?php $cities = app('App\Models\City'); ?>
                <?php echo Form::select('city_id',$cities->pluck('name','id'),Request::old('city_id') ? Request::old('city_id') : $model->city_id,[
                    'placeholder' => __('admin/home.select'),
                    'class'       => 'form-control select'.( $errors->has('city_id') ? ' is-invalid' : '' )
                ]); ?>

                <?php $__errorArgs = ['city_id'];
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
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label"><?php echo e(__('admin/user.about_me')); ?></label>
                <textarea class="form-control" rows="5" name="bio" placeholder="<?php echo e(__('admin/user.enter_bio')); ?>"><?php echo e(Request::old('bio') ? Request::old('bio') : $model->bio); ?></textarea>
                <?php $__errorArgs = ['bio'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-3 input-group-solid">
                <label class="form-label"><?php echo e(__('admin/user.facebook')); ?></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icofont icofont-social-facebook"></i></span>
                    <input class="form-control <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="facebook" placeholder="<?php echo e(__('admin/user.enter_facebook')); ?>" autocomplete="off" value="<?php echo e(Request::old('facebook') ? Request::old('facebook') : $model->facebook); ?>"/>
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
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="mb-3 input-group-solid">
                <label class="form-label"><?php echo e(__('admin/user.twitter')); ?></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icofont icofont-social-twitter"></i></span>
                    <input class="form-control <?php $__errorArgs = ['twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="twitter" placeholder="<?php echo e(__('admin/user.enter_twitter')); ?>" autocomplete="off" value="<?php echo e(Request::old('twitter') ? Request::old('twitter') : $model->twitter); ?>"/>
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
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="mb-3 input-group-solid">
                <label class="form-label"><?php echo e(__('admin/user.instagram')); ?></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icofont icofont-social-instagram"></i></span>
                    <input class="form-control <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="instagram" placeholder="<?php echo e(__('admin/user.enter_instagram')); ?>" autocomplete="off" value="<?php echo e(Request::old('instagram') ? Request::old('instagram') : $model->instagram); ?>"/>
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
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="mb-3 input-group-solid">
                <label class="form-label"><?php echo e(__('admin/user.whatsApp')); ?></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icofont icofont-social-whatsapp"></i></span>
                    <input class="form-control <?php $__errorArgs = ['whatsApp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="tel" name="whatsApp" placeholder="<?php echo e(__('admin/user.enter_whatsApp')); ?>" autocomplete="off" value="<?php echo e(Request::old('whatsApp') ? Request::old('whatsApp') : $model->whatsApp); ?>"/>
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
        </div>
        <div class="col-sm-4 col-md-4">
            <div class="mb-3 input-group-solid">
                <label class="form-label"><?php echo e(__('admin/user.telegram')); ?></label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icofont icofont-social-telegram"></i></span>
                    <input class="form-control <?php $__errorArgs = ['telegram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="telegram" placeholder="<?php echo e(__('admin/user.enter_telegram')); ?>" autocomplete="off" value="<?php echo e(Request::old('telegram') ? Request::old('telegram') : $model->telegram); ?>"/>
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
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="mb-6">
                <label class="form-label"><?php echo e(__('admin/user.avatar')); ?></label>
                <input class="form-control <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" name="avatar"/>
                <?php $__errorArgs = ['avatar'];
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
        <div class="col-sm-6 col-md-6">
            <div class="mb-6">
                <label class="form-label"><?php echo e(__('admin/user.cover')); ?></label>
                <input class="form-control <?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" name="cover"/>
                <?php $__errorArgs = ['cover'];
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
</div>
<?php /**PATH E:\laragon\www\events\resources\views/dashboard/users/form-myProfile.blade.php ENDPATH**/ ?>
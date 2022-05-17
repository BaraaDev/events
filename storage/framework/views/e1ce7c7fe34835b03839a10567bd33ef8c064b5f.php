

<?php $__env->startSection('title'); ?> <?php echo e($user->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e($user->name); ?></h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item"><?php echo e(__('admin/user.users')); ?></li>
        <li class="breadcrumb-item active"><?php echo e($user->name); ?></li>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user users header start-->
                <div class="col-sm-12">
                    <div class="card profile-header">
                        <img class="img-fluid bg-img-cover" src="<?php echo e($user->getFirstMediaUrl('cover')); ?>" alt="cover <?php echo e($user->name); ?>" />
                        <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="<?php echo e($user->getFirstMediaUrl('cover')); ?>" alt="cover <?php echo e($user->name); ?>" /></div>
                        <div class="userpro-box">
                            <div class="img-wrraper">
                                <div class="avatar"><img class="img-fluid" alt="<?php echo e($user->name); ?>" src="<?php echo e($user->photo); ?>" /></div>
                                <a class="icon-wrapper" href="<?php echo e(route('edit-profile')); ?>"><i class="icofont icofont-pencil-alt-5"></i></a>
                            </div>
                            <div class="user-designation">
                                <div class="title">
                                    <a target="_blank" href="">
                                        <h4><?php echo e($user->name); ?></h4>
                                        <?php if($user->user_type =='dashboard'): ?>
                                            <h6>Admin</h6>
                                        <?php else: ?>
                                            <h6><?php echo e($user->user_type); ?></h6>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="social-media">
                                    <ul class="user-list-social">
                                        <li>
                                            <a href="https://facebook.com/<?php echo e($user->facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/<?php echo e($user->twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/<?php echo e($user->instagram); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://whatsapp.com/<?php echo e($user->whatsapp); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/<?php echo e($user->telegram); ?>" target="_blank"><i class="fa fa-telegram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="follow">
                                    <ul class="follow-list">
                                        <li>
                                            <div class="follow-num counter">325</div>
                                            <span>Follower</span>
                                        </li>
                                        <li>
                                            <div class="follow-num counter">450</div>
                                            <span>Following</span>
                                        </li>
                                        <li>
                                            <div class="follow-num counter">500</div>
                                            <span>Likes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user users header end-->
                <div class="col-xl-3 col-lg-12 col-md-5 xl-35">
                    <div class="default-according style-1 faq-accordion job-accordion">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="p-0">
                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2"><?php echo e(__('admin/user.about_me')); ?></button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
                                        <div class="card-body post-about">
                                            <ul>
                                                <li>
                                                    <div class="icon"><i data-feather="at-sign"></i></div>
                                                    <div>
                                                        <h5><?php echo e($user->username ?? __('admin/home.alertUsername')); ?></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                    <div>
                                                        <h5><?php echo e($user->email ?? __('admin/home.alertEmail')); ?></h5>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="icon"><i data-feather="map-pin"></i></div>
                                                    <div>
                                                        <h5><?php echo e($user->address ?? __('admin/home.alertLocation')); ?></h5>
                                                        <p><?php echo e($user->city->name ?? ''); ?> - <?php echo e($user->governorate->name ?? ''); ?> - <?php echo e($user->country->name ?? ''); ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon"><i class="icofont icofont-air-balloon"></i></div>
                                                    <div>
                                                        <h5><?php echo e($user->dob); ?></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <?php if($user->gender == 'male'): ?>
                                                        <div class="icon"><i class="fa fa-male"></i></div>
                                                    <?php else: ?>
                                                        <div class="icon"><i class="fa fa-venus"></i></div>
                                                    <?php endif; ?>
                                                    <div>
                                                        <h5><?php echo e($user->gender ?? __('admin/home.alertGender')); ?></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
                    <div class="card">
                        <div class="card-body">
                            <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <!-- event start-->
                            <div class="col-xxl-12 col-lg-12">
                                <div class="project-box">
                                    <?php if($event->status == 'Stopped'): ?>
                                    <span class="badge badge-danger"><?php echo e($event->status); ?></span>
                                    <?php elseif($event->status == 'Available'): ?>
                                    <span class="badge badge-success"><?php echo e($event->status); ?></span>
                                    <?php elseif($event->status == 'Expired'): ?>
                                    <span class="badge badge-dark"><?php echo e($event->status); ?></span>
                                    <?php endif; ?>
                                    <h6><?php echo e($event->title); ?></h6>
                                    <div class="media">
                                        <img class="img-20 me-2 rounded-circle" src="<?php echo e(asset('admin/images/user/3.jpg')); ?>" alt="" data-original-title="" title="" />
                                        <div class="media-body">
                                            <p><?php echo e($event->user->name ?? ''); ?></p>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="row details">
                                        <div class="col-6"><span><?php echo e(__('admin/event.time')); ?></span></div>
                                        <div class="col-6 font-secondary"><?php echo e($event->time); ?></div>
                                        <div class="col-6"><span><?php echo e(__('admin/event.date')); ?></span></div>
                                        <div class="col-6 font-secondary"><?php echo e($event->date); ?></div>
                                        <div class="col-6"><span><?php echo e(__('admin/event.budget')); ?></span></div>
                                        <div class="col-6 font-danger"><?php echo e($event->budget); ?> <?php echo e(__('admin/home.currency')); ?></div>
                                    </div>
                                </div>
                            </div>
                                <!-- event end-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-primary">
                                    <?php echo e(__('admin/home.alert_no_data')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('admin/js/counter/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/counter/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/counter/counter-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/dashboard/users/profile.blade.php ENDPATH**/ ?>
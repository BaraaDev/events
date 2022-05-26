<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="<?php echo e(asset('admin/images/logo/logo.png')); ?>" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="javascript:void(0)" style="color: snow; font-weight: bold;">Graduation Project 2 - AASTMT&#169;</a></div>
            <!--<div class="dark-logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="<?php echo e(asset('admin/images/logo/dark-logo.png')); ?>" alt=""></a></div>-->
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"> </i></div>
        </div>
        <div class="left-menu-header col">
            <ul>
                <li>
                    <form class="form-inline search-form">
                        <div class="search-bg"><i class="fa fa-search"></i>
                            <input class="form-control-plaintext" placeholder="Search here.....">
                        </div>
                    </form>
                    <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">

            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>

                <li class="onhover-dropdown">
                    <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                    <ul class="notification-dropdown onhover-show-div">

                        <li>
                            <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                        </li>
                        <li class="noti-primary">
                            <div class="media">
                                <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                                <div class="media-body">
                                    <p>Delivery processing </p>
                                    <span>10 minutes ago</span>
                                </div>
                            </div>
                        </li>

                        <li class="noti-secondary">
                            <div class="media">
                                <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                                <div class="media-body">
                                    <p>Order Complete</p>
                                    <span>1 hour ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="noti-success">
                            <div class="media">
                                <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                                <div class="media-body">
                                    <p>Tickets Generated</p>
                                    <span>3 hour ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="noti-danger">
                            <div class="media">
                                <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                                <div class="media-body">
                                    <p>Delivery Complete</p>
                                    <span>6 hour ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                     <div class="mode"><i id="dark-only" class="<?php if($theme == 'dark-only'): ?> fa fa-lightbulb-o <?php else: ?> fa fa-moon-o <?php endif; ?>"></i></div>
                 </li>

                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i><?php echo e(__('admin/home.logout')); ?></button>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            </ul>
        </div>

        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
<?php /**PATH E:\laragon\www\event\resources\views/layouts/admin/partials/header.blade.php ENDPATH**/ ?>
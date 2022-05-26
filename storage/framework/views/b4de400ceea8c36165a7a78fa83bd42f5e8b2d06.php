<header class="header header--menu-rounded header--blue-lighteen" id="site-header">

    <div class="header-lines-decoration">
        <span class="bg-secondary-color"></span>
        <span class="bg-blue"></span>
        <span class="bg-blue-light"></span>
        <span class="bg-orange-light"></span>
        <span class="bg-red"></span>
        <span class="bg-green"></span>
        <span class="bg-secondary-color"></span>
    </div>

    <div class="container">

        <a href="javascript:void(0)" id="top-bar-js" class="top-bar-link">
            <svg class="utouch-icon utouch-icon-arrow-top">
                <use xlink:href="#utouch-icon-arrow-top"></use>
            </svg>
        </a>
        <div class="header-content-wrapper">

            <div class="site-logo">
                <a href="<?php echo e(route('home')); ?>" class="full-block"></a>
                <img src="<?php echo e(asset('website/img/logo.png')); ?>" alt="touch">
                <div class="logo-text">
                    <div class="logo-title"><?php echo e($setting->title ?? ''); ?></div>
                    <div class="logo-sub-title"><?php echo e($setting->content ?? ''); ?></div>
                </div>
            </div>

            <nav id="primary-menu" class="primary-menu">

                <!-- menu-icon-wrapper -->

                <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                    <span class="mob-menu--title">Menu</span>
                    <span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
                </a>

                <ul class="primary-menu-menu">
                    <li class="menu-item-has-children"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('website/home.home')); ?></a></li>
                    <li><a href="<?php echo e(route('allEvents')); ?>"><?php echo e(__('website/home.events')); ?></a></li>
                    <li>
                        <a href="javascript:void(0)"><?php echo e(__('website/home.categories')); ?></a>
                        <ul class="sub-menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('event.category',$category->id)); ?>"><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><?php echo e(__('website/home.about_us')); ?></a></li>

                    <li><a href="javascript:void(0)"><?php echo e(__('website/home.contact_us')); ?></a></li>


                    <?php if(!auth()->user()): ?>
                        <li>
                            <a href="javascript:void(0)"><?php echo e(__('auth.register')); ?></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo e(route('register')); ?>"><?php echo e(__('auth.register')); ?></a></li>
                                <li><a href="<?php echo e(route('login')); ?>"><?php echo e(__('auth.login')); ?></a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="javascript:void(0)" style="color: #0083FF;" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='#0083FF'"><?php echo e(auth()->user()->name ?? ''); ?></a>
                            <ul class="sub-menu">
                            <?php if(auth()->user()->user_type == 'dashboard'): ?>
                                <li><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('admin/home.dashboard')); ?></a></li>
                            <?php endif; ?>
                                <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><?php echo e(__('auth.logout')); ?></a></li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="nav-add">
                    <li class="search search_main">
                        <a href="#" class="js-open-search-popup">
                            <svg class="utouch-icon utouch-icon-search cd-nav-trigger">
                                <use xlink:href="#utouch-icon-search"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="search-standard">
                    <form id="search-header" name="form-search-header" method="post">
                        <div class="typeahead__container">
                            <div class="typeahead__field">

							<span class="typeahead__query">
								<input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
							</span>
                                <button type="submit" class="form-icon">
                                    <svg class="utouch-icon utouch-icon-search">
                                        <use xlink:href="#utouch-icon-search"></use>
                                    </svg>
                                </button>
                                <span class="close js-popup-clear-input form-icon">
								<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
							</span>

                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="header-spacer"></div>
<?php /**PATH E:\laragon\www\events\resources\views/layouts/website/partials/header.blade.php ENDPATH**/ ?>
<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="<?php echo e(route('edit-profile')); ?>"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo e(auth()->user()->photo ?? ''); ?>" alt="avatar <?php echo e(auth()->user()->name ?? ''); ?>" />
        <?php $data = Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays(Carbon\Carbon::now()); ?>
        <?php if($data <= 7): ?> <div class="badge-bottom">
            <span class="badge badge-primary">New </span>
    </div>
    <?php endif; ?>
    <a href="<?php echo e(route('profile')); ?>">
        <h6 class="mt-3 f-14 f-w-600 name"><?php echo e(auth()->user()->name ?? ''); ?></h6>
    </a>
    <p class="mb-0 font-roboto"><?php echo e(auth()->user()->email ?? ''); ?></p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6><?php echo e(__('admin/home.sidebar_main_title')); ?></h6>
                        </div>
                    </li>
                    <!------------- Start route dashboard ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="<?php echo e(route('dashboard')); ?>"><i data-feather="home"></i><span><?php echo e(__('admin/home.dashboard')); ?></span></a>
                    </li>
                    <!------------- End route dashboard ------------->

                    <!------------- Start route main website ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('home')); ?>"><i data-feather="home"></i><span><?php echo e(__('website/home.home')); ?></span></a>
                    </li>
                    <!------------- End route main website ------------->


                    <!------------- Start route sliders ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('sliders.index') || routeActive('sliders.create') || routeActive('sliders.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="sliders"></i>
                            <span><?php echo e(__('admin/slider.sliders')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('sliders.index') || routeActive('sliders.create')  || routeActive('sliders.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('sliders.create')); ?>" class="<?php echo e(routeActive('sliders.create')); ?>"><?php echo e(__('admin/slider.create')); ?></a></li>
                            <li><a href="<?php echo e(route('sliders.index')); ?>" class="<?php echo e(routeActive('sliders.index')); ?>"><?php echo e(__('admin/slider.all_sliders')); ?></a></li>
                            <li><a href="<?php echo e(route('sliders.delete')); ?>" class="<?php echo e(routeActive('sliders.delete')); ?>"><?php echo e(__('admin/slider.deleted_sliders')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route sliders ------------->


                    <!------------- Start route tags ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('tags.index') || routeActive('tags.create') || routeActive('tags.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="hash"></i>
                            <span><?php echo e(__('admin/tag.tags')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('tags.index') || routeActive('tags.create')  || routeActive('tags.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('tags.create')); ?>" class="<?php echo e(routeActive('tags.create')); ?>"><?php echo e(__('admin/tag.create')); ?></a></li>
                            <li><a href="<?php echo e(route('tags.index')); ?>" class="<?php echo e(routeActive('tags.index')); ?>"><?php echo e(__('admin/tag.all_tags')); ?></a></li>
                            <li><a href="<?php echo e(route('tags.delete')); ?>" class="<?php echo e(routeActive('tags.delete')); ?>"><?php echo e(__('admin/tag.deleted_tags')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route tags ------------->


                    <!------------- Start route countries ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="flag"></i>
                            <span><?php echo e(__('admin/country.countries')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete')): ?>  block <?php else: ?> none <?php endif; ?>; ">
                            <li><a href="<?php echo e(route('countries.create')); ?>" class="<?php echo e(routeActive('countries.create')); ?>"><?php echo e(__('admin/country.create')); ?></a></li>
                            <li><a href="<?php echo e(route('countries.index')); ?>" class="<?php echo e(routeActive('countries.index')); ?>"><?php echo e(__('admin/country.all_countries')); ?></a></li>
                            <li><a href="<?php echo e(route('countries.delete')); ?>" class="<?php echo e(routeActive('countries.delete')); ?>"><?php echo e(__('admin/country.deleted_countries')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route countries ------------->


                    <!------------- Start route governorates ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="map"></i>
                            <span><?php echo e(__('admin/governorate.Governorates')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('governorates.create')); ?>" class="<?php echo e(routeActive('governorates.create')); ?>"><?php echo e(__('admin/governorate.create')); ?></a></li>
                            <li><a href="<?php echo e(route('governorates.index')); ?>" class="<?php echo e(routeActive('governorates.index')); ?>"><?php echo e(__('admin/governorate.all_Governorates')); ?></a></li>
                            <li><a href="<?php echo e(route('governorates.delete')); ?>" class="<?php echo e(routeActive('governorates.delete')); ?>"><?php echo e(__('admin/governorate.deleted_governorates')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route governorates ------------->


                    <!------------- Start route cities ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="map-pin"></i>
                            <span><?php echo e(__('admin/city.cities')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('cities.create')); ?>" class="<?php echo e(routeActive('cities.create')); ?>"><?php echo e(__('admin/city.create')); ?></a></li>
                            <li><a href="<?php echo e(route('cities.index')); ?>" class="<?php echo e(routeActive('cities.index')); ?>"><?php echo e(__('admin/city.all_cities')); ?></a></li>
                            <li><a href="<?php echo e(route('cities.delete')); ?>" class="<?php echo e(routeActive('cities.delete')); ?>"><?php echo e(__('admin/city.deleted_cities')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route cities ------------->


                    <!------------- Start route categories ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="list"></i>
                            <span><?php echo e(__('admin/category.categories')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('categories.create')); ?>" class="<?php echo e(routeActive('categories.create')); ?>"><?php echo e(__('admin/category.create')); ?></a></li>
                            <li><a href="<?php echo e(route('categories.index')); ?>" class="<?php echo e(routeActive('categories.index')); ?>"><?php echo e(__('admin/category.all_categories')); ?></a></li>
                            <li><a href="<?php echo e(route('categories.delete')); ?>" class="<?php echo e(routeActive('categories.delete')); ?>"><?php echo e(__('admin/category.deleted_categories')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route categories ------------->

                    <!------------- Start route services ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('services.index') || routeActive('services.create') || routeActive('services.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="service"></i>
                            <span><?php echo e(__('admin/service.services')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('services.index') || routeActive('services.create') || routeActive('services.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('services.create')); ?>" class="<?php echo e(routeActive('services.create')); ?>"><?php echo e(__('admin/service.create')); ?></a></li>
                            <li><a href="<?php echo e(route('services.index')); ?>" class="<?php echo e(routeActive('services.index')); ?>"><?php echo e(__('admin/service.all_services')); ?></a></li>
                            <li><a href="<?php echo e(route('services.delete')); ?>" class="<?php echo e(routeActive('services.delete')); ?>"><?php echo e(__('admin/service.deleted_services')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route services ------------->


                    <!------------- Start route events ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('events.index') || routeActive('events.create') || routeActive('categories.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="calendar"></i>
                            <span><?php echo e(__('admin/event.events')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('events.index') || routeActive('events.create') || routeActive('categories.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('events.create')); ?>" class="<?php echo e(routeActive('events.create')); ?>"><?php echo e(__('admin/event.create')); ?></a></li>
                            <li><a href="<?php echo e(route('events.index')); ?>" class="<?php echo e(routeActive('events.index')); ?>"><?php echo e(__('admin/event.all_events')); ?></a></li>
                            <li><a href="<?php echo e(route('events.delete')); ?>" class="<?php echo e(routeActive('events.delete')); ?>"><?php echo e(__('admin/event.deleted_events')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route events ------------->


                    <!------------- Start route contributions ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('contributions.index') || routeActive('contributions.create') || routeActive('contributions.delete')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="edit"></i>
                            <span><?php echo e(__('admin/contribution.contributions')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('contributions.index') || routeActive('contributions.create')  || routeActive('contributions.delete')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('contributions.create')); ?>" class="<?php echo e(routeActive('contributions.create')); ?>"><?php echo e(__('admin/contribution.create')); ?></a></li>
                            <li><a href="<?php echo e(route('contributions.index')); ?>" class="<?php echo e(routeActive('contributions.index')); ?>"><?php echo e(__('admin/contribution.all_contributions')); ?></a></li>
                            <li><a href="<?php echo e(route('contributions.delete')); ?>" class="<?php echo e(routeActive('contributions.delete')); ?>"><?php echo e(__('admin/contribution.deleted_contributions')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route contributions ------------->


                    <!------------- Start route setting ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php if(routeActive('setting')): ?> active <?php endif; ?>" href="javascript:void(0)">
                            <i data-feather="settings"></i>
                            <span><?php echo e(__('admin/home.settings')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php if(routeActive('setting')): ?> block <?php else: ?> none <?php endif; ?> ;">
                            <li><a href="<?php echo e(route('setting')); ?>" class="<?php echo e(routeActive('setting')); ?>"><?php echo e(__('admin/home.settings')); ?></a></li>
                        </ul>
                    </li>
                    <!------------- End route setting ------------->
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header><?php /**PATH E:\laragon\www\events\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>
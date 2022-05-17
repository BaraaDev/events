<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('edit-profile') }}"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{auth()->user()->photo ?? ''}}" alt="avatar {{auth()->user()->name ?? ''}}" />
        @php $data = Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays(Carbon\Carbon::now()); @endphp
        @if($data <= 7)
            <div class="badge-bottom">
                <span class="badge badge-primary">New </span>
            </div>
        @endif
        <a href="{{route('profile')}}">
            <h6 class="mt-3 f-14 f-w-600 name">{{auth()->user()->name ?? ''}}</h6>
        </a>
        <p class="mb-0 font-roboto">{{auth()->user()->email ?? ''}}</p>
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
                            <h6>{{__('admin/home.sidebar_main_title')}}</h6>
                        </div>
                    </li>
                    <!------------- Start route dashboard ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title active" href="{{route('dashboard')}}"><i data-feather="home"></i><span>{{__('admin/home.dashboard')}}</span></a>
                    </li>
                    <!------------- End route dashboard ------------->
                    <!------------- Start route site ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('home')}}"><i data-feather="home"></i><span>{{__('website/home.home')}}</span></a>
                    </li>
                    <!------------- End route site ------------->


                    <!------------- Start route contributions ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('contributions.index') || routeActive('contributions.create') || routeActive('contributions.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="edit"></i>
                            <span>{{__('admin/contribution.contributions')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('contributions.index') || routeActive('contributions.create')  || routeActive('contributions.delete')) block @else none @endif ;">
                            <li><a href="{{ route('contributions.create') }}" class="{{routeActive('contributions.create')}}">{{__('admin/contribution.create')}}</a></li>
                            <li><a href="{{ route('contributions.index') }}" class="{{routeActive('contributions.index')}}">{{__('admin/contribution.all_contributions')}}</a></li>
                            <li><a href="{{ route('contributions.delete') }}" class="{{routeActive('contributions.delete')}}">{{__('admin/contribution.deleted_contributions')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route contributions ------------->


                    <!------------- Start route sliders ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('sliders.index') || routeActive('sliders.create') || routeActive('sliders.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="sliders"></i>
                            <span>{{__('admin/slider.sliders')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('sliders.index') || routeActive('sliders.create')  || routeActive('sliders.delete')) block @else none @endif ;">
                            <li><a href="{{ route('sliders.create') }}" class="{{routeActive('sliders.create')}}">{{__('admin/slider.create')}}</a></li>
                            <li><a href="{{ route('sliders.index') }}" class="{{routeActive('sliders.index')}}">{{__('admin/slider.all_sliders')}}</a></li>
                            <li><a href="{{ route('sliders.delete') }}" class="{{routeActive('sliders.delete')}}">{{__('admin/slider.deleted_sliders')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route sliders ------------->

                    
                    <!------------- Start route tags ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('tags.index') || routeActive('tags.create') || routeActive('tags.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="hash"></i>
                            <span>{{__('admin/tag.tags')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('tags.index') || routeActive('tags.create')  || routeActive('tags.delete')) block @else none @endif ;">
                            <li><a href="{{ route('tags.create') }}" class="{{routeActive('tags.create')}}">{{__('admin/tag.create')}}</a></li>
                            <li><a href="{{ route('tags.index') }}" class="{{routeActive('tags.index')}}">{{__('admin/tag.all_tags')}}</a></li>
                            <li><a href="{{ route('tags.delete') }}" class="{{routeActive('tags.delete')}}">{{__('admin/tag.deleted_tags')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route tags ------------->


                    <!------------- Start route countries ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="flag"></i>
                            <span>{{__('admin/country.countries')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete'))  block @else none @endif; ">
                            <li><a href="{{ route('countries.create') }}" class="{{routeActive('countries.create')}}">{{__('admin/country.create')}}</a></li>
                            <li><a href="{{ route('countries.index') }}" class="{{routeActive('countries.index')}}">{{__('admin/country.all_countries')}}</a></li>
                            <li><a href="{{ route('countries.delete') }}" class="{{routeActive('countries.delete')}}">{{__('admin/country.deleted_countries')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route countries ------------->


                    <!------------- Start route governorate ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="map"></i>
                            <span>{{__('admin/governorate.Governorates')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')) block @else none @endif ;">
                            <li><a href="{{ route('governorates.create') }}" class="{{routeActive('governorates.create')}}">{{__('admin/governorate.create')}}</a></li>
                            <li><a href="{{ route('governorates.index') }}" class="{{routeActive('governorates.index')}}">{{__('admin/governorate.all_Governorates')}}</a></li>
                            <li><a href="{{ route('governorates.delete') }}" class="{{routeActive('governorates.delete')}}">{{__('admin/governorate.deleted_governorates')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route governorate ------------->


                    <!------------- Start route cities ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="map-pin"></i>
                            <span>{{__('admin/city.cities')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')) block @else none @endif ;">
                            <li><a href="{{ route('cities.create') }}" class="{{routeActive('cities.create')}}">{{__('admin/city.create')}}</a></li>
                            <li><a href="{{ route('cities.index') }}" class="{{routeActive('cities.index')}}">{{__('admin/city.all_cities')}}</a></li>
                            <li><a href="{{ route('cities.delete') }}" class="{{routeActive('cities.delete')}}">{{__('admin/city.deleted_cities')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route cities ------------->


                    <!------------- Start route categories ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="list"></i>
                            <span>{{__('admin/category.categories')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')) block @else none @endif ;">
                            <li><a href="{{ route('categories.create') }}" class="{{routeActive('categories.create')}}">{{__('admin/category.create')}}</a></li>
                            <li><a href="{{ route('categories.index') }}" class="{{routeActive('categories.index')}}">{{__('admin/category.all_categories')}}</a></li>
                            <li><a href="{{ route('categories.delete') }}" class="{{routeActive('categories.delete')}}">{{__('admin/category.deleted_categories')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route categories ------------->


                    <!------------- Start route events ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('events.index') || routeActive('events.create') || routeActive('categories.delete')) active @endif" href="javascript:void(0)">
                            <i data-feather="calendar"></i>
                            <span>{{__('admin/event.events')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('events.index') || routeActive('events.create') || routeActive('categories.delete')) block @else none @endif ;">
                            <li><a href="{{ route('events.create') }}" class="{{routeActive('events.create')}}">{{__('admin/event.create')}}</a></li>
                            <li><a href="{{ route('events.index') }}" class="{{routeActive('events.index')}}">{{__('admin/event.all_events')}}</a></li>
                            <li><a href="{{ route('events.delete') }}" class="{{routeActive('events.delete')}}">{{__('admin/event.deleted_events')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route events ------------->


                    <!------------- Start route setting ------------->
                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('setting')) active @endif" href="javascript:void(0)">
                            <i data-feather="settings"></i>
                            <span>{{__('admin/home.settings')}}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('setting')) block @else none @endif ;">
                            <li><a href="{{ route('setting') }}" class="{{routeActive('setting')}}">{{__('admin/home.settings')}}</a></li>
                        </ul>
                    </li>
                    <!------------- End route setting ------------->
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>

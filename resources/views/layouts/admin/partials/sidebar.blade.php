<style>
    .sidebar-user .name:hover{color: snow; transition: 0.55s ease-in-out;};
</style>

<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('admin/images/dashboard/1.png')}}" alt="" />
        @php $data = Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays(Carbon\Carbon::now()); @endphp
        <div class="badge-bottom"><span class="badge badge-primary">@if($data <= 7) New @endif</span>
        </div>
        <a href="javascript:void(0)">
            <h6 class="mt-3 f-14 f-w-600 name">{{auth()->user()->name}}</h6>
        </a>
        <p class="mb-0 font-roboto">{{auth()->user()->email}}</p>

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
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ routeActive('dashboard')}}" href="javascript:void(0)"><i data-feather="home"></i><span>{{__('admin/home.dashboard')}}</span></a>
                    </li>

                    <!------------- Tags List ------------->

                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('tags.index') || routeActive('tags.create')  || routeActive('tags.delete')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                                <line x1="4" y1="9" x2="20" y2="9"></line>
                                <line x1="4" y1="15" x2="20" y2="15"></line>
                                <line x1="10" y1="3" x2="8" y2="21"></line>
                                <line x1="16" y1="3" x2="14" y2="21"></line>
                            </svg>

                            <span>{{__('admin/tag.tags')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('tags.index') || routeActive('tags.create')  || routeActive('tags.delete')) block @else none @endif ;">
                            <li><a href="{{ route('tags.create') }}" class="{{routeActive('tags.create')}}">{{__('admin/tag.create')}}</a></li>
                            <li><a href="{{ route('tags.index') }}" class="{{routeActive('tags.index')}}">{{__('admin/tag.all_tags')}}</a></li>
                            <li><a href="{{ route('tags.delete') }}" class="{{routeActive('tags.delete')}}">{{__('admin/tag.deleted_tags')}}</a></li>
                        </ul>
                    </li>

                    <!------------- Countries List ------------->


                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                <line x1="4" y1="22" x2="4" y2="15"></line>
                            </svg>
                            <span>{{__('admin/country.countries')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('countries.index') || routeActive('countries.create') || routeActive('countries.delete'))  block @else none @endif; ">
                            <li><a href="{{ route('countries.create') }}" class="{{routeActive('countries.create')}}">{{__('admin/country.create')}}</a></li>
                            <li><a href="{{ route('countries.index') }}" class="{{routeActive('countries.index')}}">{{__('admin/country.all_countries')}}</a></li>
                            <li><a href="{{ route('countries.delete') }}" class="{{routeActive('countries.delete')}}">{{__('admin/country.deleted_countries')}}</a></li>
                        </ul>
                    </li>

                    <!------------- Governorate List ------------->

                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map">
                                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                <line x1="8" y1="2" x2="8" y2="18"></line>
                                <line x1="16" y1="6" x2="16" y2="22"></line>
                            </svg>
                            <span>{{__('admin/governorate.Governorates')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('governorates.index') || routeActive('governorates.create') || routeActive('governorates.delete')) block @else none @endif ;">
                            <li><a href="{{ route('governorates.create') }}" class="{{routeActive('governorates.create')}}">{{__('admin/governorate.create')}}</a></li>
                            <li><a href="{{ route('governorates.index') }}" class="{{routeActive('governorates.index')}}">{{__('admin/governorate.all_Governorates')}}</a></li>
                            <li><a href="{{ route('governorates.delete') }}" class="{{routeActive('governorates.delete')}}">{{__('admin/governorate.deleted_governorates')}}</a></li>
                        </ul>
                    </li>

                    <!------------- Cities List ------------->

                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                                <line x1="8" y1="2" x2="8" y2="18"></line>
                                <line x1="16" y1="6" x2="16" y2="22"></line>
                            </svg>
                            <span>{{__('admin/city.cities')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('cities.index') || routeActive('cities.create') || routeActive('cities.delete')) block @else none @endif ;">
                            <li><a href="{{ route('cities.create') }}" class="{{routeActive('cities.create')}}">{{__('admin/city.create')}}</a></li>
                            <li><a href="{{ route('cities.index') }}" class="{{routeActive('cities.index')}}">{{__('admin/city.all_cities')}}</a></li>
                            <li><a href="{{ route('cities.delete') }}" class="{{routeActive('cities.delete')}}">{{__('admin/city.deleted_cities')}}</a></li>
                        </ul>
                    </li>

                    <!------------- Categories List ------------->

                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3" y2="6"></line>
                                <line x1="3" y1="12" x2="3" y2="12"></line>
                                <line x1="3" y1="18" x2="3" y2="18"></line>
                            </svg>
                            <span>{{__('admin/category.categories')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('categories.index') || routeActive('categories.create') || routeActive('categories.delete')) block @else none @endif ;">
                            <li><a href="{{ route('categories.create') }}" class="{{routeActive('categories.create')}}">{{__('admin/category.create')}}</a></li>
                            <li><a href="{{ route('categories.index') }}" class="{{routeActive('categories.index')}}">{{__('admin/category.all_categories')}}</a></li>
                            <li><a href="{{ route('categories.delete') }}" class="{{routeActive('categories.delete')}}">{{__('admin/category.deleted_categories')}}</a></li>
                        </ul>
                    </li>

                    <!------------- Events List ------------->

                    <li class="dropdown">
                        <a class="nav-link menu-title @if(routeActive('events.index') || routeActive('events.create')) active @endif" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span>{{__('admin/event.events')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(routeActive('events.index') || routeActive('events.create')) block @else none @endif ;">
                            <li><a href="{{ route('events.create') }}" class="{{routeActive('events.create')}}">{{__('admin/event.create')}}</a></li>
                            <li><a href="{{ route('events.index') }}" class="{{routeActive('events.index')}}">{{__('admin/event.all_events')}}</a></li>
                            <li><a href="#" class="#">{{__('admin/event.deleted_events')}}</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
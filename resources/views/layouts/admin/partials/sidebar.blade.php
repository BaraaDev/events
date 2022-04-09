<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('admin/images/dashboard/1.png')}}" alt="" />
        @php $data = Carbon\Carbon::parse(Auth::user()->created_at)->diffInDays(Carbon\Carbon::now()); @endphp
        <div class="badge-bottom"><span class="badge badge-primary">@if($data <= 7) New @endif</span></div>
        <a href="javascript:void(0)"> <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->name}}</h6></a>
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

                    <li class="dropdown">

                        <a class="nav-link menu-title @if(routeActive('tags.index') or routeActive('tags.create')) active @endif" href="javascript:void(0)"><i data-feather="edit-3"></i><span>{{__('admin/tag.tags')}}</span></a>
                        <ul class="nav-submenu menu-content" style="display: @if(prefixBlock('tags.index') || routeActive('tags.create')) block @else none @endif ;">
                            <li><a href="{{ route('tags.index') }}" class="{{routeActive('tags.index')}}">{{__('admin/tag.all_tags')}}</a></li>
                            <li><a href="{{ route('tags.create') }}" class="{{routeActive('tags.create')}}">{{__('admin/tag.create')}}</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>

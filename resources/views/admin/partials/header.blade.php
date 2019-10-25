<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-right">
            <div class="header-dots">
                <div class="dropdown">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                        class="p-0 mr-2 btn btn-link">
                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg bg-primary"></span>
                            <i class="icon text-primary ion-android-apps"></i>
                        </span>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-plum-plate">
                                <div class="menu-header-image"
                                    style="background-image: url('/admin_assets/images/dropdown-header/abstract4.jpg');">
                                </div>
                                <div class="menu-header-content text-white">
                                    <h5 class="menu-header-title">{{__('admin.pages.dashboard.quick_access')}}</h5>
                                    <h6 class="menu-header-subtitle">{{__('admin.pages.dashboard.quick_create')}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="grid-menu grid-menu-xl grid-menu-3col">
                            <div class="no-gutters row">
                                <div style="border: 1px solid #e9ecef !important; background-color: none !important;"
                                    class="col-sm-12">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        {{-- <a href="{{route('create.agents')}}" --}}
                                            class="fa fa-building icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></a>
                                        {{-- {{__('admin.pages.dashboard.quick_create_agent')}} --}}
                                    </button>
                                </div>
                                <div style="border: 1px solid #e9ecef !important; background-color: none !important;"
                                    class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        {{-- <a href="{{route('create.representative')}}"
                                            class="fa fa-briefcase icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </a>
                                        {{__('admin.pages.dashboard.quick_create_representative')}} --}}
                                    </button>
                                </div>

                                <div style="border: 1px solid #e9ecef !important; background-color: none !important;"
                                    class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        {{-- <a href="{{route('create.user')}}"
                                            class="fa fa-address-card icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </a> --}}
                                        {{__('admin.pages.dashboard.quick_create_user')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="dropdown">
                    <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false"
                        class="p-0 btn btn-link dd-chart-btn">
                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg bg-focus"></span>
                            <i class="icon text-primary ion-ios-analytics"></i>
                        </span>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-premium-dark">
                                <div class="menu-header-image"
                                    style="background-image: url('/admin_assets/images/dropdown-header/abstract5.jpg');">
                                </div>
                                <div class="menu-header-content text-white">
                                    <h5 class="menu-header-title">{{__('admin.pages.dashboard.total_policies')}}
                                    </h5>
                                    <h6 class="menu-header-subtitle">
                                        {{__('admin.pages.dashboard.recent_policies_counting')}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="widget-chart">
                            <div class="widget-chart-content">
                                <div class="icon-wrapper rounded-circle">
                                    <div class="icon-wrapper-bg opacity-9 bg-focus">
                                    </div>
                                    <i class="fa fa-file text-white">
                                    </i>
                                </div>
                                <div class="widget-numbers">
                                    {{-- <span>{{App\Policy::count()}}</span> --}}
                                </div>
                                <div class="widget-subheading pt-2">
                                    {{__('admin.pages.dashboard.policy_since_creation')}}
                                </div>
                            </div>
                            <div class="widget-chart-wrapper">
                                <div id="dashboard-sparkline-carousel-3-pop"></div>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item-divider mt-0 nav-item">
                            </li>
                            {{-- <a href="{{route('admin.policies')}}" class="nav-item-btn text-center nav-item">
                                <button class="btn-shine btn-wide btn-pill btn btn-danger btn-sm">
                                    <i class="text-white fa fa-cog fa-spin mr-2">
                                    </i>
                                    {{__('admin.pages.dashboard.view_policies_details')}}
                                </button>
                            </a> --}}
                        </ul>
                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                            <span class="icon-wrapper-bg bg-focus"></span>
                            @if(app()->getLocale() == 'ar')

                            <span class="language-icon opacity-8 flag large SY"></span>
                            @else
                            <span class="language-icon opacity-8 flag large US"></span>

                            @endif

                        </span>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="rm-pointers dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                <div class="menu-header-image opacity-05"
                                    style="background-image: url('/admin_assets/images/dropdown-header/city3.jpg');">
                                </div>
                                <div class="menu-header-content text-center text-white">
                                    <h6 class="menu-header-subtitle mt-0">
                                        {{__('admin.pages.dashboard.choose_language')}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <h6 tabindex="-1" class="dropdown-header">
                            {{__('admin.pages.dashboard.available_languages')}}
                        </h6>

                        <a href="{{url('lang/en')}}" tabindex="0" class="dropdown-item">
                            <span class="mr-3 opacity-8 flag large US"></span>
                            {{__('admin.pages.dashboard.english')}}
                        </a>
                        <a href="{{url('lang/ar')}}" tabindex="0" class="dropdown-item">
                            <span class="mr-3 opacity-8 flag large SY"></span>
                            {{__('admin.pages.dashboard.arabic')}}
                        </a>
                    </div>
                </div>
            </div>

            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="/admin_assets/images/avatars/user_avatar.png"
                                        alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="p-0 m-0 rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header p-0 m-0">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2"
                                                style="background-image: url('/admin_assets/images/dropdown-header/abstract10.jpg');">
                                            </div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle"
                                                                src="/admin_assets/images/avatars/user_avatar.png" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">test
                                                            </div>
                                                            <div class="widget-subheading opacity-8">test
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <button
                                                                class="btn-pill btn-shadow btn-shine btn btn-focus">
                                                        <a class="text-white" href="{{route('logout')}}">Logout</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Chat
                                                        <div class="ml-auto badge badge-pill badge-info">8
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Recover Password
                                                    </a>
                                                </li>
                                                <li class="nav-item-header nav-item">My Account
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Settings
                                                        <div class="ml-auto badge badge-success">New
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Messages
                                                        <div class="ml-auto badge badge-warning">512
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Logs
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                    </ul>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button
                                                    class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                    <i
                                                        class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                    Message Inbox
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button
                                                    class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                    <i
                                                        class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                    <b>Support Tickets</b>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item">
                                        </li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-wide btn btn-primary btn-sm">
                                                Open Messages
                                            </button>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{Auth::user()->username }}
                            </div>
                            <div class="widget-subheading">
                                {{Auth::user()->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

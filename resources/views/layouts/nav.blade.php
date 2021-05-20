<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{ url('/') }}">
                        <h2 class="brand-text">Olympics</h2></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>
                    <!--
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Stack..." tabindex="0" data-search="template-search">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    -->
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        @if(\Session::get('locale') == 'ru')
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="/locale/ru" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-ru"></i> <span class="align-middle">Русский</span> <i class="mdi mdi-chevron-down"></i>
                            </a>
                        @elseif(\Session::get('locale') == 'en')
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="/locale/en" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
                            </a>
                        @else
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop" href="/locale/uz" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-uz"></i> <span class="align-middle">Oʻzbekcha</span> <i class="mdi mdi-chevron-down"></i>
                            </a>
                        @endif

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
                            <!-- item-->
                            @if(\Session::get('locale') != 'uz')
                                <a href="/locale/uz" class="dropdown-item notify-item">
                                    <i class="flag-icon flag-icon-uz"></i> <span class="align-middle">Oʻzbekcha</span>
                                </a>
                            @endif

                        <!-- item-->
                            @if(\Session::get('locale') != 'ru')
                                <a href="/locale/ru" class="dropdown-item notify-item">
                                    <i class="flag-icon flag-icon-ru"></i> <span class="align-middle">Русский</span>
                                </a>
                            @endif

                        <!-- item-->
                            @if(\Session::get('locale') != 'en')
                                <a href="/locale/en" class="dropdown-item notify-item">
                                    <i class="flag-icon flag-icon-us"></i> <span class="align-middle">English</span>
                                </a>
                            @endif
                        </div>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="avatar avatar-online"><img src="/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></div><span class="user-name">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    @else
                        <li class="dropdown nav-item">
                            <a class="nav-link arrow-none"  id="topbar-languagedrop" href="{{ route('login') }}"  aria-haspopup="true" aria-expanded="false">
                                <strong><span class="align-middle">@lang('topbar.login')</span></strong>
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="nav-link arrow-none"  id="topbar-languagedrop" href="{{ route('register') }}"  aria-haspopup="true" aria-expanded="false">
                                <strong><span class="align-middle">@lang('topbar.register')</span></strong>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

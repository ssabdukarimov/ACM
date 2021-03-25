<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main pt-1" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Email Application">@lang('left_sidebar.home')</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('users.index') }}"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Chat Application">@lang('left_sidebar.users')</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.html"><i class="fa fa-tasks"></i> <span class="menu-title" data-i18n="Todo Application">@lang('left_sidebar.problems')</span></a>
            </li>
            <li class=" nav-item"><a href="app-kanban.html"><i class="feather icon-check"></i><span class="menu-title" data-i18n="Kanban Application">@lang('left_sidebar.attempts')</span></a>
            </li>
            <li class=" nav-item"><a href="project-summary.html"><i class="fa fa-trophy"></i><span class="menu-title" data-i18n="Project Summary">@lang('left_sidebar.contests')</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

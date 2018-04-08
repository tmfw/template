<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">@lang('menu_main_navigation')</li>

                <li>
                    <a href="{{ url('/') }}">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">@lang('menu_dashboard')</span>
                    </a>
                </li>

                <li class="nav-small-cap">Modules</li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-briefcase-check"></i>
                        <span class="hide-menu">@lang('menu_companies')</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('/') }}">Register Partner</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Sidebar menu -->
    </div>
</aside>
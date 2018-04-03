<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">@lang('menu_main_navigation')</li>

                <li>
                    <a href="{{ url('/home') }}">
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
                        <li><a href="{{ url('register/company') }}">Register Partner</a></li>
                        <li><a href="{{ url('admin/partners/all') }}">Partner Companies</a></li>
                        <li><a href="{{ url('register/company/user') }}">@lang('menu_distributor')</a></li>
                        <li><a href="{{ url('admin/branch/all') }}">@lang('menu_point_of_sale')</a></li>
                        <li><a href="{{ url('partner/account/history') }}">@lang('menu_partner_account_history')</a></li>
                        <li><a href="{{ url('admin/assign/stock') }}">@lang('menu_partner_assign_stock')</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu"><?php echo lang('menu_users_title'); ?></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('user/customers') }}">@lang('menu_clients')</a></li>
                        <li><a href="{{ url('customer/accounts') }}">@lang('menu_customer_accounts')</a></li>
                        <li><a href="{{ url('customer/account/history') }}">@lang('menu_customer_account_history')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/transfer/bank') }}">
                        <i class="mdi mdi-bank"></i>
                        <span class="hide-menu">@lang('menu_bank_transfer')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/transfer/account') }}">
                        <i class="mdi mdi-account-convert"></i>
                        <span class="hide-menu">@lang('menu_account_transfer')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/transfer/airtime') }}">
                        <i class="mdi mdi-access-point"></i>
                        <span class="hide-menu">@lang('menu_airtime_transfer')</span>
                    </a>
                </li>

                <!-- Administration -->
                <li class="nav-small-cap">@lang('menu_administration')</li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-key"></i>
                        <span class="hide-menu">@lang('menu_users_admin')</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/system/users/add') }}">Register system user</a></li>
                        <li><a href="{{ url('admin/system/users') }}">@lang('menu_users')</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Sidebar menu -->
    </div>
</aside>
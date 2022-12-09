<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/dashboard')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

        <!-- Heading -->
        <div class="sidebar">
            <nav class="sidebar-nav">
        
                <ul class="nav">
                    @can('user_management_access')
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link  nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-users nav-icon">
                                    
                                </i>
                                {{ trans('cruds.userManagement.title') }}
                            </a>
                            <ul class="nav-dropdown-items">
                                @can('permission_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-unlock-alt nav-icon">
        
                                            </i>
                                            {{ trans('cruds.permission.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('role_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-briefcase nav-icon">
        
                                            </i>
                                            {{ trans('cruds.role.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('user_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                            <i class="fa-fw fas fa-user nav-icon">
        
                                            </i>
                                            {{ trans('cruds.user.title') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('team_access')
                                    <li class="nav-item">
                                        <a href="{{ route("admin.teams.index") }}" class="nav-link {{ request()->is('admin/teams') || request()->is('admin/teams/*') ? 'active' : '' }}">
                                            <i class="fa-fw fa fa-map-marker nav-icon">
        
                                            </i>
                                            {{ trans('cruds.team.title') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('asset_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.assets.index") }}" class="nav-link {{ request()->is('admin/assets') || request()->is('admin/assets/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">
        
                                </i>
                                {{ trans('cruds.asset.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('stock_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.stocks.index") }}" class="nav-link {{ request()->is('admin/stocks') || request()->is('admin/stocks/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">
        
                                </i>
                                {{ trans('cruds.stock.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('transaction_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.transactions.index") }}" class="nav-link {{ request()->is('admin/transactions') || request()->is('admin/transactions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">
        
                                </i>
                                {{ trans('cruds.transaction.title') }}
                            </a>
                        </li>
                    @endcan
                    @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    {{ trans('global.change_password') }}
                                </a>
                            </li>
                        @endcan
                    @endif
                </ul>
        
            </nav>
            {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
        </div>
        
    <!-- Sidebar Toggler (Sidebar) -->
</ul>

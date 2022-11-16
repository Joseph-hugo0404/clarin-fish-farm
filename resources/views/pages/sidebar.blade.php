<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="margin-top: -50px" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('images/bfar.png')}}" style="width:60px;" alt="BFAR Logo">
        </div>
        <div class="sidebar-brand-text mx-3">BFAR&#xB7;FARM</div>
    </a>
    
    <hr class="sidebar-divider bg-white">

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}" aria-current="page" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>
    </li>
    <hr class="sidebar-divider my-0 bg-white">

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'production' ? 'active' : '' }}" aria-current="page" href="/production"><i class="fas fa-chart-area"></i> Production</a>
    </li>
    @if(Auth::user()->type == 'Admin')
    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'all_transaction' ? 'active' : '' }}" aria-current="page" href="/all_transaction"><i class="fas fa-file-invoice-dollar"></i> Transaction</a>
    </li>@endif
    
    <!-- Department -->
    {{-- <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'depart' ? 'active' : '' }}" aria-current="page" href="/depart"><i class="fa-solid fas fa-th"></i> Department</a>
    </li> --}}
    <!-- End Department -->
    <!-- Employee -->

    <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'customer' ? 'active' : '' }}" aria-current="page" href="/customer"><i class="fa-solid fas fa-users"></i> Customers</a>
    </li>
</ul>
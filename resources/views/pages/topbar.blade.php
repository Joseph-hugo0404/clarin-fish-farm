<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        <ul class="nav justify-content-end">
            <li class="nav-item">
              <i class="nav fas fa-users" style="color:lightgreen;display: block;margin-left: auto;margin-right: auto;width: 50%;margin-top:5%"></i>
              <a class="nav" href="{{ route('profile') }}" style="margin-right: 0px;color: rgb(2, 2, 2);text-decoration: none;">{{ Auth::user()->name }}</a>
            </li>
        
        <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item">
                <i class="nav fas fa-long-arrow-alt-right" style="color:lightgreen;display: block;margin-left: auto;margin-right: auto;width: 50%;margin-top:5%"></i>
                <a class="nav" href="{{ route('logout') }}" style="margin-right: 0px;color: rgb(0, 0, 0);text-decoration: none;">Logout</a>
            </li>
        </ul>
        <!-- Nav Item - User Information -->
        

    </ul>

</nav>

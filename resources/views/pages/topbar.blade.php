<nav class="navbar topbar bfar-bg mb-4 static-top shadow">

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
              <i class="nav fas fa-user" style="color:lightgreen;display: block;margin-left: auto;margin-right: auto;width: 50%;margin-top:5%"></i>
              <a class="nav" href="{{ route('profile') }}" style="margin-right: 0px;color: rgb(255, 255, 255);text-decoration: none;font-size: 15px">{{ Auth::user()->name }}</a>
            </li>
        
        <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item">
                <i class="nav fas fa-right-to-bracket" style="color:lightgreen;display: block;margin-left: auto;margin-right: auto;width: 50%;margin-top:5%"></i>
                <a class="nav" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: rgb(255, 255, 255);font-size: 15px">Logout</a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::open(['url'=>'/logout', 'method'=>'post']) !!}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">
                            Logout
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
                </div>
            </div>

            </li>
        </ul>
        <!-- Nav Item - User Information -->
    </ul>

        
        <!-- Modal -->

</nav>

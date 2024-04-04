<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('kk-list')}}" class="nav-link">
                                <i class="fas fa-address-card"></i>
                                <p>Kartu Keluarga</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pdk-list')}}" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>
                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{route('user-list')}}" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{route('logout')}}" class="nav-link"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="fas fa-sign-out"></i> Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

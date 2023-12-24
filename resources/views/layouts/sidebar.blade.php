<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/1.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    @auth
                    {{ auth()->user()->name }}
                    @endauth
                    ({{ auth()->user()->role }})
                </a>
            </div>
        </div>

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

            <li class="nav-item">
                    <a href="{{ route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
        
                <li class="nav-item">
                    <a href="{{ route('profile')}}" class="nav-link">
                    <i class="nav-icon fa fa-shopping-bag"></i>
                        <p>
                            Shop
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>

                @if (auth()->user()->role == 'admin')

                <li class="nav-item">
                    <a href="{{ route('products')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Products
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pie')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Pie Charts
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('column')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Column Charts
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                @endif
                
                <li class="nav-item" style="margin-left: 1px;">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                             <i class="nav-icon fas fa-power-off"></i>
                            {{ __('Logout') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

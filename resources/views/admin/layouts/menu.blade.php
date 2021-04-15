<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link" style="text-decoration: none;">
        <img src="{{ asset('lte/') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('lte/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="text-decoration: none;">Hi {{ auth()->user()->name }}</a>
            </div>
        </div>

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

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(auth()->user()->user_role == 1)
                    <li class="nav-item" title="Hi {{ auth()->user()->name }}">
                        <a href="{{ route('admin.confirm') }}" class="nav-link">
                            <i class="nav-icon far fa-user text-primary"></i>
                            <p class="text-light">
                                Basket Confirm
                            </p>
                        </a>
                    </li>

                    <li class="nav-item" title="Hi {{ auth()->user()->name }}">
                        <a href="{{ route('user.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-columns text-primary"></i>
                            <p>
                                User Create
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Create</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Brands
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('brand.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brand Create</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-shopping-basket"></i>
                        <p>
                            Basket
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('basket.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Basket</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

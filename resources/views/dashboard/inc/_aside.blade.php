<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard.index')}}" class="brand-link">
        <img src="{{asset('dashboard/img')}}/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-normal">MyPOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dashboard/img')}}/default.png" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <span class="text-light">{{auth()->user()->username}}</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p class="ml-1">Dashboard</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{route('dashboard.cats.index')}}" class="nav-link">
                <i class="fas fa-list"></i>
                <p class="ml-1">@lang('site.cats')</p>
                </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a href="{{route('dashboard.products.index')}}" class="nav-link">
                <i class="fas fa-tv"></i>
                <p class="ml-1">@lang('site.products.products')</p>
                </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('dashboard.orders.index')}}" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <p class="ml-1">@lang('site.orders')</p>
                    </a>
                </li> --}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

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

                <li class="nav-item">
                    <a href="{{route('dashboard.users.index')}}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p class="ml-1">@lang('site.users')</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('dashboard.posts.index')}}" class="nav-link">
                        <i class="fas fa-blog"></i>
                        <p class="ml-1">@lang('site.posts')</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('dashboard.pages.index')}}" class="nav-link">
                        <i class="fas fa-file-alt"></i>
                        <p class="ml-1">@lang('site.pages')</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

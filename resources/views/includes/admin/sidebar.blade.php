<aside class="main-sidebar sidebar-dark-primary elevation-4 custom-admin">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/landing/v2/images/logo.png" alt="AdminLTE Logo"
             style="height: 20px">
        <span class="brand-text font-weight-light ml-2">{{auth()->user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview  {{active(['admin.dashboard'], 'menu-open', '')}}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{active(['admin.dashboard'], 'active', '')}}">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.user')}}" class="nav-link {{active(['admin.user', 'admin.user.edit'], 'active', '')}}">

                        <i class="fas fa-users"></i>
                        <p>
                            Quản lý user
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('admin.category')}}" class="nav-link {{active(['admin.category'], 'active', '')}}">--}}
{{--                        <i class="fad fa-th-list"></i>--}}
{{--                        <p>Quản lý danh mục</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route('admin.product')}}" class="nav-link {{active(['admin.product', 'admin.product.add'], 'active', '')}}">--}}
{{--                        <i class="far fa-archive" style="font-size: 18px"></i>--}}
{{--                        <p>--}}
{{--                            Quản lý sản phẩm--}}

{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('admin.order')}}" class="nav-link {{active(['admin.order'], 'active', '')}}">
                        <i class="far fa-shopping-cart"></i>
                        <p>
                            Danh sách đặt hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}"  class="nav-link">
                        <i class="fal fa-sign-out"></i>
                        <p>
                          Đăng xuất
                        </p>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

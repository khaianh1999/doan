<aside class="main-sidebar sidebar-dark-primary">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">
            <span class="text-white-75">KhảiAnh</span><span class="text-white">.vn</span>
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ request()->is('users*') ? 'menu-open' : '' }}">
                    <a href="/users" class="nav-link {{ request()->is('users*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('customers*') ? 'menu-open' : '' }}">
                    <a href="/customers" class="nav-link {{ request()->is('customers*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Khách hàng

                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('orders*') ? 'menu-open' : '' }}">
                    <a href="/orders" class="nav-link {{ request()->is('orders*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-buy-n-large"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li>
                    <p class="text-light">
                        ------------------------------------
                    </p>
                </li>
                <li class="nav-item has-treeview {{ request()->is('phones*') ? 'menu-open' : '' }}">
                    <a href="/phones" class="nav-link {{ request()->is('phones*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-mobile-alt"></i>
                        <p>
                            Điện thoại
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{ request()->is('laptops*') ? 'menu-open' : '' }}">
                    <a href="/laptops" class="nav-link {{ request()->is('laptops*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-laptop"></i>
                        <p>
                            Laptop
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ request()->is('tablets*') ? 'menu-open' : '' }}">
                    <a href="/tablets" class="nav-link {{ request()->is('tablets*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tablet-alt"></i>
                        <p>
                            Máy tính bảng
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ request()->is('headphones*') ? 'menu-open' : '' }}">
                    <a href="/headphones" class="nav-link {{ request()->is('headphones*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-headphones-alt"></i>
                        <p>
                            Tai nghe
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
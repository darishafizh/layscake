<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Layscake</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard.index') }}"
                    class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Master</li>
            <li class="{{ Request::is('product') ? 'active' : '' }}"><a href="{{ route('product.index') }}"
                    class="nav-link"><i class="fas fa-birthday-cake"></i><span>Produk</span></a></li>
            <li class="{{ Request::is('pelanggan') ? 'active' : '' }}"><a href="{{ route('pelanggan.index') }}"
                    class="nav-link"><i class="fas fa-users"></i><span>Pelanggan</span></a></li>

            <li class="menu-header">Daily</li>
            <li class="{{ Request::is('penjualan') ? 'active' : '' }}"><a href="{{ route('penjualan.index') }}"
                    class="nav-link"><i class="fas fa-table"></i><span>Penjualan</span></a></li>
        </ul>
    </aside>
</div>

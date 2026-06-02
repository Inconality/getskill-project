<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <div class="logo-header" data-background-color="dark">
      
      @if(Request::routeIs('user.*'))
        <a href="{{ route('user.beranda') }}" class="logo">
          <span style="color: white; font-weight: bold; font-size: 16px; letter-spacing: 1px;">TOKO PERABOTAN</span>
        </a>
      @else
        <a href="{{ route('user.beranda') }}" class="logo">
          <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20">
        </a>
      @endif
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
        <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
      </div>
      <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
    </div>
  </div>
  
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-section">
          <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
          <h4 class="text-section">Main Menu</h4>
        </li>

        @if(Request::routeIs('user.*'))
          <li class="nav-item {{ Request::routeIs('user.beranda') ? 'active' : '' }}">
            <a href="{{ route('user.beranda') }}">
              <i class="fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>

          <li class="nav-item {{ Request::routeIs('user.produk') ? 'active' : '' }}">
            <a href="{{ route('user.produk') }}">
              <i class="fas fa-box"></i>
              <p>Produk</p>
            </a>
          </li>

        @else
          <li class="nav-item {{ Request::routeIs('produk.*') ? 'active' : '' }}">
            <a href="{{ route('produk.index') }}">
              <i class="fas fa-box"></i>
              <p>Produk</p>
            </a>
          </li>

          <li class="nav-item {{ Request::routeIs('pelanggan.index') ? 'active' : '' }}">
            <a href="{{ route('pelanggan.index') }}">
              <i class="fas fa-users"></i>
              <p>Pelanggan</p>
            </a>
          </li>

          <li class="nav-item {{ Request::routeIs('pesanan.index') ? 'active' : '' }}">
            <a href="{{ route('pesanan.index') }}">
              <i class="fas fa-shopping-cart"></i>
              <p>Pesanan</p>
            </a>
          </li>

          <li class="nav-item {{ Request::routeIs('pembayaran.index') ? 'active' : '' }}">
            <a href="{{ route('pembayaran.index') }}">
              <i class="fas fa-credit-card"></i>
              <p>Pembayaran</p>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</div>
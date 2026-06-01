<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <!-- Logo mengarah ke produk jika admin, dan ke beranda jika user -->
      <a href="{{ Request::routeIs('user.beranda') ? route('user.beranda') : route('produk.index') }}" class="logo">
        <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20">
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Main Menu</h4>
        </li>

        <!-- ========================================== -->
        <!-- MENU BERANDA (Hanya Muncul di Sisi User)   -->
        <!-- ========================================== -->
        @if(Request::routeIs('user.beranda'))
          <li class="nav-item active">
            <a href="{{ route('user.beranda') }}">
              <i class="fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>
        @endif

        <!-- ========================================== -->
        <!-- MENU PRODUK (Muncul di User dan Admin)     -->
        <!-- ========================================== -->
        <li class="nav-item {{ Request::routeIs('produk.*') ? 'active' : '' }}">
          <a href="{{ route('produk.index') }}">
            <i class="fas fa-box"></i>
            <p>Produk</p>
          </a>
        </li>


        <!-- ========================================== -->
        <!-- MENU KHUSUS ADMIN (Sembunyikan dari User)  -->
        <!-- ========================================== -->
        @if(!Request::routeIs('user.beranda'))
          <!-- Menu Pelanggan -->
          <li class="nav-item {{ Request::routeIs('pelanggan.*') ? 'active' : '' }}">
            <a href="#">
              <i class="fas fa-users"></i>
              <p>Pelanggan</p>
            </a>
          </li>

          <!-- Menu Pesanan -->
          <li class="nav-item {{ Request::routeIs('pesanan.*') ? 'active' : '' }}">
            <a href="#">
              <i class="fas fa-shopping-cart"></i>
              <p>Pesanan</p>
            </a>
          </li>

          <!-- Menu Pembayaran -->
          <li class="nav-item {{ Request::routeIs('pembayaran.*') ? 'active' : '' }}">
            <a href="#">
              <i class="fas fa-credit-card"></i>
              <p>Pembayaran</p>
            </a>
          </li>
        @endif

      </ul>
    </div>
  </div>
</div>
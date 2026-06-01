<div class="main-header">
  <div class="main-header-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="#" class="logo">
        {{-- Jika di URL browser mengandung kata 'user', otomatis ganti nama --}}
        @if(request()->is('user*') || request()->is('*user*'))
          <span style="color: white; font-weight: bold; font-size: 16px; letter-spacing: 1px;">USER DASHBOARD</span>
        @else
          <img src="{{ asset('') }}assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
        @endif
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
  <!-- Navbar Header -->
  @include('admin.layouts.navbar')
  <!-- End Navbar -->
</div>
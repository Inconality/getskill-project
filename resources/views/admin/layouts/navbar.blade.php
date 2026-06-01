<nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
    <div class="container-fluid">
        
        {{-- 1. PENCARIAN TAMPILAN LAPTOP (HANYA MUNCUL JIKA BUKAN USER) --}}
        @if(!Request::routeIs('user.*'))
        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                        <i class="fa fa-search search-icon"></i>
                    </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
            </div>
        </nav>
        @endif

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            
            {{-- 2. PENCARIAN TAMPILAN HP (HANYA MUNCUL JIKA BUKAN USER) --}}
            @if(!Request::routeIs('user.*'))
            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                    <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </ul>
            </li>
            @endif

            {{-- 3. MENU IKON DAN PROFIL UTAMA (HANYA MUNCUL JIKA BUKAN USER / UNTUK ADMIN) --}}
            @if(!Request::routeIs('user.*'))
                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                        <li>
                            <div class="dropdown-title d-flex justify-content-between align-items-center">
                                Messages
                                <a href="#" class="small">Mark all as read</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="notification">4</span>
                    </a>
                </li>

                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{asset('')}}assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Hi,</span>
                            <span class="fw-bold">Hizrian</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        <img src="{{asset('')}}assets/img/profile.jpg" alt="image profile" class="avatar-img rounded" />
                                    </div>
                                    <div class="u-text">
                                        <h4>Hizrian</h4>
                                        <p class="text-muted">hello@example.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                                    @csrf
                                    <button type="submit" class="btn text-start w-100 px-3 py-2 text-danger" style="background: none; border: none; font-size: inherit; font-weight: inherit;">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>
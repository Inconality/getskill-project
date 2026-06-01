<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3 navbar-custom">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="index.html">
            <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
            <p>Template</p></span>
        </a>
        <div class="mx-auto d-lg-block d-none">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('kontak') }}" >Kontak</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-4">
            <span class="d-flex align-items-center gap-2 fw-bold">
                <span><i class="bi bi-telephone"></i></span>
                <span>+901234576</span>
            </span>
        </div>
    </div>
</nav>
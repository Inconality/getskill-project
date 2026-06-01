@extends('admin.layouts.app') {{-- Mengikuti master layout admin kamu agar tema, sidebar, & header sama persis --}}

@section('title', 'Katalog Produk - Toko Kelompok 4')

@push('styles')
<style>
    /* Menyembunyikan tombol login admin di navbar kanan atas khusus untuk halaman beranda ini */
    .navbar-nav .nav-item a[href*="login"], 
    .navbar-nav .btn-primary,
    .navbar-nav .nav-link:contains("Login") {
        display: none !important;
    }
</style>
@endpush

@section('content')
<div class="page-inner">
    
    <!-- Judul Khas Tema Admin -->
    <div class="page-header justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <h3 class="fw-bold mb-1">Katalog Produk</h3>
            <ul class="breadcrumbs mb-0" style="padding-left: 0; list-style: none;">
                <li class="nav-home">
                    <a href="{{ route('user.beranda') }}" class="text-primary">
                        <i class="icon-home"></i> Beranda
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Alert / Notifikasi Bawaan Template -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <strong class="me-2"><i class="fas fa-check-circle"></i> Sukses!</strong> {{ session('success') }}
        </div>
    @endif

    <!-- Grid List Produk -->
    <div class="row mt-4">
        @foreach($produk as $item)
        <div class="col-md-4 mb-4">
            <!-- Komponen Kartu Melengkung (.card-post & .card-round) asli KaiAdmin -->
            <div class="card card-post card-round border-0 shadow-sm">
                
                <!-- Gambar Produk -->
                @if($item->gambar)
                    <img class="card-img-top" src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" style="height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                @else
                    <img class="card-img-top" src="https://via.placeholder.com/220" alt="No Image" style="height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                @endif
                
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-success px-2 py-1" style="font-size: 11px;">Tersedia</span>
                        <h4 class="text-primary fw-bold mb-0" style="font-size: 18px;">Rp {{ number_format($item->harga, 0, ',', '.') }}</h4>
                    </div>
                    
                    <h3 class="card-title fw-bold mt-2" style="font-size: 18px;">
                        <span class="text-dark">{{ $item->nama_produk }}</span>
                    </h3>
                    
                    <p class="card-text text-muted mt-2" style="font-size: 13px; line-height: 1.6;">
                        {{ Str::limit($item->deskripsi, 90) }}
                    </p>
                    
                    <hr class="my-3" style="border-top: 1px solid #ebedf2;">
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted" style="font-size: 13px;">Stok: <strong class="text-dark">{{ $item->stok }}</strong></span>
                        <a href="{{ route('user.pesan.form', $item->id_produk) }}" class="btn btn-primary btn-round btn-sm px-4 fw-bold">
                            <i class="fas fa-shopping-basket me-1"></i> Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
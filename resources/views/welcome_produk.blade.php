@extends('admin.layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Katalog Produk</h3>
    </div>

    <div class="row mt-4">
        @forelse($produk as $item)
        <div class="col-md-4 mb-4">
            <div class="card card-post card-round border-0 shadow-sm">
                @if(!empty($item->gambar))
                    <img class="card-img-top" src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" style="height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                @else
                    <img class="card-img-top" src="https://via.placeholder.com/220" alt="No Image" style="height: 220px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                @endif
                
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-success px-2 py-1" style="font-size: 11px;">Tersedia</span>
                        <h4 class="text-primary fw-bold mb-0">Rp {{ number_format($item->harga, 0, ',', '.') }}</h4>
                    </div>
                    <h3 class="card-title fw-bold mt-2" style="font-size: 18px;">{{ $item->nama_produk }}</h3>
                    <p class="card-text text-muted mt-2" style="font-size: 13px;">{{ $item->deskripsi ?? 'Tidak ada deskripsi perabotan.' }}</p>
                    <hr class="my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted" style="font-size: 13px;">Stok: <strong>{{ $item->stok }}</strong></span>
                        <a href="{{ route('user.pesan.form', $item->id_produk) }}" class="btn btn-primary btn-round btn-sm px-4 fw-bold">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-muted">Belum ada produk yang tersedia saat ini.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
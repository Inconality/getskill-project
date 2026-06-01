@extends('admin.layouts.app')

@section('title', 'Beranda - Toko Perabotan')

@section('content')
<div class="page-inner">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card card-round bg-primary-gradient text-white shadow">
                <div class="card-body p-5 text-center">
                    <h1 class="display-4 fw-bold mb-3">Selamat Datang di Toko Perabotan Kelompok 4!</h1>
                    <p class="lead mb-4" style="opacity: 0.9;">Temukan berbagai macam perabotan rumah tangga berkualitas tinggi dengan harga terbaik hanya di toko kami.</p>
                    
                    <a href="{{ route('user.produk') }}" class="btn btn-white btn-border btn-round btn-lg px-5 fw-bold">
                        <i class="fas fa-shopping-bag me-2"></i> Mulai Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
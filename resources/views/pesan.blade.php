{{-- SUDAH DIPERBAIKI: Mengarah ke file template utama Kaiadmin kamu yang benar --}}
@extends('admin.layouts.app')

@section('title', 'Form Pemesanan')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">

                <h3 class="fw-bold text-success mb-4">
                    Form Pemesanan
                </h3>

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                @php
                    $item = \App\Models\Product::first();
                @endphp

                @if($item)
                    <div class="alert alert-info py-2">
                        <strong>Produk:</strong> {{ $item->nama_produk ?? $item->nama }} <br>
                        <strong>Harga Satuan:</strong> Rp <span id="harga">{{ number_format($item->harga, 0, ',', '.') }}</span>
                    </div>

                    <form action="{{ url('/pesan/store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="produk_id" value="{{ $item->id }}">
                        <input type="hidden" name="total_harga" id="total_harga_input" value="{{ $item->harga }}">

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_pembeli" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No. WhatsApp</label>
                            <input type="text" name="no_whatsapp" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Pesanan</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', 1) }}" min="1" required oninput="validasiJumlah(); hitung();">

                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Total Harga</label>
                            <h3 class="text-success fw-bold">
                                Rp <span id="total">{{ number_format($item->harga, 0, ',', '.') }}</span>
                            </h3>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Pengiriman</label>
                            <textarea name="alamat" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-select" readonly>
                                <option value="COD">COD (Bayar di Tempat)</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-2 fw-bold">
                            Konfirmasi Pesanan
                        </button>

                    </form>
                @else
                    <div class="alert alert-warning text-center">
                        Belum ada data produk di database. Silakan isi data produk terlebih dahulu di halaman admin.
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<script>
    function validasiJumlah() {
        let jumlahInput = document.getElementById('jumlah');
        if (jumlahInput.value < 1 || jumlahInput.value === '') {
            jumlahInput.value = 1;
        }
    }

    function hitung() {
        let hargaElement = "{{ $item ? $item->harga : 0 }}";
        let harga = parseInt(hargaElement);
        let jumlahInput = document.getElementById('jumlah');
        
        if(!jumlahInput) return;
        
        let jumlah = parseInt(jumlahInput.value);

        if (isNaN(jumlah) || jumlah < 1) {
            jumlah = 1;
        }

        let total = harga * jumlah;

        let totalElement = document.getElementById('total');
        let inputHiddenElement = document.getElementById('total_harga_input');
        
        if(totalElement) totalElement.innerText = new Intl.NumberFormat('id-ID').format(total);
        if(inputHiddenElement) inputHiddenElement.value = total;
    }

    document.addEventListener('DOMContentLoaded', function() {
        hitung();
    });
</script>
@endsection
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan - Tema KaiAdmin</title>

    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Public Sans:300,400,500,600,700"]},
            custom: {"families":["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], cols: ["{{ asset('assets/css/fonts.min.css') }}"]},
            active: function() { sessionStorage.fonts = true; }
        });
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-round shadow border-0">
                    <div class="card-header bg-dark py-3">
                        <h4 class="card-title text-white mb-0 fw-bold"><i class="fas fa-shopping-cart me-2"></i>Detail Formulir Pesanan</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="p-3 bg-light rounded mb-4">
                            <h5 class="mb-1 text-muted" style="font-size: 14px;">Produk Pilihan:</h5>
                            <h4 class="fw-bold text-dark">{{ $produk->nama_produk }}</h4>
                            <h3 class="text-success fw-bold mb-0">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h3>
                        </div>

                        <form action="{{ route('user.pesan.proses', $produk->id_produk) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3 px-0">
                                <label for="jumlah_pesanan" class="form-label fw-bold">Jumlah Beli</label>
                                <input type="number" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control" min="1" max="{{ $produk->stok }}" placeholder="Masukkan jumlah..." required>
                                <small class="text-muted">Maksimal pembelian sesuai sisa stok ({{ $produk->stok }} pcs)</small>
                            </div>

                            <div class="form-group mb-4 px-0">
                                <label for="catatan" class="form-label fw-bold">Catatan (Opsional)</label>
                                <textarea name="catatan" id="catatan" class="form-control" rows="3" placeholder="Contoh: Tolong bungkus yang rapi..."></textarea>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('user.beranda') }}" class="btn btn-border btn-round btn-black btn-sm px-4">Kembali</a>
                                <button type="submit" class="btn btn-success btn-round btn-sm px-4">Konfirmasi & Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
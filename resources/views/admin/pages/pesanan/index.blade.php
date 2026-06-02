@extends('admin.layouts.app')

@section('title', 'Data Pesanan')

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Data Pesanan</h3>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Pesanan</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Pesanan</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada data pesanan
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
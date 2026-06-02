@extends('admin.layouts.app')

@section('title', 'Data Pembayaran')

@section('content')
<h2>Data Pembayaran</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pesanan</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="text-center">
                Belum ada data pembayaran
            </td>
        </tr>
    </tbody>
</table>
@endsection
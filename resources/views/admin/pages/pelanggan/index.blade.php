@extends('admin.layouts.app')

@section('title', 'Data Pelanggan')

@section('content')
<div class="page-header">
    <h3 class="fw-bold mb-3">Manajemen Pelanggan</h3>
    <ul class="breadcrumbs mb-3">
        <li class="nav-home">
            <a href="/admin/dashboard"><i class="fas fa-home"></i></a>
        </li>
        <li class="separator"><i class="fas fa-chevron-right"></i></li>
        <li class="nav-item"><a href="#">Pelanggan</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-title">Daftar Pelanggan Terdaftar</div>
                <button class="btn btn-primary btn-round">
                    <i class="fa fa-plus"></i> Tambah Pelanggan
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID Pelanggan</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Tanggal Daftar</th>
                                <th style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="badge badge-secondary">PLG-001</span></td>
                                <td>Ahmad Fauzi</td>
                                <td>ahmad.fauzi@email.com</td>
                                <td>081234567890</td>
                                <td>Jl. Merdeka No. 45, Jakarta</td>
                                <td>28 Mar 2026</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-bs-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="tooltip" title="Hapus" class="btn btn-link btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-secondary">PLG-002</span></td>
                                <td>Siti Rahmawati</td>
                                <td>siti.rahma@email.com</td>
                                <td>085678901234</td>
                                <td>Jl. Diponegoro No. 12, Bandung</td>
                                <td>15 Apr 2026</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-bs-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="tooltip" title="Hapus" class="btn btn-link btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-secondary">PLG-003</span></td>
                                <td>Budi Doremi</td>
                                <td>budi.doremi@email.com</td>
                                <td>087890123456</td>
                                <td>Jl. Malioboro No. 8, Yogyakarta</td>
                                <td>02 Mei 2026</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-bs-toggle="tooltip" title="Edit" class="btn btn-link btn-primary btn-lg">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-bs-toggle="tooltip" title="Hapus" class="btn btn-link btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- Mengaktifkan fitur pencarian dan pagination otomatis milik Datatables bawaan Kaiadmin --}}
@push('scripts')
<script>
    $(document).ready(function () {
        $('#basic-datatables').DataTable({
            "pageLength": 5,
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)"
            }
        });
    });
</script>
@endpush
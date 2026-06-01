@extends('admin.layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm">
    <h2 class="text-lg font-semibold text-gray-700 mb-2">
        Selamat Datang, {{ Auth::user()->name }}!
    </h2>
    <p class="text-gray-600">Kamu berhasil masuk ke sistem admin.</p>
</div>
@endsection
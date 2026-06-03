@extends('layouts.app')

@section('title', 'Profil Anggota')

@section('content')
<div class="container" style="max-width: 600px;">
    <div class="mb-4">
        <a href="/anggota" class="text-decoration-none small fw-bold">← Kembali ke Daftar Anggota</a>
    </div>

    <div class="card p-4 text-center">
        <div class="card-body">
            <div class="mb-3">
                <span class="fs-1">👤</span>
            </div>
            <h3 class="fw-bold text-dark mb-1">{{ $anggota['nama'] }}</h3>
            <p class="text-primary fw-medium mb-4">Kode Anggota: {{ $anggota['kode'] }}</p>
            
            <hr class="text-muted my-3">
            
            <div class="row text-start my-4">
                <div class="col-6 mb-3">
                    <span class="text-muted d-block small">Email</span>
                    <strong class="text-dark small">{{ $anggota['email'] }}</strong>
                </div>
                <div class="col-6 mb-3">
                    <span class="text-muted d-block small">No. Telepon</span>
                    <strong class="text-dark small">{{ $anggota['telepon'] }}</strong>
                </div>
                <div class="col-6 mb-3">
                    <span class="text-muted d-block small">Kota Alamat</span>
                    <strong class="text-dark fs-5">{{ $anggota['alamat'] }}</strong>
                </div>
                <div class="col-6 mb-3">
                    <span class="text-muted d-block small">Status Keanggotaan</span>
                    <div class="mt-1">
                        @if($anggota['status'] == 'Aktif')
                            <span class="badge bg-success px-3 py-1">Aktif</span>
                        @else
                            <span class="badge bg-danger px-3 py-1">Non-Aktif</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
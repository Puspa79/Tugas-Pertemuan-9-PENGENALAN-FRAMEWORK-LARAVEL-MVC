@extends('layouts.app')

@section('title', 'Detail Koleksi Buku')

@section('content')
<div class="container" style="max-width: 700px;">
    <div class="mb-4">
        <a href="/perpustakaan" class="text-decoration-none small fw-bold">← Kembali ke Daftar Buku</a>
    </div>

    <div class="card p-4">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <span class="fs-1 me-3">📚</span>
                <div>
                    <span class="badge bg-primary px-2 py-1 mb-1">Koleksi Buku</span>
                    <h2 class="fw-bold text-dark mb-0">{{ $buku->judul }}</h2>
                </div>
            </div>

            <hr class="text-muted my-4">

            <div class="row g-4 text-start">
                <div class="col-md-6">
                    <span class="text-muted d-block small">Nama Pengarang / Penulis</span>
                    <strong class="text-dark fs-5">{{ $buku->pengarang ?? 'Tidak Diketahui' }}</strong>
                </div>
                <div class="col-md-6">
                    <span class="text-muted d-block small">Tahun Terbit</span>
                    <strong class="text-dark fs-5">{{ $buku->tahun_terbit ?? '-' }}</strong>
                </div>
                <div class="col-md-6">
                    <span class="text-muted d-block small">Harga Buku</span>
                    <strong class="text-success fs-5">Rp {{ number_format($buku->harga ?? 0, 0, ',', '.') }}</strong>
                </div>
                <div class="col-md-6">
                    <span class="text-muted d-block small">Sisa Ketersediaan Stok</span>
                    <div class="mt-1">
                        @if(($buku->stok ?? 0) > 5)
                            <span class="badge bg-success px-3 py-2 fs-6">Aman ({{ $buku->stok }} Unit)</span>
                        @elif(($buku->stok ?? 0) > 0)
                            <span class="badge bg-warning text-dark px-3 py-2 fs-6">Menipis ({{ $buku->stok }} Unit)</span>
                        @else
                            <span class="badge bg-danger px-3 py-2 fs-6">Habis Terjual</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
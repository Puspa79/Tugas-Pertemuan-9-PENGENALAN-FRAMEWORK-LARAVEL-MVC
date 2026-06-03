@extends('layouts.app')

@section('title', 'Sistem Perpustakaan Laravel')

@section('content')
<div class="container">
    <h1 class="fw-bold text-dark mb-1">Sistem Perpustakaan Laravel</h1>
    <p class="text-muted mb-4">Selamat datang di sistem perpustakaan berbasis Laravel.</p>

    <div class="alert alert-info border-0 rounded-3 py-3 mb-4" style="background-color: #e2f0fe; color: #024dbc;" role="alert">
        <i class="fs-5 me-2">ℹ️</i> <strong>Info:</strong> Total buku yang tersedia: 
        <span class="badge bg-primary px-2 py-1 ms-1">
            {{ isset($buku) && (is_array($buku) || $buku instanceof \Countable) ? count($buku) : 0 }}
        </span>
    </div>

    <h3 class="fw-bold text-dark mb-3">Daftar Buku</h3>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-dark">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="ps-4" style="width: 80px;">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col" style="width: 150px;">Harga</th>
                        <th scope="col" style="width: 120px;">Stok</th>
                        <th scope="col" class="text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($buku) && count($buku) > 0)
                        @if(isset($buku) && count($buku) > 0)
                        @foreach($buku as $index => $bk)
                        <tr>
                            <td class="ps-4 fw-medium text-secondary">{{ $index + 1 }}</td>
                            <td class="fw-bold text-dark">{{ $bk['judul'] }}</td>
                            <td class="text-secondary">{{ $bk['pengarang'] ?? 'Tidak Diketahui' }}</td>
                            <td class="fw-semibold">Rp {{ number_format($bk['harga'] ?? 0, 0, ',', '.') }}</td>
                            <td>
                                @if(($bk['stok'] ?? 0) > 5)
                                    <span class="badge bg-success px-2 py-1">{{ $bk['stok'] }}</span>
                                @elseif(($bk['stok'] ?? 0) > 0)
                                    <span class="badge bg-warning text-dark px-2 py-1">{{ $bk['stok'] }}</span>
                                @else
                                    <span class="badge bg-danger px-2 py-1">Habis</span>
                                @endif
                            </td>
                            <td class="pe-4 text-end">
                                <a href="/buku/{{ $bk['id'] }}" class="btn btn-outline-primary btn-sm px-3">Lihat Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            <em>Belum ada koleksi data buku yang terdaftar.</em>
                        </td>
                    </tr>
                    @endif
                    @else
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            <em>Belum ada koleksi data buku yang terdaftar.</em>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
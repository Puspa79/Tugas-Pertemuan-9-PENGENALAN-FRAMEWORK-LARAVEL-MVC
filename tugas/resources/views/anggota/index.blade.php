@extends('layouts.app')

@section('title', 'Daftar Anggota Perpustakaan')

@section('content')
<div class="container">
    <h2 class="fw-bold text-dark mb-1">Daftar Anggota</h2>
    <p class="text-muted mb-4">Manajemen dan biodata seluruh anggota aktif perpustakaan.</p>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-dark">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="ps-4">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="pe-4 text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anggota_list as $index => $agt)
                    <tr>
                        <td class="ps-4 fw-medium text-secondary">{{ $index + 1 }}</td>
                        <td><span class="badge bg-light text-dark border">{{ $agt['kode'] }}</span></td>
                        <td class="fw-bold text-dark">{{ $agt['nama'] }}</td>
                        <td class="text-secondary small">{{ $agt['email'] }}</td>
                        <td>{{ $agt['alamat'] }}</td>
                        <td>
                            @if($agt['status'] == 'Aktif')
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-danger">Nonaktif</span>
                            @endif
                        </td>
                        <td class="pe-4 text-end">
                            <a href="/anggota/{{ $agt['id'] }}" class="btn btn-primary btn-sm px-3">Profil</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
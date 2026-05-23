<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
 
Route::get('/', function () {
    return view('welcome');
});
 
// Route menggunakan Controller
Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/buku/{id}', [PerpustakaanController::class, 'show']);
Route::get('/about', [PerpustakaanController::class, 'about']);

// ==========================================
// TUGAS 1: ROUTING DAN VIEW ANGGOTA
// ==========================================
Route::get('/anggota', function () {
    $anggota_list = [
        ['id' => 1, 'kode' => 'AGT-001', 'nama' => 'Budi Santoso', 'email' => 'budi@email.com', 'telepon' => '081234567890', 'alamat' => 'Jakarta', 'status' => 'Aktif'],
        ['id' => 2, 'kode' => 'AGT-002', 'nama' => 'Siti Rahma', 'email' => 'siti@email.com', 'telepon' => '081234567891', 'alamat' => 'Pekalongan', 'status' => 'Aktif'],
        ['id' => 3, 'kode' => 'AGT-003', 'nama' => 'Andi Wijaya', 'email' => 'andi@email.com', 'telepon' => '081234567892', 'alamat' => 'Semarang', 'status' => 'Non-Aktif'],
        ['id' => 4, 'kode' => 'AGT-004', 'nama' => 'Dewi Lestari', 'email' => 'dewi@email.com', 'telepon' => '081234567893', 'alamat' => 'Batang', 'status' => 'Aktif'],
        ['id' => 5, 'kode' => 'AGT-005', 'nama' => 'Eko Prasetyo', 'email' => 'eko@email.com', 'telepon' => '081234567894', 'alamat' => 'Pemalang', 'status' => 'Non-Aktif'],
    ];
    return view('anggota.index', compact('anggota_list'));
})->name('anggota.index');

Route::get('/anggota/{id}', function ($id) {
    $anggota_list = [
        1 => ['id' => 1, 'kode' => 'AGT-001', 'nama' => 'Budi Santoso', 'email' => 'budi@email.com', 'telepon' => '081234567890', 'alamat' => 'Jakarta', 'status' => 'Aktif'],
        2 => ['id' => 2, 'kode' => 'AGT-002', 'nama' => 'Siti Rahma', 'email' => 'siti@email.com', 'telepon' => '081234567891', 'alamat' => 'Pekalongan', 'status' => 'Aktif'],
        3 => ['id' => 3, 'kode' => 'AGT-003', 'nama' => 'Andi Wijaya', 'email' => 'andi@email.com', 'telepon' => '081234567892', 'alamat' => 'Semarang', 'status' => 'Non-Aktif'],
        4 => ['id' => 4, 'kode' => 'AGT-004', 'nama' => 'Dewi Lestari', 'email' => 'dewi@email.com', 'telepon' => '081234567893', 'alamat' => 'Batang', 'status' => 'Aktif'],
        5 => ['id' => 5, 'kode' => 'AGT-005', 'nama' => 'Eko Prasetyo', 'email' => 'eko@email.com', 'telepon' => '081234567894', 'alamat' => 'Pemalang', 'status' => 'Non-Aktif'],
    ];

    if (!isset($anggota_list[$id])) { abort(404, 'Anggota tidak ditemukan'); }
    $anggota = $anggota_list[$id];
    return view('anggota.show', compact('anggota'));
})->name('anggota.show');

// ==========================================
// TUGAS 2: CONTROLLER UNTUK KATEGORI BUKU
// ==========================================
use App\Http\Controllers\KategoriController;

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');
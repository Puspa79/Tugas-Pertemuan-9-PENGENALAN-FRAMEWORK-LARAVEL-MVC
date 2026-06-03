<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        // Menyediakan data array buku secara manual agar halaman index tidak kosong/error
        $buku = [
            ['id' => 1, 'judul' => 'Pemrograman PHP', 'pengarang' => 'Budi Raharjo', 'harga' => 75000, 'stok' => 10],
            ['id' => 2, 'judul' => 'Laravel Framework', 'pengarang' => 'Andi Nugroho', 'harga' => 125000, 'stok' => 5],
            ['id' => 3, 'judul' => 'MySQL Database', 'pengarang' => 'Siti Aminah', 'harga' => 95000, 'stok' => 0],
            ['id' => 4, 'judul' => 'Web Design', 'pengarang' => 'Dedi Santoso', 'harga' => 85000, 'stok' => 8],
            ['id' => 5, 'judul' => 'JavaScript Modern', 'pengarang' => 'Rina Wijaya', 'harga' => 80000, 'stok' => 12],
        ];

        // Melempar variabel $buku ke view perpustakaan.index
        return view('perpustakaan.index', compact('buku'));
    }

    public function show($id)
    {
        $buku_list = [
            1 => ['id' => 1, 'judul' => 'Pemrograman PHP', 'pengarang' => 'Budi Raharjo', 'harga' => 75000, 'stok' => 10, 'tahun_terbit' => 2021],
            2 => ['id' => 2, 'judul' => 'Laravel Framework', 'pengarang' => 'Andi Nugroho', 'harga' => 125000, 'stok' => 5, 'tahun_terbit' => 2023],
            3 => ['id' => 3, 'judul' => 'MySQL Database', 'pengarang' => 'Siti Aminah', 'harga' => 95000, 'stok' => 0, 'tahun_terbit' => 2020],
            4 => ['id' => 4, 'judul' => 'Web Design', 'pengarang' => 'Dedi Santoso', 'harga' => 85000, 'stok' => 8, 'tahun_terbit' => 2022],
            5 => ['id' => 5, 'judul' => 'JavaScript Modern', 'pengarang' => 'Rina Wijaya', 'harga' => 80000, 'stok' => 12, 'tahun_terbit' => 2024],
        ];

        if (!isset($buku_list[$id])) {
            abort(404, 'Buku tidak ditemukan');
        }

        $buku = (object) $buku_list[$id];
        return view('perpustakaan.show', compact('buku'));
    }
}
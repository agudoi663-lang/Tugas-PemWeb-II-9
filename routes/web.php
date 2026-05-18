<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

// Route menggunakan Controller
Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/buku/{id}', [PerpustakaanController::class, 'show']);
Route::get('/about', [PerpustakaanController::class, 'about']);

// Route Anggota
Route::get('/anggota', function () {
    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Rahayu',
            'email' => 'siti@email.com',
            'telepon' => '082345678901',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Ahmad Fauzi',
            'email' => 'ahmad@email.com',
            'telepon' => '083456789012',
            'alamat' => 'Surabaya',
            'status' => 'Tidak Aktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '084567890123',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rizky Pratama',
            'email' => 'rizky@email.com',
            'telepon' => '085678901234',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ],
    ];

    return view('anggota.index', compact('anggota_list'));
});

Route::get('/anggota/{id}', function ($id) {
    $anggota_list = [
        1 => [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        2 => [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Rahayu',
            'email' => 'siti@email.com',
            'telepon' => '082345678901',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        3 => [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Ahmad Fauzi',
            'email' => 'ahmad@email.com',
            'telepon' => '083456789012',
            'alamat' => 'Surabaya',
            'status' => 'Tidak Aktif'
        ],
        4 => [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '084567890123',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],
        5 => [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rizky Pratama',
            'email' => 'rizky@email.com',
            'telepon' => '085678901234',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ],
    ];

    if (!isset($anggota_list[$id])) {
        abort(404, 'Anggota tidak ditemukan');
    }

    $anggota = $anggota_list[$id];

    return view('anggota.show', compact('anggota'));
});

// Route Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search']);
Route::get('/kategori/{id}', [KategoriController::class, 'show']);
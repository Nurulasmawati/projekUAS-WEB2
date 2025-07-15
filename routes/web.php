<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KHSController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MataKuliahController;

// Login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Semua route setelah login (dilindungi middleware auth)
    Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard'); // tampilkan dashboard setelah login
    })->name('dashboard');
    Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
    Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
    Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
    Route::get('/nilai/khs/{id}', [NilaiController::class, 'khs'])->name('nilai.khs');
    Route::get('/nilai/khs/{id}/cetak', [NilaiController::class, 'cetak'])->name('khs.cetak');    
    Route::resource('dosen', DosenController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('matakuliah', MataKuliahController::class);
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
});
?>

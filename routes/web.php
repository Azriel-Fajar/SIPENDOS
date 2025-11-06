<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/buat-jadwal', [DashboardController::class, 'buatJadwal'])->name('buatJadwal');
Route::get('/lihat-jadwal', [DashboardController::class, 'lihatJadwal'])->name('lihatJadwal');
Route::get('/lihat-ruang', [DashboardController::class, 'lihatRuang'])->name('lihatRuang');
Route::get('/print-jadwal', [DashboardController::class, 'printJadwal'])->name('printJadwal');

Route::get('/master/dosen', [MasterDataController::class, 'dosen'])->name('dosen');
Route::get('/master/matakuliah', [MasterDataController::class, 'matakuliah'])->name('matakuliah');
Route::get('/master/ruang', [MasterDataController::class, 'ruang'])->name('ruang');
Route::get('/master/fakultas', [MasterDataController::class, 'fakultas'])->name('fakultas');
Route::get('/master/prodi', [MasterDataController::class, 'prodi'])->name('prodi');
Route::get('/master/tahun-akademik', [MasterDataController::class, 'tahunAkademik'])->name('tahunAkademik');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

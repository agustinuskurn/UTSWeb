<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [homeController::class,'index']);
Route::get('/User', [UserController::class, 'index'])->name('User.index');
Route::get('/KategoriBarang', [KategoriBarangController::class, 'index'])->name('KategoriBarang.index');
Route::get('/Barang', [BarangController::class, 'index'])->name('Barang.index');
Route::get('/Laporan', [LaporanController::class, 'index'])->name('Laporan.index');

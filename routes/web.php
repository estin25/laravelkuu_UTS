<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('buku', BukuController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('penerbit', PenerbitController::class);
Route::view('/about','about')->name('about');

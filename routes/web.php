<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login.action');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/daftar', [AuthController::class, 'register'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/users', [KelolaUserController::class, 'index'])->name('admin.kelolauser');
Route::view('/admin/kategori', 'adminkategori')->name('admin.kategori');
Route::view('/admin/produk', 'adminproduk')->name('admin.produk');
Route::view('/admin/mitra', 'adminmitra')->name('admin.mitra');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::view('/produk/tambah', 'produkadd')->name('produk.tambah');
Route::view('/menu', 'menu')->name('menu');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

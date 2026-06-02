<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/beranda', function () {
    return redirect()->route('login');
})->name('beranda');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login.action');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/daftar', [AuthController::class, 'register'])->name('daftar');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/users', [KelolaUserController::class, 'index'])->name('admin.kelolauser');
    Route::get('/admin/kategori', [KategoriController::class, 'admin'])->name('admin.kategori');
    Route::post('/admin/kategori', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::put('/admin/kategori/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');
    Route::view('/admin/produk', 'adminproduk')->name('admin.produk');
    Route::view('/admin/mitra', 'adminmitra')->name('admin.mitra');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::view('/produk/tambah', 'produkadd')->name('produk.tambah');
Route::view('/menu', 'menu')->name('menu');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TehDBController;
use App\Http\Controllers\nilaikuliahDBController;
use App\Http\Controllers\keranjangbelanjaDBController;
use App\Http\Controllers\SiswaDBController;
use App\Http\Controllers\penggajianDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1> Halo, Selamat datang</h1> di Tutorial Laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('week4', function () {
	return view('assignment4');
});

Route::get('week3', function () {
	return view('newsweek3');
});

Route::get('news1', function () {
	return view('news');
});

Route::get('resp', function () {
	return view('responsive');
});

Route::get('temp', function () {
	return view('template');
});

Route::get('mycss', function () {
	return view('mycss1');
});

Route::get('intro1', function () {
	return view('intro');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('idx', function () {
	return view('index');
});

Route::get('lnktree', function () {
	return view('linktree');
});

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'coba']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

// route CRUD Teh
Route::get('/teh', [TehDBController::class, 'teh']);
Route::get('/teh/tambah', [TehDBController::class, 'tambah']);
Route::post('/teh/store', [TehDBController::class, 'store']);
Route::get('/teh/edit/{id}', [TehDBController::class, 'edit']);
Route::post('/teh/update', [TehDBController::class, 'update']);
Route::get('/teh/hapus/{id}', [TehDBController::class, 'hapus']);
Route::get('/teh/cari', [TehDBController::class, 'cari']);

//route CRUD Siswa
Route::get('/siswa', [SiswaDBController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaDBController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaDBController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaDBController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaDBController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaDBController::class, 'destroy'])->name('siswa.destroy');

//e5
Route::get('e5', [nilaikuliahDBController::class, 'index']);
Route::get('e5/tambah', [nilaikuliahDBController::class, 'tambah']);
Route::post('e5/store', [nilaikuliahDBController::class, 'store']);
Route::get('e5/edit/{id}', [nilaikuliahDBController::class, 'edit']);
Route::post('e5/update', [nilaikuliahDBController::class, 'update']);
Route::get('e5/hapus/{id}', [nilaikuliahDBController::class, 'hapus']);
Route::get('/e5/cari', [nilaikuliahDBController::class, 'cari']);

//d4
Route::get('d4', [keranjangbelanjaDBController::class, 'index']);
Route::get('d4/tambah', [keranjangbelanjaDBController::class, 'beli']);
Route::post('d4/store', [keranjangbelanjaDBController::class, 'store']);
Route::get('d4/hapus/{id}', [keranjangbelanjaDBController::class, 'hapus']);

//penggajian
Route::get('penggajian', [penggajianDBController::class, 'index']);
Route::get('penggajian/tambah', [penggajianDBController::class, 'tambah']);
Route::post('penggajian/store', [penggajianDBController::class, 'store']);
Route::post('penggajian/update', [penggajianDBController::class, 'update']);

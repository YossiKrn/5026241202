<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('menu');
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

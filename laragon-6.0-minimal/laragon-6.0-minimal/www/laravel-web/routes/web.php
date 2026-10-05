<?php

Route::get('/', function () {
    return view ('welcome');
});


Route::get('/pcr', function () {
    return ('Selamat Datang di Website Kampus PCR!');
});


Route::get('/mahasiswa', function () {
    return ('Halo Mahasiwa!');
});

Route::get('/nama/{yuliana}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{nim?}', function ($param1 = '2557301135') {
    return 'NIM saya: '.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

// Route khusus untuk menangani endpoint /matakuliah/show/{kode?}
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

// Route resource untuk method standar lainnya (index, create, store, edit, update, destroy)
Route::resource('matakuliah', MatakuliahController::class)->except(['show']);

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
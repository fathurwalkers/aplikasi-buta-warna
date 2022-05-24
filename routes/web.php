<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [BackController::class, 'login'])->name('login');
Route::get('/register', [BackController::class, 'register'])->name('register');
Route::post('/login/post', [BackController::class, 'postlogin'])->name('postlogin');
Route::post('/register/post', [BackController::class, 'postregister'])->name('postregister');
Route::get('/logout', [BackController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/dashboard', 'middleware' => 'ceklogin'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/informasi', [ClientController::class, 'informasi'])->name('informasi');
    Route::get('/tentang-aplikasi', [ClientController::class, 'tentang_aplikasi'])->name('tentang-aplikasi');
    Route::get('/test-buta-warna', [ClientController::class, 'test_buta_warna'])->name('test-buta-warna');
    Route::post('/proses-hasil', [ClientController::class, 'proses_hasil'])->name('proses-hasil');
    Route::get('/get-proses-hasil/{hasil}/{benar}/{salah}', [ClientController::class, 'get_proses_hasil'])->name('get-proses-hasil');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});

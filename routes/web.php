<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [BackController::class, 'login'])->name('login');
Route::get('/register', [BackController::class, 'register'])->name('register');
Route::post('/login/post', [BackController::class, 'postlogin'])->name('postlogin');
Route::post('/register/post', [BackController::class, 'postregister'])->name('postregister');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/test-buta-warna', [ClientController::class, 'test_buta_warna'])->name('test-buta-warna');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});

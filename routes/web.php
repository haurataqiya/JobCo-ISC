<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});



// logincontroller
route::get('form-login', [LoginController::class, 'register'])->name('form-daftar');
Route::get('form-masuk', [LoginController::class, 'index'])->name('form-masuk');
route::post('masuk', [LoginController::class, 'autentikasi'])->name('form-autentikasi');

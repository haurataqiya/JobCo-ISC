<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});
Route::get('/sign-up', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view('user/dashboardUser');
});
Route::get('/profile', function () {
    return view('user/profile');
});
Route::get('/class', function () {
    return view('user/kelas_saya');
});



// logincontroller  
Route::get('form-masuk', [LoginController::class, 'index'])->name('form-masuk');
route::post('masuk', [LoginController::class, 'autentikasi'])->name('form-autentikasi');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/sign-in', function () {
    return view('signin');
});
Route::get('/sign-up', function () {
    return view('signup');
});

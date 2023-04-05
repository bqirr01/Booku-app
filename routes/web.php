<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/register');
});

Route::get('/books', function () {
    return view('user.home');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/detail', function () {
    return view('user.detail-book');
});
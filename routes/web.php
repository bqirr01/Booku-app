<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/register');
});

Route::get('/books', function () {
    return view('user.home');
});

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::get('/login', function () {
    return view('user.auth.login');
});

Route::get('/detail', function () {
    return view('user.detail-book');
});

Route::get('/admin', function () {
    return redirect('/admin/login');
});

Route::get('admin/login', function () {
    return view('admin.auth.login');
});

Route::get('admin/perpustakaan', function () {
    return view('admin.perpustakaan');
});

Route::get('admin/setting', function () {
    return view('admin.admin-setting');
});

Route::get('admin/perpustakaan/tambah', function () {
    return view('admin.add-edit-book');
});

Route::get('admin/perpustakaan/edixt', function () {
    return view('admin.add-edit-book');
});
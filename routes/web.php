<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return view('user.home');
});

// Route::get('/register', function () {
//     return view('user.auth.register');
// });

// Route::get('/login', function () {
//     return view('user.auth.login');
// });

Route::get('/detail', function () {
    return view('user.detail-book');
});

Route::get('/admin', function () {
    return redirect('/admin/login');
});

// Route::get('admin/login', function () {
//     return view('admin.auth.login');
// });

// Route::get('admin/perpustakaan', function () {
//     return view('admin.perpustakaan');
// });

Route::get('admin/setting', function () {
    return view('admin.admin-setting');
});

Route::namespace("App\Http\Controllers")->group(function () {

    //user auth
    Route::get('/login', 'UserController@login')->name('login')->middleware('guest:user');
    Route::post('/login', 'UserController@customLogin')->name('login.post');

    Route::get('/register', 'UserController@registration')->name('register');
    Route::post('/register', 'UserController@customRegistration')->name('register.post');

    Route::get('/home', 'UserController@home')->name('home')->middleware('auth:user');

    Route::get('/signout', 'UserController@signOut')->name('signout');

    //user search book
    Route::get('/home/search', 'UserController@search')->name('search');

    //admin auth
    Route::get('/admin/login', 'AdminController@login')->name('adminLogin')->middleware('guest:admin');
    Route::post('/admin/login', 'AdminController@customLogin')->name('adminLogin.post');
 
    Route::get('/admin/perpustakaan', 'AdminController@perpustakaan')->name('perpustakaan')->middleware('auth:admin');

    Route::get('/admin/signout', 'AdminController@signOut')->name('adminSignout');

    Route::post('/admin/setting', 'AdminController@modifAdmin')->name('modifAdmin');


    //Create book
    Route::match(['get', 'post'],'admin/perpustakaan/add',[ BookController::class, "add" ])->name('add_book');

    //Read book
    Route::get('/detail/{id}', 'UserController@read')->name('showBook');

    //Update book
    Route::get('/admin/perpustakaan/edit/{id}', 'BookController@edit')->name('editBook');
    Route::put('/admin/perpustakaan/edit/{id}', 'BookController@update')->name('updateBook');

    //Delete book
    Route::delete('/admin/perpustakaan/delete/{id}', 'AdminController@destroy')->name('deleteBook');


    


});

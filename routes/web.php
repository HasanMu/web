<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Authentication', function () {
    return view('auth.autentikasi');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/admin-dashboard', function () {
    return view('layouts.admin');
});

Route::get('/admin-profil', function () {
    return view('partial-admin.user-profil');
});

Route::get('/admin-icons', function () {
    return view('partial-admin.icons');
});

Route::get('/admin-maps', function () {
    return view('partial-admin.maps');
});

Route::get('/admin-login', function () {
    return view('partial-access.login-admin');
});

Route::get('/profil', function () {
    return view('partial-users.profil-users');
});

Route::get('/galeri', function () {
    return view('partial-users.galeri-users');
});

Route::get('/walikelas', function () {
    return view('partial-users.wali-kelas');
});

Route::get('/jadwal', function () {
    return view('partial-users.jadwal');
});

Route::get('/home', function () {
    return view('home');
});
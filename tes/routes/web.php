<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/lupa', function () {
    return view('lupass');
});

Route::get('/daftar', function () {
    return view('register');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/more', function () {
    return view('more');
});
Route::get('/more2', function () {
    return view('more2');
});  
Route::get('/more3', function () {
    return view('more3');
});  
Route::get('/more4', function () {
    return view('more4');
});  
Route::get('/more5', function () {
    return view('more5');
});
Route::get('/more6', function () {
    return view('more6');
});
Route::get('/more7', function () {
    return view('more7');
});
Route::get('/more8', function () {
    return view('more8');
});
Route::get('/index', function () {
    return view('index');
});  
Route::get('/perusahaan', function () {
    return view('perusahaan');
});  
Route::get('/peruad', function () {
    return view('peruad');
}); 
Route::get('/peladm', function () {
    return view('peladm');
}); 
Route::get('/form', function () {
    return view('form');
});  
Route::get('/admin', function () {
    return view('admin');
});  
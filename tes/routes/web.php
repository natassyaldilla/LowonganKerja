<?php

use App\Http\Controllers\LokerController;
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


Route::get('/login', [LokerController::class,'login']);

Route::get('/welcome', [LokerController::class,'welcome']);

Route::get('/daftar', [LokerController::class,'daftar']);

Route::get('/search', [LokerController::class,'search']);

Route::get('/more', [LokerController::class,'more']);

Route::get('/more2', [LokerController::class,'more2']);

Route::get('/more3', [LokerController::class,'more3']);

Route::get('/more4', [LokerController::class,'more4']);

Route::get('/more5', [LokerController::class,'more5']);

Route::get('/more6', [LokerController::class,'more6']);

Route::get('/more7', [LokerController::class,'more7']);

Route::get('/more8', [LokerController::class,'more8']);

Route::get('/index', [LokerController::class,'index']);

Route::get('/perusahaan', [LokerController::class,'perusahaan']);

Route::get('/peruad', [LokerController::class,'peruad']);

Route::get('/peladm', [LokerController::class,'peladm']);

Route::get('/form', [LokerController::class,'form']);

Route::get('/admin', [LokerController::class,'admin']);

Route::get('/kiantaka', [LokerController::class,'kiantaka']);

Route::get('/yanno', [LokerController::class,'yanno']);

Route::get('/sekarguna', [LokerController::class,'sekarguna']);

Route::get('/lock', [LokerController::class,'lock']);

Route::get('/circlek', [LokerController::class,'circlek']);

Route::get('/ananta', [LokerController::class,'ananta']);

Route::get('/sr12', [LokerController::class,'sr12']);
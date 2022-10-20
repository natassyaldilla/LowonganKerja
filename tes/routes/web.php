<?php

use App\Http\Controllers\LokerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AfterSubController;
use App\Http\Controllers\AfterSubPelController;
use App\Http\Controllers\AnantaController;
use App\Http\Controllers\AnantController;
use App\Http\Controllers\CirclekController;
use App\Http\Controllers\CircleController;
use App\Http\Controllers\DaftarAdController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexPelController;
use App\Http\Controllers\KiantakaController;
use App\Http\Controllers\KiantakaMoreController;
use App\Http\Controllers\LockController;
use App\Http\Controllers\LockMoreController;
use App\Http\Controllers\LoginAdController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeladmController;
use App\Http\Controllers\PeruadController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PilihanController;
use App\Http\Controllers\SekargunaController;
use App\Http\Controllers\SekargController;
use App\Http\Controllers\Sr12Controller;
use App\Http\Controllers\Sr12MoreController;
use App\Http\Controllers\SrMoreController;
use App\Http\Controllers\YannoController;
use App\Http\Controllers\YannoMoreController;
use App\Http\Controllers\OutPeruadController;
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


Route::get('/login', [LoginController::class,'login']);

Route::get('/welcome', [LokerController::class,'welcome']); 

Route::get('/register', [DaftarController::class,'daftar']);

Route::get('/search', [LokerController::class,'search']);

Route::get('/more', [YannoMoreController::class,'more']);

Route::get('/more2', [CircleController::class,'more2']);

Route::get('/more3', [Sr12MoreController::class,'more3']);

Route::get('/more4', [LockMoreController::class,'more4']);

Route::get('/more5', [AnantController::class,'more5']);

Route::get('/more6', [KiantakaMoreController::class,'more6']);

Route::get('/more7', [SekargController::class,'more7']);

Route::get('/more8', [SrMoreController::class,'more8']);

Route::get('/index', [LokerController::class,'index']);

Route::get('/perusahaan', [PerusahaanController::class,'perusahaan']);

Route::get('/peruad', [PeruadController::class,'peruad']);

Route::get('/peladm', [PeladmController::class,'peladm']);

Route::get('/form', [FormController::class,'form']);

Route::get('/admin', [AdminController::class,'admin']);

Route::get('/kiantaka', [KiantakaController::class,'kiantaka']);

Route::get('/yanno', [YannoController::class,'yanno']);

Route::get('/sekarguna', [SekargunaController::class,'sekarguna']);

Route::get('/lock', [LockController::class,'lock']);

Route::get('/circlek', [CirclekController::class,'circlek']);

Route::get('/ananta', [AnantaController::class,'ananta']);

Route::get('/sr12', [Sr12Controller::class,'sr12']);

Route::get('/pilihan', [PilihanController::class,'pilihan']);

Route::get('/cbindex', [IndexPelController::class,'cbindex']);

Route::get('/loginad', [LoginAdController::class,'loginad']);

Route::get('/daftarad', [DaftarAdController::class,'daftarad']);

Route::get('/aftersub', [AfterSubController::class,'aftersub']);

Route::get('/aftersubpel', [AfterSubPelController::class,'aftersubpel']);

Route::get('/outperuad', [OutPeruadController::class,'outperuad']);
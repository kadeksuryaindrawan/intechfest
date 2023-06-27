<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RegisUserController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/pnbwdc', [HomeController::class,'pnbwdc']);
Route::get('/pnbdc', [HomeController::class,'pnbdc']);
Route::get('/dashboard', [LevelController::class, 'level'])->middleware(['auth'])->name('dashboard');
Route::resource('competitions','App\Http\Controllers\CompetitionController');
Route::resource('kelolaUsers','App\Http\Controllers\KelolaUserController');
Route::resource('pesertaLists','App\Http\Controllers\PesertaListController');
Route::resource('pesertaAccepteds','App\Http\Controllers\PesertaAcceptedController');
Route::resource('pnbdcProjects','App\Http\Controllers\PnbdcProjectController');
require __DIR__.'/auth.php';
Route::get('/daftar/{data}', [RegisUserController::class, 'create']);
Route::resource('peserta','App\Http\Controllers\RegisUserController');
Route::get('/pesertaPNBDC', [RegisUserController::class, 'indexPNBDC']);
Route::resource('payment','App\Http\Controllers\PaymentController');

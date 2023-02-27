<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riesgopsicosocialController;
use App\Http\Controllers\acontecimientostraumaticosController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/riesgo_psicosocial', [riesgopsicosocialController::class, 'index'])->name('index');
Route::get('/acontecimientos_traumaticos', [acontecimientostraumaticosController::class, 'index'])->name('index');
Route::get('/riesgo_psicosocial_quest', [riesgopsicosocialController::class, 'index'])->name('quest');



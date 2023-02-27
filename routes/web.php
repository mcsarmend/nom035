<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riesgopsicosocialController;
use App\Http\Controllers\acontecimientostraumaticosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/riesgo_psicosocial', [riesgopsicosocialController::class, 'index'])->name('index');
Route::get('/acontecimientos_traumaticos', [acontecimientostraumaticosController::class, 'index']);
Route::post('/ac_quest', [acontecimientostraumaticosController::class, 'ac_quest']);


Route::get('users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::get('users', 'App\Http\Controllers\UserController@store')->name('users.store');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riesgopsicosocialController;
use App\Http\Controllers\acontecimientostraumaticosController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\terminadoController;
use App\Http\Controllers\reportsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/formulario', [FormularioController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/formulario', [FormularioController::class, 'procesarFormulario'])->name('procesar-formulario');


// Paginas
Route::get('/acontecimientos_traumaticos', [acontecimientostraumaticosController::class, 'mostrarFormulario']);
Route::get('/riesgo_psicosocial', [riesgopsicosocialController::class, 'mostrarFormulario']);



// Formulario 

Route::post('/procesarFormularioAT', [acontecimientostraumaticosController::class, 'procesarFormulario']);
Route::post('/procesarFormularioRP', [riesgopsicosocialController::class, 'procesarFormulario']);


// Terminado
Route::get('/terminado', [terminadoController::class, 'terminado']);
Route::get('/report2', [reportsController::class, 'report2']);
Route::get('/getinfoform2', [reportsController::class, 'getinfoform2']);
Route::get('/getinfoform1_sec1', [reportsController::class, 'getinfoform1_sec1']);


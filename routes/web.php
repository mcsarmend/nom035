<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riesgopsicosocialController;
use App\Http\Controllers\acontecimientostraumaticosController;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Route::get('/riesgo_psicosocial', [riesgopsicosocialController::class, 'index'])->name('index');
Route::get('/acontecimientos_traumaticos', [acontecimientostraumaticosController::class, 'index']); */





Route::get('/formulario', [FormularioController::class, 'mostrarFormulario'])->name('formulario');
Route::post('/formulario', [FormularioController::class, 'procesarFormulario'])->name('procesar-formulario');


// Paginas
Route::get('/acontecimientos_traumaticos', [acontecimientostraumaticosController::class, 'mostrarFormulario']);
Route::get('/riesgo_psicosocial', [riesgopsicosocialController::class, 'mostrarFormulario']);



// Formulario 

Route::post('/procesarFormularioAT', [acontecimientostraumaticosController::class, 'procesarFormulario']);
Route::post('/procesarFormularioRP', [FormularioController::class, 'procesarFormulario']);

/* 
// Confurmacion 
Route::get('/acontecimientos_traumaticos/confirmacion', [acontecimientostraumaticosController::class, 'confirmacion'])->name('formulario.confirmacion');
Route::get('/riesgo_psicosocial/confirmacion', [riesgopsicosocialController::class, 'confirmacion'])->name('formulario.confirmacion');
 */




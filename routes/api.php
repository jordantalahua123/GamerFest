<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\InscripcionGrupalController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categoriaApi',[CategoriaController::class, 'index']);  
Route::get('/horarioApi',[HorarioController::class, 'index']);  
Route::get('/jugadoresApi',[JugadoresController::class, 'index']);
Route::get('/inscripcionGrupalApi',[InscripcionGrupalController::class, 'index']);
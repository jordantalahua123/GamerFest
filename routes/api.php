<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HorarioController;

use App\Http\Controllers\JugadoresController;

use App\Http\Controllers\InscripcionGrupalController;

use App\Http\Controllers\AulaController;

use App\Http\Controllers\EquiposController;


use App\Http\Controllers\VideoJuegosController;


use App\Http\Controllers\PagosController;
use App\Http\Controllers\InscripcionIndController;
use App\Http\Controllers\FechaPagosController;

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
Route::get('/aulasApi', [AulaController::class, 'index']);
Route::get('/equipoApi', [EquiposController::class, 'index']);
Route::get('/juegosApi',[VideoJuegosController::class, 'index']);
Route::get('/pagoApi',[PagosController::class, 'index']);  
Route::get('/inscripcionindApi',[InscripcionIndController::class, 'index']);  
Route::get('/fechaspagoApi',[FechaPagosController::class, 'index']);  


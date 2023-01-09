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

Route::get('/', function () {
    return view('welcome');
});










Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/dashboard', 
	[App\Http\Controllers\DashboardController::class, 'index']
	)->name('dashboard');

//Route Hooks - Do not delete//
	Route::view('jugadores', 'livewire.jugadores.index')->middleware('auth');
	Route::view('inscripciongrp', 'livewire.inscripciongrps.index')->middleware('auth');
	Route::view('inscripcionidv', 'livewire.inscripcionidvs.index')->middleware('auth');
	Route::view('equipos', 'livewire.equipos.index')->middleware('auth');
	Route::view('pagos', 'livewire.pagos.index')->middleware('auth');
	Route::view('horarios', 'livewire.horarios.index')->middleware('auth');
	Route::view('videojuegos', 'livewire.videojuegos.index')->middleware('auth');
	Route::view('categoriajuegos', 'livewire.categoriajuegos.index')->middleware('auth');
	Route::view('aulas', 'livewire.aulas.index')->middleware('auth');
	Route::view('reporte-inscripcionidv','livewire.reporte-inscripcionidv.index')->middleware('auth');
	Route::view('reporte-categoria','livewire.reporte-categoria.index')->middleware('auth');
	Route::get('/pdf-cat',[App\Http\Livewire\ReporteCategoria::class,'pdf'])->name('descargarPDF-Cat');
	Route::get('/pdf-idv',[App\Http\Livewire\ReporteInscripcionidv::class,'pdf'])->name('descargarPDF-Idv');






	Route::get('/pdf-horario',[\App\Http\Livewire\Horarios::class,'viewPDF'])->name('view-pdf');
	Route::get('/pdf-videojuego',[\App\Http\Livewire\Videojuegos::class,'viewPDF'])->name('view-pdf2');
	//Route::get('/pdf-idv',[App\Http\Livewire\ReporteInscripcionidv::class,'pdf'])->name('descargarPDF-Soc');
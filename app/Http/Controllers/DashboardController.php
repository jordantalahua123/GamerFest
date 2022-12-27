<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aula;
use App\Models\Equipo;
use App\Models\Inscripciongrp;
use App\Models\Inscripcionidv;
use App\Models\Videojuego;
use App\Models\Jugadore;
use App\Models\Pago;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contar = $this->getContar();
        
        return view('dashboard.home',[
            'contar'=>$contar,
        ]);
    }
    public function getContar()
    {
        $individual= Inscripcionidv::all()->count();
        $grupal= Inscripciongrp::all()->count();
        
        $sql='SELECT SUM(v.precio) FROM videojuegos as v, inscripcionidv  WHERE v.id =  inscripcionidv.videojuegos_id';
        $pagos = DB::select('SELECT SUM(monto) as suma FROM pagos as p');
        $totalind = DB::select('SELECT SUM(precio) as suma FROM videojuegos as v, inscripcionidv  WHERE v.id =  inscripcionidv.videojuegos_id');
        $totalgru = DB::select('SELECT SUM(precio) as suma FROM videojuegos as v, inscripciongrp  WHERE v.id =  inscripciongrp.videojuegos_id');
        $name= DB::select('SELECT nombre FROM videojuegos where videojuegos.categorias_id like "1";');

        $contar = [
            'total_videojuegos' => Videojuego::all()->count(), 
            'total_jugadores' => Jugadore::all()->count(), 
            'total_aulas' => Aula::all()->count(), 
            'total_equipos' => Equipo::all()->count(), 
            'total_inscripcionIndi' => Inscripcionidv::all()->count(), 
            'total_inscripcionGru' => Inscripciongrp::all()->count(), 
            'total_inscripciones' => round($individual + $grupal),
            'total_pagos' => (float) $pagos[0]->suma,  
        ];
        return $contar;
    }
}
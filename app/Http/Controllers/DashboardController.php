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
use App\Models\Evento;

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

        $totales = $this->Totales();
        $data = $this->FuncionRecogida();
        $eventos = $this->getEventos();

        return view('dashboard.home',[
            'totales'=>$totales,
            'eventos'=>$eventos,
        ],$data);
    }
    public function Totales()
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
    public function getEventos(){
        return Evento::select('Nombre','fecha')->orderBy('fecha')->take(5)->get();
    }
    public function FuncionRecogida(){
    
        $juegos=DB::select('SELECT nombre FROM videojuegos where videojuegos.categorias_id like "1"');
        $juegosgrp=DB::select('SELECT nombre FROM videojuegos where videojuegos.categorias_id like "2"');
        $juegosduo=DB::select('SELECT nombre FROM videojuegos where videojuegos.categorias_id like "3"');
        $fechaspago = DB::select('SELECT DISTINCT fecha FROM pagos');
        $numerospago = DB::select('SELECT monto FROM pagos');

        $id=DB::select('SELECT id FROM videojuegos where videojuegos.categorias_id like "1"');
        $idgrp=DB::select('SELECT id FROM videojuegos where videojuegos.categorias_id like "2"');
        $idduo=DB::select('SELECT id FROM videojuegos where videojuegos.categorias_id like "3"');
        
        $individual= Inscripcionidv::all()->count();
        $grupal= Inscripciongrp::all()->count();
        $inscripcionestotales = round($individual + $grupal);

        for($i=0; $i < sizeof($juegos);$i++){
            $data['label'][] = $juegos[$i]->nombre;
            $data['data'][] = Inscripcionidv::all()->where('videojuegos_id', $id[$i]->id)->count(); 
        }

        
        for($i=0; $i < sizeof($juegosgrp);$i++){
            $data['labelg'][] = $juegosgrp[$i]->nombre;
            $data['datag'][] = Inscripciongrp::all()->where('videojuegos_id',$idgrp[$i]->id)->count();
        }

        for($i=0; $i < sizeof($juegosduo);$i++){
            $data['labeld'][] = $juegosduo[$i]->nombre;
            $data['datad'][] = Inscripciongrp::all()->where('videojuegos_id',$idduo[$i]->id)->count();
        }

        for($i=0; $i < sizeof($fechaspago);$i++){
            $data['labelf'][] = $fechaspago[$i]->fecha;
            $data['dataf'][] = $numerospago[$i]->monto;
        }

        for($i=0; $i < sizeof($fechaspago);$i++){
            $data['labeli'][] = $fechaspago[$i]->fecha;
            $data['datai'][] = $inscripcionestotales;
        }
        $data['data'] = json_encode($data); 
        
        return $data;
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionGrupalController extends Controller
{
    public function index(){
        $datosInscripcionGrupal = DB::table('inscripciongrp')
        ->select('equipos.nombre as equipo','videojuegos.nombre as juego','pagos.titularpago as pagos','numerojuegos','inscripciongrp.observaciones')
        ->join('equipos','inscripciongrp.equipos_id','=','equipos.id')
        ->join('videojuegos','inscripciongrp.videojuegos_id','=','videojuegos.id')
        ->join('pagos','inscripciongrp.pagos_id','=','pagos_id')
        ->get();
        return response()->json($datosInscripcionGrupal);
    }
}

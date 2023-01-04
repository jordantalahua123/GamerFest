<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionGrupalController extends Controller
{
    public function index(){
        $datosInscripcionGrupal = DB::table('inscripciongrp')
        ->select('equipos.nombre as equipo','videojuegos.nombre as juego','pagos.titularpago as pagos','inscripciongrp.observaciones')
        ->join('equipos','inscripciongrp.equipos_id','=','equipos.id')
        ->join('videojuegos','inscripciongrp.videojuegos_id','=','videojuegos.id')
        ->join('pagos','inscripciongrp.pagos_id','=','pagos.id')
        ->OrderBy('equipos.nombre')
        ->get();
        return response()->json($datosInscripcionGrupal);
    }
}

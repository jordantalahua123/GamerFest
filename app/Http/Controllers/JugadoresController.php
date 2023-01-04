<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JugadoresController extends Controller
{
    public function index(){
        $datosJugadores = DB::table('jugadores')
        ->select('equipos.nombre as aquipo','jugadores.nombre','cedula','telefono','correo')
        ->join('equipos','jugadores.equipos_id','=','equipos.id')
        ->OrderBy('equipos.nombre')
        ->get();
        return response()->json($datosJugadores);
    }
}

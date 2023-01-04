<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionIndController extends Controller
{
    public function index(){
        $datosHorario = DB::table('inscripcionidv')
        ->select('jugadores.nombre as Jugador','videojuegos.nombre as Juego','pagos.titularpago as Pago','observaciones')
        ->join('jugadores','inscripcionidv.jugadores_id','=','jugadores.id')
        ->join('videojuegos','inscripcionidv.videojuegos_id','=','videojuegos.id')
        ->join('pagos','inscripcionidv.pagos_id','=','pagos.id')
        ->OrderBy('videojuegos.nombre')
        ->get();
        return response()->json($datosHorario);
    }
}

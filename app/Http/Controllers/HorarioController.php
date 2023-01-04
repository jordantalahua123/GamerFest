<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    public function index(){
        $datosHorario = DB::table('horarios')
        ->select('videojuegos.nombre as juego','aulas.Nombre as aula','tiempo_inicio','tiempo_fin','fecha','horarios.Observaciones')
        ->join('videojuegos','horarios.videojuegos_id','=','videojuegos.id')
        ->join('aulas','horarios.aulas_id','=','aulas.id')
        ->OrderBy('videojuegos.nombre')
        ->get();
        return response()->json($datosHorario);
    }
}

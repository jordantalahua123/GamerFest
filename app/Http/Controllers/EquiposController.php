<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;



class EquiposController extends Controller
{
    public function index(){
        $datosEquipo = Equipo::all();
        return response()->json($datosEquipo);
    }
}

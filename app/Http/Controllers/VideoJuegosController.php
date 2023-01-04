<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideoJuegosController extends Controller
{
    public function index(){
        $datosVideoJuego = Videojuego::all();
        return response()->json($datosVideoJuego);
    }
}

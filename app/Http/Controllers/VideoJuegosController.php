<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoJuegosController extends Controller
{
    public function index(){


        $datosVideoJuego = DB::table('videojuegos')
        ->select('categoriajuegos.tipo as Categoria','videojuegos.nombre','videojuegos.compania','videojuegos.precio','videojuegos.descripcion')
        ->join('categoriajuegos','videojuegos.categorias_id','=','categoriajuegos.id')
        ->OrderBy('videojuegos.nombre')
        ->get();
        return response()->json($datosVideoJuego);
    }
}

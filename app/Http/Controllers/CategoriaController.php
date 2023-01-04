<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoriajuego;

class CategoriaController extends Controller
{
    public function index(){
        $datosCategoria = Categoriajuego::all();
        return response()->json($datosCategoria);
    }
}

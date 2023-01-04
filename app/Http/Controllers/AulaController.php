<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;



class AulaController extends Controller
{
    public function index(){
        $datosAula = Aula::all();
        return response()->json($datosAula);
    }
}

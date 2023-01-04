<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FechaPagosController extends Controller
{
    public function index(){
        $datosFechas = DB::table('pagos')
        ->select('pagos.titularPago','pagos.fecha')
        ->OrderBy('pagos.fecha')
        ->get();
        return response()->json($datosFechas);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pago;

class PagosController extends Controller
{
    public function index(){
        $datosPagos = Pago::all();
        return response()->json($datosPagos);
    }
}

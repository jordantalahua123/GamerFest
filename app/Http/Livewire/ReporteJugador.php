<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jugadore;
use PDF;
use Illuminate\Support\Facades\DB;

class ReporteJugador extends Component
{
    public function render()
    {
        return view('livewire.reporte-jugador.view', [
            'jugadores' => DB::table('jugadores')
            ->select('equipos.nombre as Equipo','jugadores.id as Id','jugadores.nombre')
            ->join('equipos','jugadores.equipos_id','=','equipos.id')
            ->OrderBy('Id')
            ->get(),
        ]);
    }
    public function pdf()
    {
        $jugadores = DB::table('jugadores')
        ->select('equipos.nombre as Equipo','jugadores.id as Id','jugadores.nombre')
        ->join('equipos','jugadores.equipos_id','=','equipos.id')
        ->OrderBy('Id')
        ->get();
        $pdf = PDF::loadView('livewire.reporte-jugador.pdf', array('jugadores'=> $jugadores));
        return $pdf->stream('Reporte jugadores'.date('Y-m-d').'.pdf');
    }
}

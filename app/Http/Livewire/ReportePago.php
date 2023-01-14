<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pago;
use PDF;
use Illuminate\Support\Facades\DB;

class ReportePago extends Component
{
    public function render()
    {
        return view('livewire.reporte-pago.view', [
            'pagos' => Pago::all(),
        ]);
    }
    public function pdf()
    {
        $pagos = Pago::all();
        $pdf = PDF::loadView('livewire.reporte-pago.pdf', array('pagos'=> $pagos));
        return $pdf->stream('Reporte pagos'.date('Y-m-d').'.pdf');
    }
}

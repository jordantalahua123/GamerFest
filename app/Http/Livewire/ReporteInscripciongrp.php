<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inscripciongrp;
use PDF;

class ReporteInscripciongrp extends Component
{
    public $anio,$ipm;

    public function render()
    {
        $meses=collect(
            [
                '01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo',
                '06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre',
            ]
        );
        
        
        return view('livewire.reporte-inscripciongrp.view',['meses'=>$meses]);
    }

    public function getInscripciongrp($anio)
    {   
        $meses=collect(
            [
                '01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo',
                '06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre',
            ],
        );
        $ins_per_month = [];
        $ipm = [];
        $sumIns = 0;
        
        foreach($meses as $mes=>$label){
            $sumIns = Inscripciongrp::all()->whereBetween('created_at', [$anio.'-'.$mes.'-01', $anio.'-'.$mes.'-31'])->count();
            array_push($ins_per_month, $sumIns);
        }
        $this->ipm=$ins_per_month;

    }
    public function pdf()
    {
        $meses=collect(
            [
                '01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo',
                '06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre',
            ]
        );
        $anio = $_GET['anio'];
        $lista=$this->getInscripciongrp($anio);
        $ipm = $this->ipm; 
        $pdf = PDF::loadView('livewire.reporte-inscripciongrp.pdf',compact('ipm','anio','meses'));
        return $pdf->stream('Reporte-inscripciones-grupales'.date('Y-m-d').'.pdf');
    }
}
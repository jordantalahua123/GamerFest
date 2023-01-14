<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoriajuego;
use App\Models\Videojuego;
use PDF;
use Illuminate\Support\Facades\DB;

class ReporteCategoria extends Component
{
    public $list_cat, $categoria;
    public function render()
    {   
        return view('livewire.reporte-categoria.view', [
            'videojuegos' => DB::table('videojuegos')
            ->select('categoriajuegos.tipo as Categoria','videojuegos.id','videojuegos.nombre','videojuegos.compania','videojuegos.precio','videojuegos.descripcion')
            ->join('categoriajuegos','videojuegos.categorias_id','=','categoriajuegos.id')
            ->OrderBy('Categoria')
            ->get(),
        ]);
    }
    public function pdf()
    {
        $categoria = DB::table('videojuegos')
        ->select('categoriajuegos.tipo as Categoria','videojuegos.id','videojuegos.nombre','videojuegos.compania','videojuegos.precio','videojuegos.descripcion')
        ->join('categoriajuegos','videojuegos.categorias_id','=','categoriajuegos.id')
        ->OrderBy('Categoria')
        ->get();
        $pdf = PDF::loadView('livewire.reporte-categoria.pdf', array('categoria'=> $categoria));
        return $pdf->stream('Reporte categorias'.date('Y-m-d').'.pdf');
    }
}

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
        $categorias = Categoriajuego::pluck('tipo','id');
        return view('livewire.reporte-categoria.view',['categoriajuegos'=>$categorias]);
    }
    public function ListarJuegos($categoria){
        $peliculas = Videojuego::all();
        $lista_juegos = [];
        $i=0;

        $vid = (DB::table('videojuegos')->select('id','videojuegos.nombre','videojuegos.descripcion','categorias_id')->where('categorias_id',$categoria)->get())->map(function($vid){
            return ['id'=>$vid->id, 'nombre'=>$vid->nombre,'descripcion'=>$vid->descripcion];
        });

        $lista_juegos = $this->list_cat = $vid->toArray();
        return $lista_juegos;
        
    }
    public function pdf()
    {
        $categoria = $_GET['categoriajuegos'];
        $categoria_des = Categoriajuego::select('tipo')->where('id',$categoria)->first()->tipo;
        $lista=$this->ListarJuegos($categoria);
        $pdf = PDF::loadView('livewire.reporte-categoria.pdf',compact('lista','categoria_des'));
        return $pdf->stream('Reporte categorias'.date('Y-m-d').'.pdf');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inscripciongrp;
use App\Models\Equipo;
use App\Models\Videojuego;
use App\Models\Pago;


class Inscripciongrps extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $equipos_id, $videojuegos_id, $pagos_id, $numerojuegos, $observaciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $equipos = Equipo::all();
        $videojuegos = Videojuego::all();
        $pagos = Pago::all();
        return view('livewire.inscripciongrps.view', [
            'inscripciongrps' => Inscripciongrp::with('equipo')->with('videojuego')->with('pago')
                        ->whereHas('equipo', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
                        ->whereHas('videojuego', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
                        ->whereHas('pago', fn ($query) =>
                        $query->where('titularpago', 'LIKE', $keyWord)
                        )
						->orWhere('equipos_id', 'LIKE', $keyWord)
						->orWhere('videojuegos_id', 'LIKE', $keyWord)
						->orWhere('pagos_id', 'LIKE', $keyWord)
						->orWhere('numerojuegos', 'LIKE', $keyWord)
						->orWhere('observaciones', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('equipos','videojuegos','pagos'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->equipos_id = null;
		$this->videojuegos_id = null;
		$this->pagos_id = null;
		$this->numerojuegos = null;
		$this->observaciones = null;
    }

    public function store()
    {
        $this->validate([
		'equipos_id' => 'required',
		'videojuegos_id' => 'required',
		'pagos_id' => 'required',
		'numerojuegos' => 'required',
		'observaciones' => 'required',
        ]);

        Inscripciongrp::create([ 
			'equipos_id' => $this-> equipos_id,
			'videojuegos_id' => $this-> videojuegos_id,
			'pagos_id' => $this-> pagos_id,
			'numerojuegos' => $this-> numerojuegos,
			'observaciones' => $this-> observaciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Inscripciongrp Successfully created.');
    }

    public function edit($id)
    {
        $record = Inscripciongrp::findOrFail($id);

        $this->selected_id = $id; 
		$this->equipos_id = $record-> equipos_id;
		$this->videojuegos_id = $record-> videojuegos_id;
		$this->pagos_id = $record-> pagos_id;
		$this->numerojuegos = $record-> numerojuegos;
		$this->observaciones = $record-> observaciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'equipos_id' => 'required',
		'videojuegos_id' => 'required',
		'pagos_id' => 'required',
		'numerojuegos' => 'required',
		'observaciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Inscripciongrp::find($this->selected_id);
            $record->update([ 
			'equipos_id' => $this-> equipos_id,
			'videojuegos_id' => $this-> videojuegos_id,
			'pagos_id' => $this-> pagos_id,
			'numerojuegos' => $this-> numerojuegos,
			'observaciones' => $this-> observaciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Inscripciongrp Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Inscripciongrp::where('id', $id);
            $record->delete();
        }
    }
}

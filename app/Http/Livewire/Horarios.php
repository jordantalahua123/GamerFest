<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Horario;
use App\Models\Videojuego;
use App\Models\Aula;

class Horarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $videojuegos_id, $aulas_id, $tiempo_inicio, $tiempo_fin, $fecha, $Observaciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $aulas = Aula::all();
        $videojuegos = Videojuego::all();
        return view('livewire.horarios.view', [
            'horarios' => Horario::with('aula')->with('videojuego')
                        ->whereHas('aula', fn ($query) =>
                        $query->where('Nombre', 'LIKE', $keyWord)
                        )
                        ->whereHas('videojuego', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
						->orWhere('videojuegos_id', 'LIKE', $keyWord)
						->orWhere('aulas_id', 'LIKE', $keyWord)
						->orWhere('tiempo_inicio', 'LIKE', $keyWord)
						->orWhere('tiempo_fin', 'LIKE', $keyWord)
						->orWhere('fecha', 'LIKE', $keyWord)
						->orWhere('Observaciones', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('aulas','videojuegos'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->videojuegos_id = null;
		$this->aulas_id = null;
		$this->tiempo_inicio = null;
		$this->tiempo_fin = null;
		$this->fecha = null;
		$this->Observaciones = null;
    }

    public function store()
    {
        $this->validate([
		'videojuegos_id' => 'required',
		'aulas_id' => 'required',
		'tiempo_inicio' => 'required',
		'tiempo_fin' => 'required',
		'fecha' => 'required',
		'Observaciones' => 'required',
        ]);

        Horario::create([ 
			'videojuegos_id' => $this-> videojuegos_id,
			'aulas_id' => $this-> aulas_id,
			'tiempo_inicio' => $this-> tiempo_inicio,
			'tiempo_fin' => $this-> tiempo_fin,
			'fecha' => $this-> fecha,
			'Observaciones' => $this-> Observaciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Horario Successfully created.');
    }

    public function edit($id)
    {
        $record = Horario::findOrFail($id);

        $this->selected_id = $id; 
		$this->videojuegos_id = $record-> videojuegos_id;
		$this->aulas_id = $record-> aulas_id;
		$this->tiempo_inicio = $record-> tiempo_inicio;
		$this->tiempo_fin = $record-> tiempo_fin;
		$this->fecha = $record-> fecha;
		$this->Observaciones = $record-> Observaciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'videojuegos_id' => 'required',
		'aulas_id' => 'required',
		'tiempo_inicio' => 'required',
		'tiempo_fin' => 'required',
		'fecha' => 'required',
		'Observaciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Horario::find($this->selected_id);
            $record->update([ 
			'videojuegos_id' => $this-> videojuegos_id,
			'aulas_id' => $this-> aulas_id,
			'tiempo_inicio' => $this-> tiempo_inicio,
			'tiempo_fin' => $this-> tiempo_fin,
			'fecha' => $this-> fecha,
			'Observaciones' => $this-> Observaciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Horario Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Horario::where('id', $id);
            $record->delete();
        }
    }
}

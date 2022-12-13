<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Aula;

class Aulas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Nombre, $edificio, $direccion, $observaciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.aulas.view', [
            'aulas' => Aula::latest()
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('edificio', 'LIKE', $keyWord)
						->orWhere('direccion', 'LIKE', $keyWord)
						->orWhere('observaciones', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->Nombre = null;
		$this->edificio = null;
		$this->direccion = null;
		$this->observaciones = null;
    }

    public function store()
    {
        $this->validate([
		'Nombre' => 'required',
		'edificio' => 'required',
		'direccion' => 'required',
		'observaciones' => 'required',
        ]);

        Aula::create([ 
			'Nombre' => $this-> Nombre,
			'edificio' => $this-> edificio,
			'direccion' => $this-> direccion,
			'observaciones' => $this-> observaciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Aula Successfully created.');
    }

    public function edit($id)
    {
        $record = Aula::findOrFail($id);

        $this->selected_id = $id; 
		$this->Nombre = $record-> Nombre;
		$this->edificio = $record-> edificio;
		$this->direccion = $record-> direccion;
		$this->observaciones = $record-> observaciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Nombre' => 'required',
		'edificio' => 'required',
		'direccion' => 'required',
		'observaciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Aula::find($this->selected_id);
            $record->update([ 
			'Nombre' => $this-> Nombre,
			'edificio' => $this-> edificio,
			'direccion' => $this-> direccion,
			'observaciones' => $this-> observaciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Aula Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Aula::where('id', $id);
            $record->delete();
        }
    }
}

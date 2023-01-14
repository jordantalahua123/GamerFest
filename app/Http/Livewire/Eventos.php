<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Evento;

class Eventos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Nombre, $descripcion, $fecha;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.eventos.view', [
            'eventos' => Evento::latest()
						->orWhere('Nombre', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('fecha', 'LIKE', $keyWord)
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
		$this->descripcion = null;
		$this->fecha = null;
    }

    public function store()
    {
        $this->validate([
		'Nombre' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
        ]);

        Evento::create([ 
			'Nombre' => $this-> Nombre,
			'descripcion' => $this-> descripcion,
			'fecha' => $this-> fecha
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Evento Successfully created.');
    }

    public function edit($id)
    {
        $record = Evento::findOrFail($id);

        $this->selected_id = $id; 
		$this->Nombre = $record-> Nombre;
		$this->descripcion = $record-> descripcion;
		$this->fecha = $record-> fecha;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Nombre' => 'required',
		'descripcion' => 'required',
		'fecha' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Evento::find($this->selected_id);
            $record->update([ 
			'Nombre' => $this-> Nombre,
			'descripcion' => $this-> descripcion,
			'fecha' => $this-> fecha
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Evento Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Evento::where('id', $id);
            $record->delete();
        }
    }
}

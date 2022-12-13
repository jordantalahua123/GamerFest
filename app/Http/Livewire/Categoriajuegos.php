<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Categoriajuego;

class Categoriajuegos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $tipo, $numerojugadores, $copetencia, $descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categoriajuegos.view', [
            'categoriajuegos' => Categoriajuego::latest()
						->orWhere('tipo', 'LIKE', $keyWord)
						->orWhere('numerojugadores', 'LIKE', $keyWord)
						->orWhere('copetencia', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
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
		$this->tipo = null;
		$this->numerojugadores = null;
		$this->copetencia = null;
		$this->descripcion = null;
    }

    public function store()
    {
        $this->validate([
		'tipo' => 'required',
		'numerojugadores' => 'required',
		'copetencia' => 'required',
		'descripcion' => 'required',
        ]);

        Categoriajuego::create([ 
			'tipo' => $this-> tipo,
			'numerojugadores' => $this-> numerojugadores,
			'copetencia' => $this-> copetencia,
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Categoriajuego Successfully created.');
    }

    public function edit($id)
    {
        $record = Categoriajuego::findOrFail($id);

        $this->selected_id = $id; 
		$this->tipo = $record-> tipo;
		$this->numerojugadores = $record-> numerojugadores;
		$this->copetencia = $record-> copetencia;
		$this->descripcion = $record-> descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'tipo' => 'required',
		'numerojugadores' => 'required',
		'copetencia' => 'required',
		'descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Categoriajuego::find($this->selected_id);
            $record->update([ 
			'tipo' => $this-> tipo,
			'numerojugadores' => $this-> numerojugadores,
			'copetencia' => $this-> copetencia,
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Categoriajuego Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Categoriajuego::where('id', $id);
            $record->delete();
        }
    }
}

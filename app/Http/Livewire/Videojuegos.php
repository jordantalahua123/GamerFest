<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Videojuego;

class Videojuegos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $categorias_id, $nombre, $compania, $precio, $descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.videojuegos.view', [
            'videojuegos' => Videojuego::latest()
						->orWhere('categorias_id', 'LIKE', $keyWord)
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('compania', 'LIKE', $keyWord)
						->orWhere('precio', 'LIKE', $keyWord)
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
		$this->categorias_id = null;
		$this->nombre = null;
		$this->compania = null;
		$this->precio = null;
		$this->descripcion = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'compania' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
        ]);

        Videojuego::create([ 
			'categorias_id' => $this-> categorias_id,
			'nombre' => $this-> nombre,
			'compania' => $this-> compania,
			'precio' => $this-> precio,
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Videojuego Successfully created.');
    }

    public function edit($id)
    {
        $record = Videojuego::findOrFail($id);

        $this->selected_id = $id; 
		$this->categorias_id = $record-> categorias_id;
		$this->nombre = $record-> nombre;
		$this->compania = $record-> compania;
		$this->precio = $record-> precio;
		$this->descripcion = $record-> descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'compania' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Videojuego::find($this->selected_id);
            $record->update([ 
			'categorias_id' => $this-> categorias_id,
			'nombre' => $this-> nombre,
			'compania' => $this-> compania,
			'precio' => $this-> precio,
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Videojuego Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Videojuego::where('id', $id);
            $record->delete();
        }
    }
}

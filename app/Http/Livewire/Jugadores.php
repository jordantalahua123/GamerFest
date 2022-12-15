<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jugadore;
use App\Models\Equipo;

class Jugadores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $equipos_id, $nombre, $cedula, $telefono, $correo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $equipos = Equipo::all();
        return view('livewire.jugadores.view', [
            'jugadores' => Jugadore::with('equipo')
                        ->whereHas('equipo', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
						->orWhere('equipos_id', 'LIKE', $keyWord)
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('cedula', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('correo', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('equipos'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->equipos_id = null;
		$this->nombre = null;
		$this->cedula = null;
		$this->telefono = null;
		$this->correo = null;
    }

    public function store()
    {
        $this->validate([
		'equipos_id' => 'required',
		'nombre' => 'required',
		'cedula' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
        ]);

        Jugadore::create([ 
			'equipos_id' => $this-> equipos_id,
			'nombre' => $this-> nombre,
			'cedula' => $this-> cedula,
			'telefono' => $this-> telefono,
			'correo' => $this-> correo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Jugadore Successfully created.');
    }

    public function edit($id)
    {
        $record = Jugadore::findOrFail($id);

        $this->selected_id = $id; 
		$this->equipos_id = $record-> equipos_id;
		$this->nombre = $record-> nombre;
		$this->cedula = $record-> cedula;
		$this->telefono = $record-> telefono;
		$this->correo = $record-> correo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'equipos_id' => 'required',
		'nombre' => 'required',
		'cedula' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Jugadore::find($this->selected_id);
            $record->update([ 
			'equipos_id' => $this-> equipos_id,
			'nombre' => $this-> nombre,
			'cedula' => $this-> cedula,
			'telefono' => $this-> telefono,
			'correo' => $this-> correo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Jugadore Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Jugadore::where('id', $id);
            $record->delete();
        }
    }
}

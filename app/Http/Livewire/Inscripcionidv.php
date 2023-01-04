<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inscripcionidv;
use App\Models\Jugadore;
use App\Models\Videojuego;
use App\Models\Pago;
class Inscripcionidvs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $jugadores_id, $videojuegos_id, $pagos_id, $numerojuegos, $observaciones;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $jugadores = Jugadore::all();
        $videojuegos = Videojuego::all();
        $pagos = Pago::all();
        return view('livewire.inscripcionidvs.view', [
            'inscripcionidvs' => Inscripcionidv::with('jugadore')->with('videojuego')->with('pago')
                        ->whereHas('jugadore', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
                        ->whereHas('videojuego', fn ($query) =>
                        $query->where('nombre', 'LIKE', $keyWord)
                        )
                        ->whereHas('pago', fn ($query) =>
                        $query->where('titularpago', 'LIKE', $keyWord)
                        )
						->orWhere('jugadores_id', 'LIKE', $keyWord)
						->orWhere('videojuegos_id', 'LIKE', $keyWord)
						->orWhere('pagos_id', 'LIKE', $keyWord)
						->orWhere('numerojuegos', 'LIKE', $keyWord)
						->orWhere('observaciones', 'LIKE', $keyWord)
						->paginate(10),
        ],compact('jugadores','videojuegos','pagos'));
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->jugadores_id = null;
		$this->videojuegos_id = null;
		$this->pagos_id = null;
		$this->numerojuegos = null;
		$this->observaciones = null;
    }

    public function store()
    {
        $this->validate([
		'jugadores_id' => 'required',
		'videojuegos_id' => 'required',
		'pagos_id' => 'required',
		'numerojuegos' => 'required',
		'observaciones' => 'required',
        ]);

        Inscripcionidv::create([ 
			'jugadores_id' => $this-> jugadores_id,
			'videojuegos_id' => $this-> videojuegos_id,
			'pagos_id' => $this-> pagos_id,
			'numerojuegos' => $this-> numerojuegos,
			'observaciones' => $this-> observaciones
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Inscripcionidv Successfully created.');
    }

    public function edit($id)
    {
        $record = Inscripcionidv::findOrFail($id);

        $this->selected_id = $id; 
		$this->jugadores_id = $record-> jugadores_id;
		$this->videojuegos_id = $record-> videojuegos_id;
		$this->pagos_id = $record-> pagos_id;
		$this->numerojuegos = $record-> numerojuegos;
		$this->observaciones = $record-> observaciones;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'jugadores_id' => 'required',
		'videojuegos_id' => 'required',
		'pagos_id' => 'required',
		'numerojuegos' => 'required',
		'observaciones' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Inscripcionidv::find($this->selected_id);
            $record->update([ 
			'jugadores_id' => $this-> jugadores_id,
			'videojuegos_id' => $this-> videojuegos_id,
			'pagos_id' => $this-> pagos_id,
			'numerojuegos' => $this-> numerojuegos,
			'observaciones' => $this-> observaciones
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Inscripcionidv Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Inscripcionidv::where('id', $id);
            $record->delete();
        }
    }
}

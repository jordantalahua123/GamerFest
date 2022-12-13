<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pago;

class Pagos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $titularpago, $comprobante, $monto, $fecha;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.pagos.view', [
            'pagos' => Pago::latest()
						->orWhere('titularpago', 'LIKE', $keyWord)
						->orWhere('comprobante', 'LIKE', $keyWord)
						->orWhere('monto', 'LIKE', $keyWord)
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
		$this->titularpago = null;
		$this->comprobante = null;
		$this->monto = null;
		$this->fecha = null;
    }

    public function store()
    {
        $this->validate([
		'titularpago' => 'required',
		'comprobante' => 'required',
		'monto' => 'required',
		'fecha' => 'required',
        ]);

        Pago::create([ 
			'titularpago' => $this-> titularpago,
			'comprobante' => $this-> comprobante,
			'monto' => $this-> monto,
			'fecha' => $this-> fecha
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Pago Successfully created.');
    }

    public function edit($id)
    {
        $record = Pago::findOrFail($id);

        $this->selected_id = $id; 
		$this->titularpago = $record-> titularpago;
		$this->comprobante = $record-> comprobante;
		$this->monto = $record-> monto;
		$this->fecha = $record-> fecha;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'titularpago' => 'required',
		'comprobante' => 'required',
		'monto' => 'required',
		'fecha' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Pago::find($this->selected_id);
            $record->update([ 
			'titularpago' => $this-> titularpago,
			'comprobante' => $this-> comprobante,
			'monto' => $this-> monto,
			'fecha' => $this-> fecha
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Pago Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Pago::where('id', $id);
            $record->delete();
        }
    }
}

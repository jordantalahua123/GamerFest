<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="videojuegos_id"></label>
                <select wire:model="videojuegos_id" type="text" class="form-control" id="videojuegos_id" placeholder="Videojuego">@error('videojuegos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    <option>Seleccione:</option>
                    @foreach($videojuegos as $videojuego)
                    <option value="{{$videojuego->id}}">{{$videojuego->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="aulas_id"></label>
                <select wire:model="aulas_id" type="text" class="form-control" id="aulas_id" placeholder="Aula">@error('aulas_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    <option>Seleccione:</option>
                    @foreach($aulas as $aula)
                    <option value="{{$aula->id}}">{{$aula->Nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tiempo_inicio"></label>
                <input wire:model="tiempo_inicio" type="time" class="form-control" id="tiempo_inicio" placeholder="Tiempo Inicio">@error('tiempo_inicio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tiempo_fin"></label>
                <input wire:model="tiempo_fin" type="time" class="form-control" id="tiempo_fin" placeholder="Tiempo Fin">@error('tiempo_fin') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha"></label>
                <input wire:model="fecha" type="date" class="form-control" id="fecha" placeholder="Fecha">@error('fecha') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Observaciones"></label>
                <input wire:model="Observaciones" type="text" class="form-control" id="Observaciones" placeholder="Observaciones">@error('Observaciones') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>

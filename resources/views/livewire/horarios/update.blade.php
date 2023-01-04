<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
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
                <input wire:model="tiempo_inicio" type="text" class="form-control" id="tiempo_inicio" placeholder="Tiempo Inicio">@error('tiempo_inicio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tiempo_fin"></label>
                <input wire:model="tiempo_fin" type="text" class="form-control" id="tiempo_fin" placeholder="Tiempo Fin">@error('tiempo_fin') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha"></label>
                <input wire:model="fecha" type="text" class="form-control" id="fecha" placeholder="Fecha">@error('fecha') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Observaciones"></label>
                <input wire:model="Observaciones" type="text" class="form-control" id="Observaciones" placeholder="Observaciones">@error('Observaciones') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>

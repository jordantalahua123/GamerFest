<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nueva inscripcion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                <div class="form-group">
                <label for="jugadores_id">Jugadores</label>
                <select wire:model="jugadores_id" type="text" class="form-control" id="jugadores_id" placeholder="Jugador">@error('jugadores_id') <span class="error text-danger">{{ $message }}</span> @enderror
                <option>Seleccione:</option>
                    @foreach($jugadores as $jugador)
                    <option value="{{$jugador->id}}">{{$jugador->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="videojuegos_id">Videojuego</label>
                <select wire:model="videojuegos_id" type="text" class="form-control" id="videojuegos_id" placeholder="Videojuego">@error('videojuegos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                <option>Seleccione:</option>
                    @foreach($videojuegos as $videojuego)
                    <option value="{{$videojuego->id}}">{{$videojuego->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pagos_id">Pago</label>
                <select wire:model="pagos_id" type="text" class="form-control" id="pagos_id" placeholder="Pago">@error('pagos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                <option>Seleccione:</option>
                    @foreach($pagos as $pago)
                    <option value="{{$pago->id}}">{{$pago->titularpago}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="numerojuegos"></label>
                <input wire:model="numerojuegos" type="text" class="form-control" id="numerojuegos" placeholder="Numerojuegos">@error('numerojuegos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="observaciones"></label>
                <input wire:model="observaciones" type="text" class="form-control" id="observaciones" placeholder="Observaciones">@error('observaciones') <span class="error text-danger">{{ $message }}</span> @enderror
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

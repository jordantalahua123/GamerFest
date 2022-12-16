<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Inscripciongrp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                <label for="equipos_id">Equipo</label>
                <select wire:model="equipos_id" type="text" class="form-control" id="equipos_id" placeholder="Equipo">@error('equipos_id') <span class="error text-danger">{{ $message }}</span> @enderror
                <option>Seleccione:</option>
                    @foreach($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>

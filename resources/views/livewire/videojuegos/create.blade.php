<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Nuevo Videojuego</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="categorias_id"></label>
                <select wire:model="categorias_id" type="text" class="form-control" id="categorias_id" placeholder="Categorias">@error('categorias_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    <option>Seleccione</option>
                    @foreach($categoriajuegos as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->tipo}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="nombre"></label>
                <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="compania"></label>
                <input wire:model="compania" type="text" class="form-control" id="compania" placeholder="Compania">@error('compania') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="precio"></label>
                <input wire:model="precio" type="number" class="form-control" id="precio" placeholder="Precio">@error('precio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="descripcion"></label>
                <input wire:model="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripcion">@error('descripcion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>

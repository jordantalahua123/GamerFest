@section('title', __('Categoriajuegos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">

						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Categoria">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Categoria
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.categoriajuegos.create')
						@include('livewire.categoriajuegos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Tipo</th>
								<th>Numero de jugadores</th>
								<th>Competencia</th>
								<th>Descripción</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($categoriajuegos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->tipo }}</td>
								<td>{{ $row->numerojugadores }}</td>
								<td>{{ $row->copetencia }}</td>
								<td>{{ $row->descripcion }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Categoriajuego id {{$row->id}}? \nDeleted Categoriajuegos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $categoriajuegos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

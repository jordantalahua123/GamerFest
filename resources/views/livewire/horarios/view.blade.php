@section('title', __('Horarios'))
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
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Horarios">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Horarios
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.horarios.create')
						@include('livewire.horarios.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>VideoJuego</th>
								<th>Aulas</th>
								<th>Hora Inicio</th>
								<th>Hora Final</th>
								<th>Fecha</th>
								<th>Observaciones</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($horarios as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->videojuego->nombre }}</td>
								<td>{{ $row->aula->Nombre }}</td>
								<td>{{ $row->tiempo_inicio }}</td>
								<td>{{ $row->tiempo_fin }}</td>
								<td>{{ $row->fecha }}</td>
								<td>{{ $row->Observaciones }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Horario id {{$row->id}}? \nDeleted Horarios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $horarios->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

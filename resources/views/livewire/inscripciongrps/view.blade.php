@section('title', __('Inscripciongrps'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir inscripcion grupal
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.inscripciongrps.create')
						@include('livewire.inscripciongrps.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Equipos</th>
								<th>Videojuegos</th>
								<th>Pagos</th>
								<th>Numerojuegos</th>
								<th>Observaciones</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($inscripciongrps as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->equipo->nombre }}</td>
								<td>{{ $row->videojuego->nombre }}</td>
								<td>{{ $row->pago->titularpago }}</td>
								<td>{{ $row->numerojuegos }}</td>
								<td>{{ $row->observaciones }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Inscripciongrp id {{$row->id}}? \nDeleted Inscripciongrps cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $inscripciongrps->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

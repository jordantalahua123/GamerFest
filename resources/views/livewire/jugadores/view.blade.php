@section('title', __('Jugadores'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Jugadores">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir jugadores
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.jugadores.create')
						@include('livewire.jugadores.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Equipos</th>
								<th>Nombre</th>
								<th>Cedula</th>
								<th>Telefono</th>
								<th>Correo</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($jugadores as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->equipo->nombre}}</td>
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->cedula }}</td>
								<td>{{ $row->telefono }}</td>
								<td>{{ $row->correo }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Jugadore id {{$row->id}}? \nDeleted Jugadores cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $jugadores->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

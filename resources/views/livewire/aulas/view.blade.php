@section('title', __('Aulas'))
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
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Aulas">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Aula
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.aulas.create')
						@include('livewire.aulas.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre</th>
								<th>Edificio</th>
								<th>Dirección</th>
								<th>Observaciones</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($aulas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->Nombre }}</td>
								<td>{{ $row->edificio }}</td>
								<td>{{ $row->direccion }}</td>
								<td>{{ $row->observaciones }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Accciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Aula id {{$row->id}}? \nDeleted Aulas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $aulas->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

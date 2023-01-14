@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="canonical" href="https://demo-basic.adminkit.io/" />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>
    <div class="row">
        <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Inscripciones totales</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-success">
                                            <i class="align-middle fas fa-clipboard-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totales['total_inscripciones'] }}</h1>
                                <div class="mb-0">
                                    <span class="text-muted">Desde la creación de la página</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Total de jugadores</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-success">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totales['total_jugadores'] }}</h1>
                                <div class="mb-0">
                                    <span class="text-muted">Desde la creación de la página</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Dinero recaudado</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-success">
                                            <i class="align-middle fas fa-money-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">${{ $totales['total_pagos'] }}</h1>
                                <div class="mb-0">
                                    <span class="text-muted">En base a inscripciones</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Equipos inscritos</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-success">
                                            <i class="align-middle fas fa-people-carry"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $totales['total_equipos'] }}</h1>
                                <div class="mb-0">
                                    <span class="text-muted">En base a inscripciones</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-xxl-7">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Totales de inscripciones por tipo</h5>
                </div>
                <div class="card-body py-3">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="chart chart-sm" style="position: relative; height:250px; width:400px">
                                <canvas id="PieChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
            <div class="card flex-fill w-100">
                <div class="card-header text-center">
                    <h5 class="card-title mb-0">Juegos individuales más populares</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
                            <canvas id="juegosidv"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Juegos grupales más populares</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
                            <canvas id="juegosgrp"></canvas>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Juegos duales más populares</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
							<canvas id="juegosduo"></canvas>
						</div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Resumen de pagos diarios</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
							<canvas id="pagos"></canvas>
						</div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-md-6 pb-5">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Eventos anteriores</h5>
                        </div>
                        <div class="col-6">
                            <a href="eventos" class="btn btn-info">Más detalles</a>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex">
                    <table class="table table-hover">
							<thead class="thead">
								<tr>
									<th>Nombre</th>
									<th>Fecha</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($eventos as $row)
								<tr>
									<td>{{ $row->Nombre}}</td>
									<td>{{ $row->fecha}}</td>
									@endforeach
							</tbody>
					</table>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	window.livewire.on('closeModal', () => {
		$('#createDataModal').modal('hide');
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	const juegosidv = JSON.parse(`<?php echo $data; ?>`);
	const juegosidvChartCanvas = document.getElementById('juegosidv').getContext('2d');
	const juegosidvChart = new Chart(juegosidvChartCanvas, {
		type: 'bar',
		data: {
			labels: juegosidv.label,
			datasets: [{
				data: juegosidv.data,
				backgroundColor: [
					'rgba(105, 95, 89)',
					'rgba(213, 186, 154)',
					'rgba(213, 186, 89)',
					'rgba(120, 186, 154)',
					'rgba(105, 41, 89)',
					'rgba(252, 211, 89)',
					'rgba(252, 211, 216)'
				],
				borderColor: [
					'black'
				],
				borderWidth: 1
			}]
		},
		options: {
			plugins: {
				legend: {
					display: false
				}
			}
		}
	});
	/////////////////////////////
	const juegosgrp = JSON.parse(`<?php echo $data; ?>`);
	const juegosgrpChartCanvas = document.getElementById('juegosgrp').getContext('2d');
	const juegosgrpChart = new Chart(juegosgrpChartCanvas, {
		type: 'bar',
		data: {
			labels: juegosgrp.labelg,
			datasets: [{
				data: juegosgrp.datag,
				backgroundColor: [
					'rgba(120, 186, 154)',
					'rgba(213, 186, 154)',
					'rgba(213, 186, 89)',
					'rgba(105, 95, 89)',
					'rgba(105, 41, 89)',
					'rgba(252, 211, 89)',
					'rgba(252, 211, 216)'
				],
				borderColor: [
					'black'
				],
				borderWidth: 1
			}]
		},
		options: {
			plugins: {
				legend: {
					display: false
				}
			}
		}
	});
	/////////////////////////////
	const juegosduo = JSON.parse(`<?php echo $data; ?>`);
	const juegosduoChartCanvas = document.getElementById('juegosduo').getContext('2d');
	const juegosduoChart = new Chart(juegosduoChartCanvas, {
		type: 'bar',
		data: {
			labels: juegosduo.labeld,
			datasets: [{
				data: juegosduo.datad,
				backgroundColor: [
					'rgba(252, 211, 216)',
					'rgba(213, 186, 154)',
					'rgba(213, 186, 89)',
					'rgba(105, 95, 89)',
					'rgba(105, 41, 89)',
					'rgba(252, 211, 89)',
					'rgba(120, 186, 154)'
				],
				borderColor: [
					'black'
				],
				borderWidth: 1
			}]
		},
		options: {
			plugins: {
				legend: {
					display: false
				}
			}
		}
	});
    /////////////////////////////
    const pagos = JSON.parse(`<?php echo $data; ?>`);
    const pagosChartCanvas = document.getElementById('pagos').getContext('2d');
	const pagosChart = new Chart(pagosChartCanvas, {
		type: 'line',
		data: {
			labels: pagos.labelf,
			datasets: [{
				data: pagos.dataf,
				backgroundColor: 'rgba(105, 41, 89)',
				borderColor: 'black',
				borderWidth: 3
			}]  
		},
		options: {
			plugins: {
				legend: {
					display: false
				}
			}
		}
	});
    /////////////////////////////
    /////////////////////////////
    var pieChartCanvas = $('#PieChart').get(0).getContext('2d')
	var pieData = {
		labels: [
			'Incripcciones Individuales',
			'Inscripcciones Grupales',
		],
		datasets: [{
			data: [<?php echo $totales['total_inscripcionIndi'] ?>, <?php echo $totales['total_inscripcionGru'] ?>],
			backgroundColor: ['#BAE8F3', '#FDED7C']
		}]
	}
	var pieOptions = {
		legend: {
			display: true
		}
	}
    var pieChart = new Chart(pieChartCanvas, {
		type: 'doughnut',
		data: pieData,
		options: pieOptions
	})
</script>
@stop
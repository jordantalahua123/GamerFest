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
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="truck"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $contar['total_inscripciones'] }}</h1>
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
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $contar['total_jugadores'] }}</h1>
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
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $contar['total_pagos'] }}</h1>
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
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">{{ $contar['total_equipos'] }}</h1>
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

                    <h5 class="card-title mb-0">Recent Movement</h5>
                </div>
                <div class="card-body py-3">
                    <div class="chart chart-sm">
                        <canvas id="chartjs-dashboard-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Juegos individuales más populares</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
                            <canvas id="juegosidv"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-3 col-md-3 col-xxl-2 d-flex order-3 order-xxl-2">
		</div>
        <div class="col-6 col-md-6 col-xxl-6 d-flex order-3 order-xxl-2">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Juegos duales más populares</h5>
                </div>
				<div class="card-body d-flex">
                    <div class="align-self-center w-100">
						<div class="py-3" style="position: relative; height:40vh; width:80vw">
							<canvas id="juegosduo"></canvas>
						</div>
                    </div>
                </div>
				
            </div>
        </div>
		<div class="col-3 col-md-3 col-xxl-2 d-flex order-3 order-xxl-2">
		</div>
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Juegos grupales más populares</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3" style="position: relative; height:40vh; width:80vw">
                            <canvas id="juegosgrp"></canvas>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-12 col-lg-4 col-xxl-3 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Monthly Sales</h5>
                </div>
                <div class="card-body d-flex w-100">
                    <div class="align-self-center chart chart-lg">
                        <canvas id="chartjs-dashboard-bar"></canvas>
                    </div>
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
</script>
@stop
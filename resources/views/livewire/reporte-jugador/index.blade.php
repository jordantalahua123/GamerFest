
@extends('adminlte::page')

@section('title', 'Listado Pagos')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('reporte-jugador')
        </div>     
    </div>   
</div>

@stop

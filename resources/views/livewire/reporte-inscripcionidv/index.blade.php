
@extends('adminlte::page')

@section('title', 'Listado Inscripcion')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('reporte-inscripcionidv')
        </div>     
    </div>   
</div>

@stop

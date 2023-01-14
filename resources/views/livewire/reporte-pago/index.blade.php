
@extends('adminlte::page')

@section('title', 'Listado Pagos')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('reporte-pago')
        </div>     
    </div>   
</div>

@stop

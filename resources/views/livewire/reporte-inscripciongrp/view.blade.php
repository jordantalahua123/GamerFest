@section('title', __('Inscripciongrp'))
<div class="container-fluid p-5">   
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center"><b>Reporte Inscripciones Grupales</b></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3">
            <select wire:model="anio" name="opcion" id="select" class="form-control" wire:click="restData()">
                <option value="1">-- Seleccione una Opcion </option>
                <?php
                $year = date('Y');
                for ($i = 2000; $i < $year + 1; $i++) {
                    echo '<option>' . $i . '</option>';
                }
                
                ?>
            </select>
        </div>
        <div class="col-1">
            <button wire:click.prevent="getInscripciongrp({{ $anio }})" class="btn btn-info"
                wire:click="renderData()">Generar</button>
        </div>
        <div class="col">
            <a href="{{ route('descargarPDF-Grp',['anio' => $anio])}}" target="_blank" class="btn btn-success"
                style="float: right;">
                <span>Exportar</span>
                <i class="fas fa-download p-1"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-6">
            <table class="table table-hover table-success">
                <thead>
                    <tr class="">
                        <th scope="col" class="text-center">Mes</th>
                        <th scope="col" class="text-center">Numero Inscritos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($meses as $num => $nombre)
                    <tr>
                        <td class="text-center">{{ $nombre }}</td>
                        @if(isset($ipm))
                        <td class="text-center">{{ $ipm[$loop->iteration - 1] }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@section('js')
<script></script>
@stop
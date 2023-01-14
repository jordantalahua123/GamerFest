@section('title', __('Inscripcionidv'))
<div class="container-fluid p-5">   
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center"><b>Reporte Inscripciones individuales en 2023</b></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3">
            <?php
                $anio = '2023';
            ?>
        </div>
        <div class="col">
            <a href="{{ route('descargarPDF-Idv',['anio' => $anio])}}" target="_blank" class="btn btn-success"
                style="float: right;">
                <span>Crear PDF</span>
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
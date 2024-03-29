@section('title', __('Categoria'))
<div class="container-fluid p-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center"><b>Reporte Juegos por Categoria</b></h2>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col">
            <a href="{{ route('descargarPDF-Cat')}}" target="_blank" class="btn btn-success"
                style="float: right;">
                <span>Crear PDF</span>
            </a>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-6 ">
            <table class="table table-hover table-success">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Juego</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videojuegos as $row) <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->Categoria}}</td>
                        <td>{{$row->nombre}}</td>
                        @endforeach
                        </tr>
                        <tr class="table-secondary">
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('js')
<script></script>
@stop
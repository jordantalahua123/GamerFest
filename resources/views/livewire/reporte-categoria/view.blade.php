@section('title', __('Categoria'))
<div class="container-fluid p-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center"><b>Reporte Juegos por Categoria</b></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3">
            <select wire:model="categoria" name="categoria" id="select" class="form-control">
                <option value="1">Seleccione una Opcion </option>
                @foreach($categoriajuegos as $id=>$nombre)
                <option value="{{$id}}">{{$nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-1">
            <button wire:click.prevent="ListarJuegos({{$categoria}})" class="btn btn-info">Generar</button>
        </div>
        <div class="col">
            <a href="{{ route('descargarPDF-Cat',['categoriajuegos' => $categoria])}}" target="_blank" class="btn btn-success"
                style="float: right;">
                <span>Exportar</span>
                <i class="fas fa-download p-1"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <div class="col-6">
            @if($list_cat)
            <table class="table table-hover table-success">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Nombre Categoria</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0 ; $i < count($list_cat) ; $i++) <tr>
                        <td>{{$list_cat[$i]['id']}}</td>
                        <td>{{$list_cat[$i]['nombre']}}</td>
                        <td>{{$list_cat[$i]['descripcion']}}</td>
                        </tr>
                        @endfor
                        <tr class="table-secondary">
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>

@section('js')
<script></script>
@stop
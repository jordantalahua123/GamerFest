<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>PDF Horarios</title>
</head>

<body style="background-color: white;">
    <div class="container">
        <span class="d-block text-center mt-4 mb-4" style="font-size: 24px;"><b>Reporte videojuegos</b></span>
        <div class="row justify-content-end">
            <div class="col-6">
                <span><b>Fecha: </b>{{ date('Y-m-d') }}</span>
            </div>
        </div>
        <div class="pt-5">
            <div class="table-responsive table-success">
                <table class="table table-bordered table-sm">
                    <thead class="thead">
                        <tr>
                            <td>#</td>
                            <th>Categorias</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videojuegos as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->categorias_id }}</td>
                            <td>{{ $row->nombre }}</td>
                            <td>{{ $row->precio }}</td>
                            <td>{{ $row->descripcion }}</td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
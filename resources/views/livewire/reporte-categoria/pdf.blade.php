<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
   <title>PDF</title>
</head>

<body style="background-color: white;">
   <div class="container">
      <span class="d-block text-center mt-4 mb-4" style="font-size: 24px;"><b>Reporte Videojuegos por Categoria</b></span>
         <div class="row justify-content-end">
            <div class="col-6">
               <span><b>Fecha: </b>{{date('Y-m-d')}}</span>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-6">
               <span style="font-size: 16px;"><b>Categoria consultada: </b> -
                  <small>{{$categoria_des}}</small></span>
            </div>
         </div>
      <div class="pt-4">
            @if($lista)
            <table class="table table-hover table-success">
               <thead>
                  <tr class="">
                        <th scope="col">Nº</th>
                        <th scope="col">Nombre Categoria</th>
                        <th scope="col">Descripcion</th>
                  </tr>
               </thead>
               <tbody>
                  @for($i = 0 ; $i < count($lista) ; $i++) <tr>
                        <td>{{$lista[$i]['id']}}</td>
                        <td>{{$lista[$i]['nombre']}}</td>
                        <td>{{$lista[$i]['descripcion']}}</td>
                        </tr>
                        @endfor
               </tbody>
            </table>
            @endif
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
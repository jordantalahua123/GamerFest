
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
      <span class="d-block text-center mt-4 mb-4" style="font-size: 24px;"><b>Reporte Inscripciones Grupales</b></span>
         <div class="row justify-content-end">
            <div class="col-6">
               <span><b>Fecha: </b>{{date('Y-m-d')}}</span>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-6">
               <span style="font-size: 16px;"><b>Inscripciones del año</b> -
                  <small>{{$anio}}</small></span>
            </div>
         </div>
         <div class="pt-5">
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
</body>
</html>

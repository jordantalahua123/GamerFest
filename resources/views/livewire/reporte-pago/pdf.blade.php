
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
      <span class="d-block text-center mt-4 mb-4" style="font-size: 24px;"><b>Reporte de pagos</b></span>
         <div class="row justify-content-end">
            <div class="col-6">
               <span><b>Fecha: </b>{{date('Y-m-d')}}</span>
            </div>
         </div>
         <div class="row justify-content-center pt-5">
            <div class="col-6" style="margin-left:130px;">
               <table class="table table-hover table-success">
                  <thead>
                     <tr>
                           <th scope="col">ID</th>
                           <th scope="col">Monto pagado</th>
                           <th scope="col">Fecha del pago</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($pagos as $row) <tr>
                           <td>{{$row->id}}</td>
                           <td>{{$row->monto}}</td>
                           <td>{{$row->fecha}}</td>
                           @endforeach
                           </tr>
                           <tr class="table-secondary">
                  </tbody>
               </table>
            </div>
         </div>
   </div>
</body>
</html>

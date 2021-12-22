
@extends('administrador.layaut.layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Bitacora </h4><hr>
  <div class="table-responsive">

   <table class=" table table-striped" id="user" style="line-height: 95%" >         <thead>
           
          <tr>
      
            <th>ID</th>
            <th>Usuario</th>
            <th>Accion</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody >
          @foreach($bitacora as $error)
            <tr>
             <td>{{$error->id}}</td>
             <td>{{$error->usuario}}</td>
             <td>{{$error->accion}}</td>
             <td>{{$error->fecha}}</td>
           </tr>
          @endforeach
         </tbody>
     </table>
     {{$bitacora->links("vendor.pagination.simple-default") }}
    </div>
  
  </div>
 
@endsection



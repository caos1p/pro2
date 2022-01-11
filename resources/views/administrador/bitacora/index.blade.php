
@extends('administrador.layaut.layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Bitacora </h4><hr>
  <div class="table-responsive">

   <table class=" table table-striped" id="user" style="line-height: 95%" >         <thead>
    <form class="d-flex">
      <div class="row" >
        <div class="col 6" style="margin: 1%;">
      <input id="buscarpaciente" class="form-control me-2" name="buscarpaciente" type="date" placeholder="Buscar por fecha" aria-label="Search">
    </div>
    <div class="col 6" >
      <button  class="btn btn-outline-success" type="submit">Buscar</button>
    </div>
  </div>
    </form>    
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
  <script>
    $(function () {
    $('#buscarpaciente').autocomplete({
      source: function (request , response) {
      $.ajax({
       
        url: "{{route('buscador.bitacora')}}",
        dataType:"json",
        data: {
          term: request.term
        },
        success: function(data){
          response(data);
        }
      });
    }
      
   });
   });
   </script>
@endsection



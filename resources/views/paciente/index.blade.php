
@extends('layaut')

@section('contenido')
   
  <div class="container">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Paciente </h4><hr>
  <div class="table-responsive">

   <table class=" table table-striped" id="user" style="line-height: 95%" >
  
      <form class="d-flex">
        <div class="row" >
          <div class="col 6" style="margin: 1%;">
        <input id="buscarpaciente" class="form-control me-2" name="buscarpaciente" type="number" placeholder="Buscar por ci" aria-label="Search">
      </div>
      <div class="col 6" >
        <button  class="btn btn-outline-success" type="submit">Buscar</button>
      </div>
    </div>
      </form>
   
         <thead>
           
          <tr style="color: black">
      
            
            <th>NOMBRE</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>CI</th>
            <th>Telefono</th>
            <th>EMAIL</th>
            <th>Genero</th>
            <th>Fecha de nacimiento</th>
            <th>Direccion</th>
            <th>Pais</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody >
          @foreach($paciente as $error)
            <tr>
             
             <td>{{$error->nombre}}</td>
             <td>{{$error->apellidopaterno}}</td>
             <td>{{$error->apellidomaterno}}</td>
             <td>{{$error->ci}}</td>
             <td>{{$error->telefono}}</td>
             <td>{{$error->email}}</td>
             <td>{{$error->genero}}</td>
             <td>{{$error->fechadenacimiento}}</td>
             <td>{{$error->direccion}}</td>
             <td>{{$error->pais}}</td>
          
             <td style="padding: 0%">         
              <a class="btn btn-sm  btn-primary" href="{{route('usuario.show',[$error->id])}}">Historial</a>
                        
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
     {{$paciente->links("vendor.pagination.simple-default") }}

    </div>
  
  </div>
  <script>
    $(function () {
    $('#buscarpaciente').autocomplete({
      source: function (request , response) {
      $.ajax({
       
        url: "{{route('buscador.paciente')}}",
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


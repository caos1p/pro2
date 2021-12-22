
@extends('usuario.layaut.layaut')

@section('contenido')
   <br>
  <div class="container">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Paciente </h4>
  <div class="table">

   <table class=" table table-striped" id="user" >
  
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
   
         <thead style="line-height: 90%;" > 
           
          <tr style="color: black">
      
            
            <th>NOMBRE</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>CI</th>
            <th>Telefono</th>
            <th>EMAIL</th>
            <th>Genero</th>
          
          </tr>
        </thead>
        <tbody style="line-height: 0pt;" >
          @foreach($paciente as $error)
            <tr>
             
             <td>{{$error->nombre}}</td>
             <td>{{$error->apellidopaterno}}</td>
             <td>{{$error->apellidomaterno}}</td>
             <td>{{$error->ci}}</td>
             <td>{{$error->telefono}}</td>
             <td>{{$error->email}}</td>
             <td>{{$error->genero}}</td>
     
       

             <td style="padding: 0vmin 1%">
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalVer{{$error->id}}">
                Ver
                </button>
   
                <!-- Modal -->
                <div class="modal fade" id="exampleModalVer{{$error->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div  class="modal-dialog modal-lg">
                  <div class="modal-content">
                   <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 25px;color: red"> Datos Personales</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                 <div class="modal-body" >
                  <div class="container-fluid" style="size: 18px">
                   
             <div class="row">
                 <div class="col 6">
                     <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px" class="">Nombre :</p>
                 </div>
                 <div class="col 6 ">
                     <p class="secondary-text-color">{{$error->nombre}}</p>
                 </div>
                 <div class="col 6">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Ci:</p>
                 </div>
                <div class="col 6">
                  <p class="secondary-text-color">{{$error->ci}}</p>
                </div> </div><br>
                <div class="row">
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px"> Apellido Paterno:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->apellidopaterno}}</p>
                </div>
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Apellido Materno:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->apellidomaterno}}</p>
                </div> </div><br>
                <div class="row">
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Telefono:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->telefono}}</p>

                </div>
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Email:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->email}}</p>
                </div> </div><br>
                <div class="row">
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">F.Nacimiento:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->fechadenacimiento}}</p>
                </div>
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Direccion:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->direccion }}</p>
                </div> </div><br>
                <div class="row">
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Pais:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->pais}}</p>
                </div>
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Rol:</p>
                </div>

                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->usuario->rol->nombre}}</p>
                
                </div> </div><br>
               
              </div>
     
  </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>   
         </div>
       </div>
     </div>
   </div>
          
  </td>
             <td style="padding: 3pt ">
              <a class="btn btn-sm" style="background-color: rgb(65, 65, 128);color: white" href="{{route('historial.showdiagnostico',[$error->citamedica[0]->id])}}">Historial</a>                         
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


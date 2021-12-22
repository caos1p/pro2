
@extends('administrador.layaut.layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Medico </h4><hr>
    @if(session('messages'))
    <div class="alert alert-success" id="alert">
        {{ session('messages') }}
    </div>
@endif
  <div class="table-responsive">
    <a  class="btn btn-primary" style="background-color:  rgb(3, 34, 15)" role="button" href="{{route('personal.create')}}">Nuevo</a>

   <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
         <thead>
           
          <tr style="color: black">
      
            <th>Id</th>
            <th>Nombre</th>
            <th>Ci</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
        
            <th>Fecha de nacimiento</th>
            <th>Direccion</th>
            <th>Pais</th>
    

            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody >
          @foreach($personal as $error)
            <tr>
             <td>{{$error->id}}</td>
             
             <td>{{$error->nombre}}</td>
             <td>{{$error->ci}}</td>
             <td>{{$error->apellidopaterno}}</td>
             <td>{{$error->apellidomaterno}}</td>
             <td>{{$error->telefono}}</td>
          
             <td>{{$error->fechadenacimiento}}</td>
             <td>{{$error->direccion}}</td>
             <td>{{$error->pais}}</td>
     

          
          
             <td style="padding: 5pt 0%">
              
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
                <div class="row">
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Especialidad:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->especialidad->nombre}}</p>
                
                </div>
                <div class="col s12 m5">
                  <p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 18px">Turno:</p>
                </div>
                <div class="col s8 offset-s2 m7">
                  <p class="secondary-text-color">{{$error->horario->turno}}</p>
                
                </div>
              </div>   
              </div>
     
  </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>   
         </div>
       </div>
     </div>
   </div>
          
  </td>

          
   <td  style="padding: 5pt 0%">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$error->id}}">
                Eliminar
                </button>
   
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$error->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">
                   <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                 <div class="modal-body">
               <p style="line-height: 20pt">Deseas eliminar el registro: {{$error->apellidopaterno}} {{$error->nombre}}. Se eliminara su usuario correspondiente?</p>
                 </div>
         <div class="modal-footer">
           <a class="btn btn-sm btn-danger" href="{{route('personal.destroy',[$error->id])}}">Eliminar</a> 
   
         </div>
       </div>
     </div>
   </div>
              
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
    </div>
  
  </div>
 
@endsection


<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script>
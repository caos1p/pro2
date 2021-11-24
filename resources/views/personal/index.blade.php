
@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Medico </h4><hr>
  <div class="table-responsive">
    <a  class="btn btn-primary" style="background-color:  rgb(3, 34, 15)" role="button" href="{{route('personal.create')}}">Nuevo</a>

   <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
         <thead>
           
          <tr style="color: black">
      
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CI</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>EMAIL</th>
            <th>Fecha de nacimiento</th>
            <th>Direccion</th>
            <th>Pais</th>
            <th>Rol</th>
            <th>Especialidad</th>
            <th>Horario</th>

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
             <td>{{$error->email}}</td>
             <td>{{$error->fechadenacimiento}}</td>
             <td>{{$error->direccion}}</td>
             <td>{{$error->pais}}</td>
             <td>{{$error->usuario->rol->nombre}}</td>
             <td>{{$error->especialidad->nombre}}</td>
             <td>{{$error->horario->turno}}</td>

          
          
             <td  style="padding: 0%">
              
           
              <a class="btn btn-sm btn-outline-secondary" href="{{route('personal.destroy',[$error->id])}}">eliminar</a>
         
              
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
    </div>
  
  </div>
 
@endsection



@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Paciente </h4><hr>
  <div class="table-responsive">
   <table class=" table table-striped" id="user" >
         <thead>
           
          <tr>
      
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CI</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
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
             <td>{{$error->id}}</td>
             <td>{{$error->ci}}</td>
             <td>{{$error->name}}</td>
             <td>{{$error->apellidopaterno}}</td>
             <td>{{$error->apellidomaterno}}</td>
             <td>{{$error->telefono}}</td>
             <td>{{$error->email}}</td>
             <td>{{$error->genero}}</td>
             <td>{{$error->fechadenacimiento}}</td>
             <td>{{$error->direccion}}</td>
             <td>{{$error->pais}}</td>
          
          
             <td>
           
              <a href="{{route('usuario.show',[$error->id])}}">ver</a>
          
              
          
              <a href="{{route('usuario.edit',[$error->id])}}">editar</a>
              
           
              <a href="{{route('usuario.destroy',[$error->id])}}">eliminar</a>
         
              
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
    </div>
  
  </div>
 
@endsection



@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  USUARIO </h4><hr>
  <div class="table-responsive">
   <table class=" table table-striped" id="user" >
         <thead>
           
          <tr>
      
            <th>ID</th>
            <th>NOMBRE</th>
        
            <th>EMAIL</th>
           
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody >
          @foreach($errors as $error)
            <tr>
             <td>{{$error->id}}</td>
             <td>{{$error->name}}</td>
          
             <td>{{$error->email}}</td>
          
          
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


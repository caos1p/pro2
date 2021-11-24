
@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Rol </h4><hr>

  
  <div class="table-responsive">
    <a  class="btn btn-primary" style="background-color:  rgb(3, 34, 15)" role="button" href="{{route('rol.create')}}">Nuevo</a>

   <table class=" table table-striped" id="user" style="line-height: 65%" >
         <thead>
           
          <tr>
          
            <th>NOMBRE</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody >
          @foreach($roles as $rol)
            <tr>
         
             <td>{{$rol->nombre}}</td>
          
             <td>         
              <a href="">ver</a>
              <a href="">editar</a>
              <a href="{{route('rol.destroy',[$rol->id])}}">eliminar</a> 
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
     {{$roles->links("vendor.pagination.simple-default") }}

    </div>
  
  </div>
 
@endsection


@extends('usuario.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de edicion</h3><hr>
   <div class="container-sm">
<form action="{{route('usuario.update',[$usuario->id])}}" method="POST">
    @csrf
    @method("put")


                <div class="row">
                
                   
                  <div class="col-6">
                    <label for="name" class="form-label">Nombre</label>
                      <input id="name" class="form-control" type="text" name="name" value="{{$usuario->name}}" readonly>
                  </div>
    
                  <div class="col-6">
                    <label for="correo" class="form-label">Correo   </label>
                   <input id="email" type="email" class="form-control" name="email" value= "{{$usuario->email}}" required>
                
                  </div>
                </div>
                <br>
                <div class="row">

                  <div class="col-6">
                    <label for="password"  class="form-label">Contraseña   </label>
                 <input placeholder=" ingrese su contraseña" id="password "type="password" class="form-control" name="password" required>
              
                </div>

                <div class="col-6">
                  <label for="password"  class="form-label">Rol   </label>
                  <input id="rol "type="text" class="form-control" name="rol" value="{{$usuario->rol->nombre}}"readonly>
              
                 </div>
    
                
                  </div>
                  <br>
               <div class="card-action right-align">
                <button type="submit" class="btn btn-primary btn-lg" onclick="showProgress()">Guardar</button>
               
      
      </div>  
     </form>
    </div>
   
    @endsection
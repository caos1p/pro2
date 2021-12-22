@extends('administrador.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de edicion</h3>
   <div class="card">
        <div style="margin: 5% 20%"  class="row">
<form action="{{route('personal.update',[$personal->id])}}" method="POST">
    @csrf
    @method("put")


                <div class="row">
                
                   
                  <div class="input-field col s6">
                      <input type="text" name="nombre" value="{{$personal->nombre}}">
                      <label for="nombre">Nombre    </label>
                      @error('nombre')
                       <span class="error">{{$message}}</span>
                      @enderror
               
                  </div>
    
                  <div class="input-field col s6">
                   <input id="correo "type="email" class="validate" name="email" >
                   <label for="correo">Correo   </label>
                   @error('email')
                   <span class="error">{{$message}}</span>
                   @enderror
                  </div>
                </div>
                <div class="row">
              
                  <div class="input-field col s12">
                 <input id="password "type="password" class="validate" name="password" >
                 <label for="password">Contraseña   </label>
                  @error('password')
                  <span class="error">{{$message}}</span>
                  @enderror
                </div>
                <div class="input-field col s12">
                  <input id="password "type="password" class="validate" name="password" >
                  <label for="password">Contraseña   </label>
                   @error('password')
                   <span class="error">{{$message}}</span>
                   @enderror
                 </div>
    
            
                  </div>
               <div class="card-action right-align">
                <button type="submit" class="waves-affect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
               
      
      </div>  
     </form>
    </div>
    </div>
    @endsection
@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3>
   <div class="card">
        <div style="margin: 5% 20%"  class="row">
          <form name="hola" class="col s12" action="{{route('usuariostore')}}" method="POST">
            @csrf
            <div class="row">
            
        
              <input type="hidden" name="id" value="{{$usuario}}" >
              <div class="input-field col s6">
                  <input type="text" name="nombre" value="{{$nombre}}" disabled>
                  <label for="nombre">Nombre    </label>
                  @error('nombre')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>

              <div class="input-field col s6">
               <input  id="buscarci "type="number"  name="buscarci" value="{{$email}}"  >
               <label for="correo">ci   </label>
               @error('email')
               <span class="error">{{$message}}</span>
               @enderror
              </div>
            </div>
            <div class="row">
          
              <div class="input-field col s12">
             <input required id="password "type="password" class="validate" name="password" value="{{old('password')}}">
             <label for="password">Contraseña   </label>
              @error('password')
              <span class="error">{{$message}}</span>
              @enderror
            </div>

              <div class="input-field col s12">
              <select name="rol_id" >
                  <option value="" disable selected>seleccione una opcion</option>
                  @foreach($rol as $ro)
                  <option value="{{$ro->id}}">{{$ro->nombrederol}}</option>
    
                  @endforeach
              </select>
                  <label>Seleccione un tipo de rol:</label>
                </div>
              </div>
           <div class="card-action right-align">
            <button type="submit" class="waves-affect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
           
  
  </div>  
 </form>
</div>
</div>

@endsection
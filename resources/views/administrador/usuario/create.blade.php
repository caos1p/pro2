@extends('administrador.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('usuario.store')}}" method="POST">
            @csrf
           
            
        
               
              <div class="col-md-6">
                <label for="nombre">Nombre    </label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
               
                  @error('nombre')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>

              <div class="col-md-6">
                <label for="correo">Correo   </label>
               <input id="correo " class="form-control"  type="email"  name="email" value= "{{old('email')}}">          
               @error('email')
               <span class="error">{{$message}}</span>
               @enderror
              </div>
    
          
              <div class="col-md-12">
                <label for="password">Contraseña   </label>
             <input id="password "type="password" class="form-control" name="password" value="{{old('password')}}">
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
                
           <div class="card-action right-align">
            <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
           
  
  </div>  
 </form>
</div>


@endsection


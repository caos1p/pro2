@extends('administrador.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3><hr>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('personal.store')}}" method="POST">
            @csrf
           
            
        
               
              <div class="col-md-6">
                <label for="nombre">Nombre    </label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
               
                  @error('nombre')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="ci">CI    </label>
                  <input type="text" class="form-control" name="ci" value="{{old('ci')}}">
               
                  @error('ci')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="apellidopaterno">Apellido paterno    </label>
                  <input type="text" class="form-control" name="apellidopaterno" value="{{old('apellidopaterno')}}">
               
                  @error('apellidopaterno')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="apellidomaterno">Apellido materno    </label>
                  <input type="text" class="form-control" name="apellidomaterno" value="{{old('apellidomaterno')}}">
               
                  @error('apellidomaterno')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="telefono">Telefono    </label>
                  <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
               
                  @error('telefono')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="genero">Genero    </label>
                  <input type="text" class="form-control" name="genero" value="{{old('genero')}}">
               
                  @error('genero')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="correo">Email   </label>
               <input id="correo " class="form-control"  type="email"  name="email" value= "{{old('email')}}">          
               @error('email')
               <span class="error">{{$message}}</span>
               @enderror
              </div>
              <div class="col-md-6">
                <label for="fechadenacimiento">Fecha de Nacimiento    </label>
                  <input type="date" id="a" class="form-control" name="fechadenacimiento" value="{{old('fechadenacimiento')}}">
               
                  @error('fechadenacimiento')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <h4>direccion</h4>
              <div class="col-md-6">
                <label for="direccion">Direccion    </label>
                  <input type="text" class="form-control" name="direccion" value="{{old('direccion')}}">
               
                  @error('direccion')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="pais">Pais    </label>
                  <input type="text" class="form-control" name="pais" value="{{old('pais')}}">
               
                  @error('pais')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
               <h4>contraseña</h4>
              <div class="col-md-6">
                <label for="contraseña">Contraseña   </label>
               <input id="contraseña " class="form-control"  name="contraseña" value= "{{old('contraseña')}}">          
               @error('contraseña')
               <span class="error">{{$message}}</span>
               @enderror
              </div>

            
                  <h4>Seleccionar Turno</h4>

                  <div class="input-field col s6">
                    <select class="form-select" id="validationCustom04" required name="horario_id" >
                        <option value="" disable selected>Escoge una turno...</option>
                        @foreach($horario as $ro)
                        <option value="{{$ro->id}}">{{$ro->turno}}</option>
          
                        @endforeach
                    </select>
                 
  
                        <label>Seleccione un tipo de turno:</label>
                 
                    </div>

                  <h4>Seleccionar Especialidad</h4>

                <div class="input-field col s6">
                  <select class="form-select" id="validationCustom04" required name="especialidad_id" >
                      <option value="" disable selected>Escoge una especialidad...</option>
                      @foreach($especial as $ro)
                      <option value="{{$ro->id}}">{{$ro->nombre}}</option>
        
                      @endforeach
                  </select>
               

                      <label>Seleccione un tipo de especialidad:</label>
               
                  </div>
                  
                  <div class="input-field col s6">
                    <select class="form-select" id="validationCustom04" required  name="rol_id">
                      <option selected disabled value="">Escoge un rol...</option>
                      @foreach($rol as $ro)
                      <option value="{{$ro->id}}">{{$ro->nombre}}</option>
                
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

<script>
 $( function() {
    $( "#a" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
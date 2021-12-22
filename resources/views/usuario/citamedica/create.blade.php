@extends('usuario.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('citamedica.store',[$id])}}" method="POST">
            @csrf
           
            
              
            <div class="col-md-6">
              <label for="motivo">Motivo    </label>
                <input id="motivo" type="text" class="form-control" name="motivo" value="{{old('motivo')}}">
             
                @error('titulo')
                 <span class="error">{{$message}}</span>
                @enderror
         
            </div>
               
              <div class="col-md-6">
                <label for="fecha">Fecha    </label>
                  <input id="a" type="date" class="form-control" name="fecha" value="{{old('fecha')}}">
               
                  @error('fecha')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
           
       
                <div class="md-form md-outline">
                <input type="time" id="hora" class="form-control" placeholder="Select time" name="hora" value= "{{old('hora')}}">
                <label for="hora">Hora   </label>
                </div>
         
    
    
                <div class="input-field col s6">
                  <select class="form-select" id="validationCustom04" required  name="especialidad_id">
                    <option selected disabled value="">Escoge una especialidad...</option>
                    @foreach($especial as $ro)
                    <option value="{{$ro->id}}">{{$ro->nombre}}</option>
              
                    @endforeach
                </select>
                <label>Seleccione una especialidad:</label>

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
  

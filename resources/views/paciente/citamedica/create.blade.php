@extends('paciente.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3><hr>
@if(session('message'))
<div class="alert alert-warning" id="alert" style="text-align: center">
    {{ session('message') }}
</div>
@endif
<input style="text-align: center;border: 0" id="a" type="text" class="form-control" name="a" value="Horarios no disponibles:{{$fecha}}" readonly>

   <div class="container-sm">
                 
    <form  class="col s12" action="{{route('citamedica.create',[$id])}}" method="GET">
           
      @csrf
    
      <div class="row" >
        <div class="col-md-4">
          <label for="fecha">Fecha    </label>
            <input id="fecha" type="date" class="form-control" name="fecha" value="{{$hora}}" required>           
        </div>
        <div class="input-field col s8" style="padding: 1% 0%">
          <button  type="submit"class="btn btn-danger" style="background: rgb(85, 24, 24)"   onclick="showProgress()">mostrar horarios no disponibles</button>
      </div> 
    </div>
  </form>

          <form class="row g-3" action="{{route('citamedica.store',[$id])}}" method="POST">
            @csrf
              <label>Seleccione una horario:</label>
                <div class="col 1">
                  <select class="form-select" id="validationCustom04" required  name="hora" style="width: 10%">
                    <option selected disabled value=""></option>
                    @foreach($fechas as $fecha){
                        <option value="{{$fecha->format(" H:i")}}">{{$fecha->format(" H:i")}}</option>  
                }@endforeach
                  </select>
                </div>

                <input id="fecha" type="date" class="form-control" name="fecha1" value="{{$hora}}" hidden>           

           <div class="card-action right-align">
            <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
           </div>  

 </form>
</div>


@endsection




    
<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script> 
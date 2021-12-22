@extends('administrador.layaut.layaut')


@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3><hr>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('horario.store')}}" method="POST">
            @csrf
           
            

              <div class="col-md-4">
              <div class="md-form md-outline">
                <input type="time" id="hora" class="form-control" placeholder="Select time" name="horaentrada" value= "{{old('horaentrada')}}">
                <label for="hora">Hora Ingreso   </label>
                </div>
              </div>
              <div class="col-md-4">

                <div class="md-form md-outline">
                  <input type="time" id="horadesalida" class="form-control" placeholder="Select time" name="horadesalida" value= "{{old('horadesalida')}}">
                  <label for="horadesalida">Hora Salida  </label>
                  </div>
                </div>

                  <div class="col-md-4">
                    <label for="turno">Turno   </label>
                   <input id="turno " class="form-control"  name="turno" value= "{{old('turno')}}">          
                   @error('turno')
                   <span class="error">{{$message}}</span>
                   @enderror
                  </div>
                 


           <div class="card-action right-align">
            <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
           
  
  </div>  
 </form>
</div>


@endsection



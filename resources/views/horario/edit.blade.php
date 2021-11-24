@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de edicion</h3><hr>
   <div class="container-sm">
<form class="row g-3"   action="{{route('horario.update',[$horario->id])}}" method="POST">
    @csrf
    @method("put")


               
                
                   
    <div class="col-md-6">
      <label for="hora">Turno   </label>

      <input required type="text" name="turno" class="form-control" value="{{$horario->turno}}">
                      @error('nombre')
                       <span class="error">{{$message}}</span>
                      @enderror
               
                  </div>
    
                  <div class="col-md-6">
                    <label for="descripcion">Hora de Ingreso   </label>
                    <input type="time" id="hora" class="form-control" placeholder="Select time" name="horaentrada" value= "{{$horario->horaentrada}}">
                   @error('descripcion')
                   <span class="error">{{$message}}</span>
                   @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="descripcion">Hora de Salida   </label>
                    <input type="time" id="hora" class="form-control" placeholder="Select time" name="horadesalida" value= "{{$horario->horadesalida}}">
                   @error('descripcion')
                   <span class="error">{{$message}}</span>
                   @enderror
                  </div>
                
      
               <div class="card-action right-align">
                <button type="submit" class="btn btn-lg btn-primary" onclick="showProgress()">Guardar</button>
              </div>  
     </form>
    </div>
    </div>
    @endsection
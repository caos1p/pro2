@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de edicion</h3><hr>
   <div class="container-sm">
<form class="row g-3"   action="{{route('rol.update',[$rol->id])}}" method="POST">
    @csrf
    @method("put")


               
                
                   
    <div class="col-md-6">
      <label for="nombre">Nombre    </label>
                      <input required type="text" name="nombre" class="form-control" value="{{$rol->nombre}}">
                      @error('nombre')
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
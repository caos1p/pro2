@extends('administrador.layaut.layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3><hr>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('especialidad.store')}}" method="POST">
            @csrf
           
            
        
               
              <div class="col-md-6">
                <label for="nombre">Nombre    </label>
                  <input required type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
               
                  @error('nombre')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>
              <div class="col-md-6">
                <label for="descripcion">Descripcion    </label>
                  <input required type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
               
                  @error('descripcion')
                   <span class="error">{{$message}}</span>
                  @enderror
           
              </div>

           <div class="card-action right-align">
            <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
           
  
  </div>  
 </form>
</div>


@endsection


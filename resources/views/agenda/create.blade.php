@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('agenda.store')}}" method="POST">
            @csrf
           
            
              
            <div class="col-md-6">
              <label for="titulo">Titulo    </label>
                <input id="titulo" type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
             
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
                <input type="time" id="hora" class="form-control" placeholder="Select time" name="hora" value= "">
                <label for="hora">Hora   </label>
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
  
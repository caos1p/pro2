@extends('layaut')

@section('contenido')


<div class="card" style="margin: 5% 25%">
  <h4 style="margin: 2%;text-align: center;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-weight: 800">Registro de cliente</h4>
        <div class="row" style="" >      
            <form  class="col s12" action="{{route('proforma.create')}}" method="GET">
           
              @csrf
             <div class="row">
              <div class="row">
                <div class="input-field col s6"   >
               
                  <input placeholder="buscar por ci" size="45" style="padding: 5px;margin: 2% 2%" type="number" min="1" id="buscarcliente" class="browser-default" name="buscarcliente" value="{{$ci}}" >
                </div>
                <div class="input-field col s6" style="">
                  <button  type="submit"class="btn btn-danger" style="background: rgb(85, 24, 24)"   onclick="showProgress()">buscar</button>
              </div> 
            </div>
            <div class="row">
                  <div class="input-field col s4" style="">
                    <span style="color: rgb(134, 124, 124)"> nombre
                  <input style="margin: 0% 2%"   type="text" id="" class="" value="{{$nombre}}" disabled >
                </span>
                </div>
              
          
                <div class="input-field col s4"  style="">
                  <span style="color: rgb(134, 124, 124)"> Apellido
                  <input   style=""  type="text" id="" class=""  value="{{$apellido}}" disabled >
                </span>
                </div>
           
                  <div class="input-field col s4">
                    <span style="color: rgb(134, 124, 124)"> Direccion
                  <input  style=""   type="text" id="" class="" value="{{$direccion}}" disabled >
                </span>
                </div>    
              </div>
            </div>
         </form>
  
        </div>
   <div class="row" style="margin: 0%" >         
    <form action="{{route('proforma.store')}}" method="post">
     @csrf
    
     <div class="row" >
      <div class="input-field col s6">
       <input id="fecha" type="text"  class="datepicker" name="fecha" required value="{{old('fecha')}}">
       <label for="fecha">Fecha :</label>
      </div>
    

    <div class="input-field col s6"> 
  <select class="browser-default" name="tipo">
    <option value="" disabled selected>seleccione una opcion</option>
    <option value="nota de venta">nota de venta</option>
    <option value="factura">factura</option>
  </select></div>

       <input   type="hidden" id="" class="" name="buscarclient" value="{{$ci}}" required >
       <div style="width: 100%  "  class="input-field col s6" >
         <button style="background-color: rgb(3, 34, 15)" type="submit" class="waves-effect waves-light btn" onclick="showProgress()">Guardar</button>
     
         <a style="margin: 0% 0% 0% 50%" class="waves-effect waves-light btn modal-trigger" href="#modal2">NUEVO</a>
        </div>
     </div> 
    </form>
  
  </div>
     
     
    
      <div id="modal2" class="modal">
        <h3 style="color: red; margin: 2%"> Registro de cliente</h3>
        <div class="modal-content">
        
            <form id="form1" method="POST" >
                @csrf
        
                 <div class="row">    
            <div class="input-field col s4">
        <p>
           <label for="nombre">nombre;
               <input type="text" name="nombre" value="{{old('nombre')}}">
               @error('nombre')
                <span class="error">{{$message}}</span>
               @enderror
           </label>
        </p>
    </div>
        <div class="input-field col s4">
        <p>
            <label for="apellido">apellido;
                <input type="text" name="apellido" value="{{old('apellido')}}">
                @error('apellido')
                 <span class="error">{{$message}}</span>
                @enderror
            </label>
         </p>
        </div>
    
            <div class="input-field col s4">
         <p>
            <label for="ci">ci;
                <input type="text" name="ci" value="{{old('ci')}}">
                @error('ci')
                 <span class="error">{{$message}}</span>
                @enderror
            </label>
         </p>
        </div>
      </div>
      <div class="row">    
         <div class="input-field col s4">
         <p>
            <label for="direccion">direccion;
                <input type="text" name="direccion" value="{{old('direccion')}}">
                @error('direccion')
                 <span class="error">{{$message}}</span>
                @enderror
            </label>
         </p>
        </div>
     
            <div class="input-field col s4">
        <p>
            <label for="telefono">telefono;
                <input type="text" name="telefono" value="{{old('telefono')}}">
                @error('telefono')
                 <span class="error">{{$message}}</span>
                @enderror
            </label>
         </p>
          </div>
      
      
         <div class="input-field col s4">
        <p>
           <label for="email">Email:
            <input type="email" name="email" class="validate" value="{{old('email')}}">
            @error('email')
             <span class="error">{{$message}}</span>
             @enderror
           </label>
        </p>
    </div>
</div>
            
                <div class="card-action right-align">
                    <button type="submit" class="waves-affect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                </div>
        
             </form>
         
        </div>
        <div class="modal-footer">
       
        </div>
   
      </div>
    </div>
<script>
  $(function () {
  $('#buscarcliente').autocomplete({
    source: function (request , response) {
    $.ajax({
     
      url: "{{route('buscadora.proforma')}}",
      dataType:"json",
      data: {
        term: request.term
      },
      success: function(data){
      
        response(data);
      }
    });
  } 
 });
});

 </script>
 <script>
  $(document).ready(function(){   
     $(document).on('submit', '#form1', function() { 

          //Obtenemos datos formulario.
          var data = $(this).serialize(); 

          //AJAX.
          $.ajax({  
             type : 'POST',
             url: "{{route('cliente.store')}}",
             dataType:"json",
             data:  data,

             success:function(data) {  
                 $('#respuesta').html(data).fadeIn();
             }  
  
          });
          window.location.reload();
          alert ("se ha registrado correctamente"); 
          return false;
    });
  });//Fin document.
</script>   




@endsection

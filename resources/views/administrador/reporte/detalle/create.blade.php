@extends('layaut')

@section('contenido')

<div class="container" style="margin: 5% 10%">
      
    <div class="row">
   
        <form action="{{route('detalleproforma.create',[$venta->id])}}" method="get">
                @csrf
        <div class="input-field col s4"   >
          <i class="material-icons prefix">search</i>
          <label  for="buscarprod">Buscar....</label>
          <input   type="text" id="buscarprod" class="autocomplete" name="buscarprod" value="{{$nombre}}">
        </div>
        <div class="input-field col s1" style="">
          <button type="submit" class="waves-effect waves-light btn"  onclick="showProgress()">buscar por nombre</button>
      </div> 
     
          <div class="input-field col s5" style="margin: 1.4% 5%" aria-placeholder="detalle">
          <input   type="text" id="" class="" placeholder="detalle" value="{{$descripcion}}" disabled >
        </div>
      
        
        <div class="input-field col s4" style="margin: 1.4% 3%">
          <input   type="text" id="" class="" placeholder="precio unitario" value="{{$precio_u}}" disabled >
        </div>
    </form>
      </div>
    
        
 
 
           
   <div class="row" style="margin: 0% 3%" >         
      <form action="{{route('detalleproforma.store',[$venta->id])}}" method="post">
       @csrf
      
       <div class="row">    
      
         <div class="input-field col s4">
         
              <input id="cantidad" type="number" min="1" name="cantidad" value="{{old('cantidad')}}">
              <label for="cantidad">cantidad    </label>
              @error('cantidad')
               <span class="error">{{$message}}</span>
              @enderror
       
      </div>
      <input   type="hidden" id="" class="" name="buscarp" value="{{$nombre}}" >
      <input id="cantida" type="hidden" name="cantida" value="{{$cantida}}" >
      <button style="margin: 2%" id="modal" type="submit" class="waves-effect waves-light btn" onclick="showProgress()">Guardar</button> 
         
       </div> 
   </form>  
   <div id="dialog" title="ERROR" style="display: none" >
    <p style="font-size: 35px"> Stock insuficiente :(stock actual= {{$cantida}}) </p>
  </div>
  </div> 
   
<script>


  $(function () {
  
    $( "#modal" ).button().on( "click", function() {
  
      $( "form" ).submit(function( event ) {
        var a =+$('#cantidad').val(); 
      var b =+$('#cantida').val();
        if (a > b){ 
 event.preventDefault();
 $( "#dialog" ).dialog({

resizable: false,
height: "auto",
width: 400,
modal: true,

buttons: {
  "Cerrar": function() {
    window.location.reload();
    $( this ).dialog( "close" );
  },

}

});
}
} );
} );

});

    
   


 </script>
  <script>
      $(function () {
      $('#buscarprod').autocomplete({
        source: function (request , response) {
        $.ajax({
         
          url: "{{route('buscador.proforma')}}",
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
  
   @endsection
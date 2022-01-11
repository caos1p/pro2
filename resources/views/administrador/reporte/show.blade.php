
@extends('layaut')

@section('contenido')
<a class="btn btn-danger" style="background-color: red" href="{{route('proforma.destroy',[$errors->id])}}">CANCELAR</a>

<h4 style="background: rgb(6, 53, 6);color: white;text-align: center">NOTA DE VENTA</h4>


    

    <div class="row" style="font-size: 18px;margin: 0%;line-height: 4%;text-align: center">
      <div class="col s6" style="">
          <p class="primary-text-color secondary-text-style">Nombre :  {{$person->nombre}}</p>
      </div>
    
    <div class="col s6 ">
        <p class="secondary-text-color">Apellido : {{$person->apellido}}</p>
    </div>


 
    <div class="col s6">
      <p class="primary-text-color secondary-text-style">Ci : {{$person->ci}}</p>
  </div>
<div class="col s6">
    <p class="secondary-text-color">Direccion :{{$person->direccion}}</p>
</div>

</div>

<br>

<div class="container-fluid"  style="margin: 0% 10%;" >

  <table class="highlight" style="border-collapse: collapse; border: 1px solid #000;  padding: 0.1em;width: 100%"  >
    <div class="row" style="margin: 0%">
      <div class="col s6">
      <a style="margin: 0%" id="boton" type="button" value="toggle()" style="font-size: 18px" href="{{route('detalleproforma.create',[$errors->id])}}" >REGISTRAR</a>
    </div>
      <div class="col s6">
      <p class="primary-text-color secondary-text-style" style="text-align: right;margin: 0%;font-size: 18px">Total :{{$errors->total}}</p>
    </div>
    </div>  
        <thead style="">
       
          <tr style="font-size: 17px;background-color:  rgb(3, 34, 15);color: white">
          
            <th style="  border: 1px solid #000; "> Producto</th>
            <th style="  border: 1px solid #000;  padding: 0.1em;">Descripcion</th>
            <th style="  border: 1px solid #000; padding: 0.1em;">Precio.U</th>
            <th style="  border: 1px solid #000; padding: 0.1em;">Cantidad</th>
            <th style="  border: 1px solid #000 ;  padding: 0.1em;">Total</th>
            <th style="  border: 1px solid #000 ;  padding: 0.1em;">Eliminar</th>
           
          </tr>
  
        </thead>
        <tbody  >
          @foreach($errors->detalle as $deta )
           <tr style="font-size: 15px ; ">
             <td  style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em; ">{{$deta->producto->nombre}}</td>
             <td  style=" border-collapse: collapse ;  border: 1px solid #000;  padding: 0.3em;  ">{{$deta->producto->descripcion}}</td>
             <td style=" border-collapse: collapse;text-align: center;  border: 1px solid #000;  padding: 0.3em; ">{{$deta->producto->precio_venta}}</td>
             <td  style=" border-collapse: collapse;text-align: center;  border: 1px solid #000 ;  padding: 0.3em;">{{$deta->cantidad}}</td>
             
             <td  style=" border-collapse: collapse;text-align: center;  border: 1px solid #000 ;  padding: 0.3em;">{{$deta->total}}</td>
             <td style=" border-collapse: collapse; text-align: center; border: 1px solid #000 ;  padding: 0.3em; ">     <a href="{{route('detalle.destroy',[$deta->id ,$errors->id])}}">eliminar</a></td>
            
           </tr>
          @endforeach
         </tbody>
       </table>
       <div style="width: 100%;margin: 0%"> <a  id="boton" type="button" value="toggle()" style=" " href="{{route('proforma.index')}}">GUARDAR</a></div>

      </div>
      

  
      <script>
         $(document).ready(function(){ 
         $("#botons").on( "click", function() {	 
                $('#a').toggle();
            
                 });
        
          });
      </script>
      <script>
           $(document).ready(function(){ 
        $("#botone").on( "click", function() {	 
        $("#hola").remove();
      });
    });
      </script>
  @endsection
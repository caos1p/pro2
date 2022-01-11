@extends('layaut')

@section('contenido')

<ul class="tabs tabs-fixed-width tab-demo z-depth-1">
  <li  style="  background-color: rgba(38, 166, 154, 0.2)" class="tab col s3"><a style="color: rgb(15, 14, 14);font-weight: 700" href="{{route('reporte.index1')}}">Reporte De Compra</a></li>
  <li  style="  background-color: rgba(38, 166, 154, 0.2)" class="tab col s3"><a style="color: rgb(15, 14, 14);font-weight: 700" href="{{route('reporte.index')}}">Reporte De Venta</a></li>
  <li  style="  background-color: rgba(166, 132, 38, 0.2);" class="tab col s3"><a style="color: rgb(243, 11, 11);font-weight: 700;font-size: 27px" href="{{route('reporte.index2')}}">Reporte De Servicio</a></li>

</ul>
<h3 style="font-weight: 800;margin: 0% 5%">Reportes de Servicio <hr></h3>

      <div class="row " style="margin: 0% 5%" >
        <div class="col s2 ">
        <form action="{{route('reporte.index2')}}" method="GET" >
       
                 <input required style=""  type="text" id="buscarcargo" class="datepicker" placeholder="fecha inicio..." name="fechainicio"  > 
               
                </div> 
                <div class="col s2">
                  <input required style=""  type="text"  class="datepicker" placeholder="fecha fin..." name="fechafin"  > 
                 </div> 
                 <div class="col s2">
                 <button style="background-color: rgb(28, 32, 30)" type="submit" onclick=""  > <i class="material-icons white-text" >search</i></button>
                </div> 
               
             
          </form> 
        </div>


   <div class="container-fluid" style="margin:1% 5%" > 
    <div class="row" style="">
    <div class="col s11 " style="">
      <a  class="btn btn-primary" style="background-color:  rgb(11, 68, 40)" role="button" href="{{route('reporte.index2')}}">todo</a>
    </div> 
    <div class="col s1" style="" >
    <a  id="botons"class="btn btn-danger"  role="button" value="toggle()" style="background-color:  rgb(4, 100, 4);color: white" href="{{route('imprimirreporte2',[$fechaini,$fechafi])}}">IMPRIMIR</a>
  </div> 
</div>
    <table class="striped" >
      <thead>
        <tr >
          <th style="width: 15%;text-align: center">ID</th>

          <th style="width: 15%;text-align: center">cliente</th>
          <th style="width: 15%;text-align: center">Fecha De Entrega</th>
          <th style="width: 15%;text-align: center">Total</th>
        
    
         
     
        </tr>
      </thead>
      <tbody>
        @foreach( $proforma as $proform )
         <tr>
          <td style="width: 15%;text-align: center">{{$proform->id}}</td>

           <td style="width: 15%;text-align: center">{{$proform->persona->nombre}}</td>
           <td style="width: 15%;text-align: center">{{$proform->fechae}}</td>
           <td style="width: 15%;text-align: center">{{$proform->nota}}</td>     
        </tr>
        @endforeach
       </tbody>
     </table>
     {{$proforma->links("vendor.pagination.simple-default") }}
   
   </div>



@endsection

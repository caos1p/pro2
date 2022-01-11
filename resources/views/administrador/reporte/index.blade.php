@extends('administrador.layaut.layaut')

@section('contenido')



<h3 style="font-weight: 800;margin: 0% 5%">Reporte de Citas Medicas <hr></h3>

      <div class="row " style="margin: 0% 5%" >
        <div class="col s2 ">
        <form action="{{route('reporte.index')}}" method="GET" >
       
                 <input required style=""  type="date" id="buscarcargo" class="datepicker" placeholder="fecha inicio..." name="fechainicio"  > 
               
                </div> 
                <div class="col s2">
                  <input required style=""  type="date"  class="datepicker" placeholder="fecha fin..." name="fechafin"  > 
                 </div> 
                 <div class="col s2">
                 <button  type="submit" class="btn btn-secondary btn-sm" onclick="" >search</i></button>
                </div> 
               
             
          </form> 
        </div>


        <div class="container">
          <div class="row">
    <div class="col s6 " style="">
      <a  class="btn btn-primary" style="background-color:  rgb(11, 68, 40)" role="button" href="{{route('reporte.index')}}">todo</a>
    </div> 
    <div class="col s6" style="text-align: right" >
    <a  id="botons"class="btn btn-danger"  role="button" value="toggle()" style="text-align: left;color: white" href="{{route('imprimirreporte',[$fechaini,$fechafi])}}">IMPRIMIR</a>
  </div> 
</div>
<table class=" table table-striped" id="user" >
  <thead style="line-height: 1%;" > 
           
    <tr style="color: black">
        
          <th style="width: 15%;text-align: center">id</th>
          <th style="width: 15%;text-align: center">Motivo</th>
          <th style="width: 15%;text-align: center">Fecha</th>
        
          <th style="width: 15%;text-align: center">Hora</th>
          <th style="width: 15%;text-align: center">Nombre De Paciente</th>

    
         
     
        </tr>
      </thead>
      <tbody>
        @foreach( $cita as $cit )
         <tr>
      
           <td style="width: 15%;text-align: center">{{$cit->id}}</td>
           <td style="width: 15%;text-align: center">{{$cit->title}}</td>
           <td style="width: 15%;text-align: center">{{$cit->start}}</td>     
           <td style="width: 15%;text-align: center">{{$cit->end}}</td>     

           <td style="width: 15%;text-align: center">{{$cit->paciente->nombre }}{{$cit->paciente->apellidopaterno }}</td>
        </tr>
        @endforeach
       </tbody>
     </table>
     {{$cita->links("vendor.pagination.simple-default") }}
   
   </div>



@endsection

@extends('administrador.layaut.layaut')

@section('contenido')

<div class="container" style="">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  
  <li class="nav-item" role="presentation">
    <button onclick="window.location='/admin/reporte'"  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cita Medica</button>
  </li>


  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Paciente</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
</div>
</div>

<h3 style="font-weight: 800;margin: 0% 5%">Reportes de Pacientes <hr></h3>

<div class="row " style="margin: 0% 5%" >
  <div class="col s2 ">
        <form action="{{route('reporte.index1')}}" method="GET" >
       
                 <input required style=""  type="date" id="buscarcargo" class="datepicker" placeholder="fecha inicio..." name="fechainicio"  > 
               
                </div> 
                <div class="col s2">
                  <input required style=""  type="date"  class="datepicker" placeholder="fecha fin..." name="fechafin"  > 
                 </div> 
                 <div class="col s2">
                 <button style="background-color: rgb(28, 32, 30)" type="submit" onclick=""  > <i class="material-icons white-text" >search</i></button>
                </div> 
               
             
          </form> 
        </div>


        <div class="container">
          <div class="row">
    <div class="col s11 " style="">
      <a  class="btn btn-primary" style="background-color:  rgb(11, 68, 40)" role="button" href="{{route('reporte.index1')}}">todo</a>
    </div> 
    <div class="col s1" style="" >
    <a  id="botons"class="btn btn-danger"  role="button" value="toggle()" style="background-color:  rgb(4, 100, 4);color: white" href="{{route('imprimirreporte1',[$fechaini,$fechafi])}}">IMPRIMIR</a>
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

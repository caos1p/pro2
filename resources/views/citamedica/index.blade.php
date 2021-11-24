
@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >Reunion </h4><hr>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
  
      <li class="nav-item" role="presentation">
        <button onclick="window.location='/agenda'"  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Agenda</button>
      </li>
  
    
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Reunion</button>
      </li>
    
    
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    </div>
 
    <form class="row" style="width: 40%" action="{{route('citamedica.index')}}" method="GET" >
      <div class="col s3">
      <input  class="form-control " name="fecha" type="date" placeholder="Search" aria-label="Search">
    </div>
      <div class="col" style="margin: 0%">
      <button  class="btn btn-outline-success" type="submit">Buscar</button>
    </div>
    </form>
 
  
  <div class="table-responsive">
    
   <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
     
    <thead>
           
      <tr style="color: black">
  
        <th>Motivo</th>
        <th>Reunion</th>
        <th>fecha</th>
        <th>hora</th>
        <th>Nombre</th>
        <th>ACCIONES</th>
        <th>Estado</th>

      </tr>
    </thead>
    <tbody >
      @foreach($agenda as $agen)
        <tr>
         <td>{{$agen->title}}</td>   
         <td style="width: 15%;padding: 0% 1%"> <a class="btn" target="_blank" style="color: blue" href="">Realizar</a>    </td>  
         <td>{{$agen->start}}</td>
         <td>{{$agen->end}}</td>
         <td>{{$agen->paciente->nombre}}</td>
         <td><a class="btn btn-danger btn-sm" style="" href="{{route('historial.showinterrogatorio',[$agen->id])}}">Historial</a>    
         </td> 
          <td><a class="btn btn-danger btn-sm" >Finalizado</a>    
         </td>
      
       </tr>
      @endforeach
     </tbody>
     </table>
     {{$agenda->links("vendor.pagination.simple-default") }}

    </div>
  
  </div>
 
@endsection


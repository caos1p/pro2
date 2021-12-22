
@extends('usuario.layaut.layaut')

@section('contenido')
  <div class="container" style="">
    <section>

    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >Reunion </h4>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
  
      <li class="nav-item" role="presentation">
        <button onclick="window.location='/medico/agenda'"  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Agenda</button>
      </li>
  
    
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Reunion</button>
      </li>
    
    
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    </div>
  </section>
<section style="height: 100%"> 
  <article style=" float: left;">
   <form class="row" style="" action="{{route('citamedica.index')}}" method="GET" >
      <div class="col 3" style="padding: 7pt">
      <input  class="form-control " name="fecha" type="date" placeholder="Search" aria-label="Search">
    </div>
      <div class="col 9" style="padding: 0pt">
      <button  class="btn btn-outline-success" type="submit">Buscar</button>
    </div>
    </form>
  </article>
  <aside style=" float: right;">
    <div class="dropdown">
      <a style="color: rgb(0, 0, 0)" class="btn dropdown-toggle btn-sm btn-outline-info" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        buscar por
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="{{route('citamedica.hoy')}}">hoy</a></li>
        <li><a class="dropdown-item" href="">ultima semana</a></li>
        <li><a class="dropdown-item" href="">ultimo mes</a></li>
        <li><a class="dropdown-item" href="{{route('citamedica.todos')}}">todos</a></li>

      </ul>
    </div>
  </aside>
  </section> 
  <br><br><br>     
  <section style="height: 100%">
  <div class="table-responsive">
    
   <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
     
    <thead>
           
      <tr style="color: black">
  
        <th>Motivo</th>
        <th>Reunion</th>
        <th>fecha</th>
        <th>hora</th>
        <th>Nombre</th>
        <th>Historial</th>
        <th>Estado</th>

      </tr>
    </thead>
    <tbody >
      @foreach($agenda as $agen)
        <tr style="line-height: 1%;">
         <td>{{$agen->title}}</td>   
         <td style="padding: 0%"> <a class="btn btn-sm" target="_blank" style="color: blue" href="">Realizar</a>    </td>  
         <td>{{$agen->start}}</td>
         <td>{{$agen->end}}</td>
         <td>{{$agen->paciente->nombre}}</td>
         <td style="padding: 1ch 3%">
          <form class="row g-3" action="{{route('historial.showdiagnostico',[$agen->id])}}" method="GET">
            @csrf
            <input id="a" type="text" class="form-control" name="fecha" value="1" hidden>
            <button  type="submit" class="btn btn-info btn-sm" style="font-size: 10px" onclick="showProgress()">Historial</button>
         </form>
         </td> 
         <td style="padding: 0%">
         </td>
      
       </tr>
      @endforeach
     </tbody>
     </table>
     {{$agenda->links("vendor.pagination.simple-default") }}

    </div>
  </section>

  </div>
@endsection


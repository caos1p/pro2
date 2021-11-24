@extends('layaut')

@section('contenido')

<div class="d-flex bd-highlight" style="">
  

        <div class="align-self-start"  style=";width: 30%;">
           
              
               <div class="text-center">
                <img height="250" width="250" src="https://thumbs.dreamstime.com/b/icono-de-usuario-personas-vectoriales-vector-perfil-ilustraci%C3%B3n-persona-comercial-s%C3%ADmbolo-grupo-usuarios-masculino-195157776.jpg" class="rounded" alt="...">
                <p class="secondary-text-color" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 25px">   {{$paciente->nombre}}</p>
              </div>
               <div class="card-body" style="margin: 2%;background-color: rgb(229, 242, 247)">
                <div class="container" style="margin: 2%">

             
                  <div class="col s6">
                    <p class="secondary-text-color">Apellido:    {{$paciente->apellidopaterno}}</p>
                  </div>
              
                  <div class="col s6">
                    <p class="secondary-text-color">Ci:   {{$paciente->ci}}</p>
                  </div>
         
                  <div class="col s6">
                    <p class="secondary-text-color">Direccion:    {{$paciente->direccion}}</p>
                  </div>
                
                  <div class="col s6">
                    <p class="secondary-text-color">Telefono:    {{$paciente->telefono}}</p>
                  </div>

                
                  <div class="col s6">
                    <p class="secondary-text-color">Email:    {{$paciente->email}}</p>

                  </div>
                </div>
              </div>
      </div>
     
        <div class="align-self-end" style="background-color: rgb(252, 231, 231);margin: auto;width: 80%;height: 100%;text-align: header " >

          <ul class="nav nav-tabs" id="myTab" role="tablist">
           
            <li class="nav-item">
              <a href="{{route('historial.showinterrogatorio',[$id])}}" class="nav-link" >Interrogatorio</a>
            </li>
       
            <li class="nav-item">
              <a href="{{route('historial.showdiagnostico',[$id])}}" class="nav-link" >Diagnostico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Archivo</a>
            </li>
          </ul>        
       


  

  <div class="card" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Archivo </h4><hr>
  
      </div> 
     
    </div> 
  </div>
@endsection
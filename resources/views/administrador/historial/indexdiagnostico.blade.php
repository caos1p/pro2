@extends('administrador.layaut.layaut')

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
              <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Diagnostico</a>
            </li>
            <li class="nav-item">
              <a href="{{route('historial.showarchivo',[$id])}}" class="nav-link" >Archivo</a>
            </li>
          </ul>        
          
            
       

     
  

  <div class="card" style="margin: 2%">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Diagnostico </h4>

    <div class="table-responsive">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         
        <form class="row g-3" action="{{route('diagnostico.store')}}" method="POST">
          @csrf   
          <input  type="hidden"  type="text" class="form-control" name="id" value="{{$id}}">

            <div class="col-md-6">
              <label for="nombre">Enfermedad    </label>
                <input type="text" class="form-control" name="enfermedad" value="{{old('enfermedad')}}">
             
             
              </div>  
             
                <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
    
</form>
      </div>
    
    </div>
  </div>
</div>
      <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
        
       <thead>
              
         <tr style="color: black">
     
           <th>Id</th>
           <th>Enfermedad</th>
           <th>fecha</th>
           <th>Accion</th>
       
         </tr>
       </thead>
       <tbody >
       
        @foreach($diagnostico as $diag)
        <tr>
         <td>{{$diag->id}}</td>
         <td>{{$diag->diagnostico}}</td>
         <td>{{$date}}</td>
         <td><a class="btn btn-danger btn-sm"  style="">receta</a>    
         <td><a class="btn btn-dark btn-sm"  style="">imprimir</a>    
      
       </tr>
      @endforeach
        </tbody>
        </table>
     
   
       </div>
      </div> 
     
    </div> 
  </div>
@endsection
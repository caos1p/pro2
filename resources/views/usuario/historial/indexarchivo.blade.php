
@extends('usuario.layaut.layaut')

@section('contenido')

@if(session('message'))
<div class="alert alert-primary" id="alert">
    {{ session('message') }}
</div>
@endif
<section>

    
        <aside style="width: 25%;float: right;">
           
              
               <div class="text-center">
                <img height="250" width="250" src="https://thumbs.dreamstime.com/b/icono-de-usuario-personas-vectoriales-vector-perfil-ilustraci%C3%B3n-persona-comercial-s%C3%ADmbolo-grupo-usuarios-masculino-195157776.jpg" class="rounded" alt="...">
                <p class="secondary-text-color" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 25px">   {{$paciente->nombre}}</p>
              </div>
               <div class="card-body" style="margin: 2%;background-color:  rgb(133, 148, 187);color: white; border: 1px ; border-radius: 50px">
                <div class="container" style="margin: 2%">

             
                  <div class="col s6">
                    <p class="secondary-text-color">Apellido:    {{$paciente->apellidopaterno}} {{$paciente->apellidomaterno}}</p>
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
                    <p class="secondary-text-color">Correo:    {{$paciente->email}}</p>

                  </div>
                </div>
              </div>
      </div>
    </aside>
   
    <article style="width: 65%;float: right;">
        <div class="" style="background-color: rgb(133, 148, 187)" >

          <ul class="nav nav-tabs" id="myTab" role="tablist">      
            <li class="nav-item">
              <a style="color: white" href="{{route('historial.showdiagnostico',[$id])}}" class="nav-link" >Diagnostico</a>
            </li>
            <li class="nav-item">
              <a style="font-weight: 800"  class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Archivo</a>

            </li>
          </ul> 
          
            
       
          <div class="card" style="">
            <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Archivo </h4><hr>
            <table class=" table table-striped" id="user" style="line-height: 45%" >         <thead>
        
              <thead>
                     
                <tr style="color: black">
            
                  <th>fecha</th>
                  <th>nombre</th>
                  <th>archivo</th>              
                </tr>
              </thead>
              <tbody >
              
               @foreach($archivo as $archi)
               <tr>
                <td>{{$archi->fecha}}</td>
                <td>{{$archi->nombre}}</td>
                <td style="padding: 1pt">   <a class="btn btn-danger btn-sm"  href="/{{$archi->archivo }}" target="_blank" >ver documento</a></td>

        
       
                 
     
              </tr>
             @endforeach
               </tbody>
               </table>
          
              </div> 
     
  
  </article>
 
  </section>
    <nav class="navbar-expand-lg flex-column" style="width: 10%;float: left">
      @if ($antecedente)
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 10%"  class="btn "  href="{{route('antecedente.show',[$id])}}">Ver Antecedentes</a>
      @else
      <a style="color: white;background-color: rgb(155, 97, 212);border: 5px ; border-radius: 50px;padding:6% 10%" class="btn "  href="{{route('antecedente.create',[$id])}}">Crear Antecedente</a>
      @endif
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 29%"  class="btn "  href="">Todos</a>
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 20%;"  class="btn "  href="">Evolucion</a>
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 30%;"  class="btn "  href="{{route('citamedica.citadepersonal',[$paciente->id])}}">Citas</a>

    </nav>
@endsection

<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script>
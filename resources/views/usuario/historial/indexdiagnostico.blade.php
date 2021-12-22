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
              <a style="font-weight: 800" class="nav-link active" id="home-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Diagnostico</a>
            </li>
            <li class="nav-item">
              <a style="color: white"  href="{{route('historial.showarchivo',[$id])}}" class="nav-link" >Archivo</a>
            </li>
          </ul>        
          
            
       

     
  

  <div class="card" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Diagnostico </h4>

    <div class="table-responsive">
<!-- Button trigger modal -->
@if ($numero)
<button style="color: white;background-color:  rgb(155, 97, 212)" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo
</button>
@endif

 

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

            <div class="col-md-12">
              <label for="nombre">Enfermedad    </label>
                <input type="text" class="form-control" name="enfermedad" value="{{old('enfermedad')}}" required>
             
             
              </div>  
             <br>
             <div class="col-md-2">

                <button type="submit" class="btn btn-primary" onclick="showProgress()">Guardar</button>
              </div>  

</form>
      </div>
    
    </div>
  </div>
</div>
      <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
        
       <thead>
              
         <tr style="color: black">
     
           <th>Nro</th>
           <th>Enfermedad</th>
           <th>fecha y hora de cita</th>
           <th>Medico</th>

           <th>Receta</th>
       
         </tr>
       </thead>
       <tbody >
       
        @foreach($diagnostico as $diag)
        <tr>
         <td>{{$diag->id}}</td>
         <td>{{$diag->diagnostico}}</td>
         <td>{{$diag->citamedica->start}}     .({{$diag->citamedica->end}})</td>
         <td>{{$diag->personal->nombre}} {{$diag->personal->apellidopaterno}}</td>

          
<!-- Button trigger modal -->
<td style="padding: 1pt">
  @php
  $b=1;
@endphp 
  @foreach ($receta as $recet )
     
  @if ($recet->diagnostico_id===$diag->id )
  <button style="background-color: rgb(101, 81, 121);color: white" type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#receta{{$diag->id}}">
    ver
  </button>
  @php
  $b=2;
  @endphp 
  @endif
    
  @endforeach
  
  @if ($b==1)

  <button style="background-color: rgb(155, 97, 212);color: white" type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#receta{{$diag->id}}">
    Crear
  </button>

     @endif
  

<!-- Modal -->
<div class="modal fade" id="receta{{$diag->id}}" tabindex="-1" aria-labelledby="exampleModalLabell" aria-hidden="true">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabell">receta medica</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @php
        $a=1;
    @endphp 
     @foreach ($receta as $recet )
     
     @if ($recet->diagnostico_id===$diag->id )
     <p>Preescripcion </p>
        
     <div class="row">
     <textarea class="form-control" style="width: 100%" rows="3" readonly>{{$recet->prescripcion}}</textarea>
   </div>
     <br>
     <a  class="btn btn-info btn-sm" href="{{route('enviaremailreceta',[$recet->id])}}" class="nav-link" >Enviar</a>
 
     @php
     $a=2;
     @endphp 
     @endif
       
     @endforeach
     
     @if ($a==1)
   
   
        <form  action="{{route('recetamedica.store')}}" method="POST">
          @csrf   
          <input  type="hidden"  type="text" class="form-control" name="iddiagnostico" value="{{$diag->id}}">
          <input  type="hidden"  type="text" class="form-control" name="idcita" value="{{$id}}">


         
          <p for="nombre">Prescripcion </p>
            <div class="col-md-12">
                <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="enfermedad"></textarea>
            </div>  
            <br>
             
                <button type="submit" class="btn btn-primary btn-sm" style="width: 25%" onclick="showProgress()">Guardar</button>
          
        </form>
   
        @endif
      </div>
    
    </div>
  </div>
</div> </td>  
      
       </tr>
      @endforeach
        </tbody>
        </table>
     
   
       </div>
      </div> 
     
    </div> 
  </article>
 
  </section>
    <nav class="navbar-expand-lg flex-column" style="width: 10%;float: left">
      @if ($antecedente)
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 10% "  class="btn  "  href="{{route('antecedente.show',[$id])}}">Ver Antecedentes</a>
      @else
      <a style="color: white;background-color: rgb(155, 97, 212);border: 5px ; border-radius: 50px;padding:6% 10%" class="btn  "  href="{{route('antecedente.create',[$id])}}">Crear Antecedente</a>
      @endif
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 27%"  class="btn btn-lg "  href="">Todos</a>
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 20%;"  class="btn "  href="">Evolucion</a>
      <a style="color: white;background-color: rgb(133, 148, 187);border: 1px ; border-radius: 50px;padding:6% 30%;"  class="btn "  href="{{route('citamedica.citadepersonal',[$paciente->id])}}">Citas</a>



    </nav>
@endsection

<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script>
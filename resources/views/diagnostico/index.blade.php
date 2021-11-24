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
        
        <div class="align-self-end" >
       
          
            
           
<div class="container-fluid" style="margin: 5%">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Interrogatorio</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" onclick="window.location='/agenda'" href="{{route('historial.show',[$agen->paciente->id])}}"   data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Diagnostico</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Archivos</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
              
                  <div class="col s12 m5">
                      <p class="primary-text-color secondary-text-style">Nombre :</p>
                  </div>
                  <div class="col s8 offset-s2 m7 ">
                      <p class="secondary-text-color">{{$paciente->nombre}}</p>
                  </div>
                  <div class="col s12 m5">
                   <p class="primary-text-color secondary-text-style">Apellido:</p>
                 </div>
                 <div class="col s8 offset-s2 m7">
                   <p class="secondary-text-color">{{$paciente->apellido}}</p>
                 </div>
                  <div class="col s12 m5">
                   <p class="primary-text-color secondary-text-style">ci:</p>
                 </div>
                 <div class="col s8 offset-s2 m7">
                   <p class="secondary-text-color">{{$paciente->ci}}</p>
                 </div>
                 <div class="col s12 m5">
                   <p class="primary-text-color secondary-text-style">direccion:</p>
                 </div>
                 <div class="col s8 offset-s2 m7">
                   <p class="secondary-text-color">{{$paciente->direccion}}</p>
                 </div>
                 <div class="col s12 m5">
                   <p class="primary-text-color secondary-text-style">telefono:</p>
                 </div>
                 <div class="col s8 offset-s2 m7">
                   <p class="secondary-text-color">{{$paciente->telefono}}</p>
                 </div>

                 <div class="col s12 m5">
                   <p class="primary-text-color secondary-text-style">Email:</p>
                 </div>
                 <div class="col s8 offset-s2 m7">
                   <p class="secondary-text-color">{{$paciente->email}}</p>

                 </div>   
          
       </div>
      </div> 
      <div class="align-self-end" style="background-color: rgb(252, 231, 231);margin: auto;width: 80%;height: 100%;text-align: header " >

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Interrogatorio</button>
          </li>
          <li class="nav-item" role="presentation">
            <button   class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Diagnostico</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Archivos</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>            
        
          
     




<div class="card" style="">

  <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Interrogatorio </h4><hr>

  <div class="table-responsive">
    
    <table class=" table table-striped" id="user" style="line-height: 65%" >         <thead>
      
     <thead>
            
       <tr style="color: black">
   
         <th>Id</th>
         <th>Enfermedad</th>
         <th>fecha</th>
     
       </tr>
     </thead>
     <tbody >
       @foreach($agenda as $agen)
         <tr>

 
       
        </tr>
       @endforeach
      </tbody>
      </table>
   
 
     </div>
    </div> 
   
  </div> 
      </div>
@endsection
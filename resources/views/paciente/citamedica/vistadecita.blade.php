@extends('paciente.layaut.layaut')

@section('contenido')

<body style="background-image:url(https://st4.depositphotos.com/1907633/20973/i/1600/depositphotos_209738132-stock-photo-health-care-medical-services-concept.jpg)">
<section style="margin: 5% 4%">
  @if(session('message'))
<div class="alert alert-success" id="alert">
    {{ session('message') }}
</div>
@endif
@if(session('messages'))
<div class="alert alert-danger" id="alert">
    {{ session('messages') }}
</div>
@endif
  <article style="width: 80%;float: left">
<div class="container-fluid" style="padding: 4%;background: rgb(96, 108, 131);color: white">
<div class="col ">
<p style="text-align: center;font-size: 27px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Bienvenido:   {{auth()->user()->name}} 
 
</p></div><hr>

<div class="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-size: 20px">
  <div class="col s6">
    <p class="primary-text-color secondary-text-style" >Motivo:</p>
  </div>
  <div class="col s6">
    <p class="secondary-text-color">{{$title}}</p>
  </div>
</div>
  <div class="row"style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-size: 20px">
  <div class="col s6">
    <p class="primary-text-color secondary-text-style">Fecha:</p>
  </div>
  <div class="col s6">
    <p class="secondary-text-color">{{$start}}</p>
   
</div>  </div>
  <div class="row"style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-size: 20px">
  <div class="col s6">
    <p class="primary-text-color secondary-text-style">Hora:</p>
  </div>
  <div class="col s6">
    <p  class="secondary-text-color">{{$end}}</p>
  </div>
</div>
<div class="row"style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;font-size: 20px">
  <div class="col s6">
    <p class="primary-text-color secondary-text-style">Especialidad:</p>
  </div>
  <div class="col s6">
    <p  class="secondary-text-color">{{$medico[0]->especialidad->nombre}}: {{$medico[0]->nombre}}  {{$medico[0]->apellidopaterno}} </p>
  </div>
</div><hr>
<form action="{{route('archivo.store')}}" class="row" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="col-auto" style="">
    <label style="color: white;font-size: 20px; font-weight: 700" for="">Subir Archivo:</label><br>
    <input style="color: white;font-size: 14px; font-weight: 700" name="archivo" type="file"  >   
    <button type="submit" class="btn btn-secondary btn-sm ">Subir</button>
 
  </div>
  <div class="col-auto" style="">

</div>

</form>
</div>

</article>
<aside style="width: 20%;float: right">
  <nav class="" style="text-align: center">
      <article>
       <div class="cuadrado" style="width: 150px;height: 150px;background: rgb(4, 2, 66);border: 1px solid #000;margin: 0% 25%; border-radius: 5ch  ">
         <br><br>
         <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$usuario[0]->id}}" style="font-size: 15px;color: white" href="">Editar Usuario <br><i style="font-size: 30px" class="bi bi-person-circle"></i> </a>
   
         
         <!-- Modal -->
         <div class="modal fade" id="exampleModal1{{$usuario[0]->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                 <form action="{{route('usuario.updatepaciente',[$usuario[0]->id])}}" method="POST">
                   @csrf
                   @method("put")
               
               
                               <div class="row">
                               
                                  
                                 <div class="col-6">
                                   <label for="name" class="form-label">Nombre</label>
                                     <input id="name" class="form-control" type="text" name="name" value="{{$usuario[0]->name}}" readonly>
                                 </div>
                   
                                 <div class="col-6">
                                   <label for="correo" class="form-label">Correo   </label>
                                  <input id="email" type="text" class="form-control" name="email" value= "{{$usuario[0]->email}}" required>
                               
                                 </div>
                               </div>
                               <br>
                               <div class="row">
               
                                 <div class="col-6">
                                   <label for="password"  class="form-label">Contraseña   </label>
                                <input placeholder=" ingrese su contraseña" id="password "type="password" class="form-control" name="password" required>
                             
                               </div>
                              
                                 </div>
                                 <br>
                              <div class="card-action right-align">
                               <button type="submit" class="btn btn-primary btn-lg" onclick="showProgress()">Guardar</button>
                              
                     
                     </div>  
                    </form>
               </div>
          
             </div>
           </div>
         </div>
       </div>
     </article>
      <article>
     
       <div  style="width: 150px;height: 150px;background: rgb(65, 22, 22);border: 1px solid #0000;margin:10% 25%; border-radius: 5ch  ">
<br><br>
        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$usuario[0]->id}}" style="font-size: 15px;margin: 0% 0%;color: white" href="">Editar Contraseña <br> <i style="font-size: 30px" class="bi bi-key"></i> </a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal2{{$usuario[0]->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
               <form action="{{route('usuario.updatepaciente',[$usuario[0]->id])}}" method="POST">
                 @csrf
                 @method("put")
             
             
                             <div class="row">
                             
                                
                               <div class="col-6">
                                 <label for="name" class="form-label">Nombre</label>
                                   <input id="name" class="form-control" type="text" name="name" value="{{$usuario[0]->name}}" readonly>
                               </div>
                 
                               <div class="col-6">
                                 <label for="correo" class="form-label">Correo   </label>
                                <input id="email" type="text" class="form-control" name="email" value= "{{$usuario[0]->email}}" readonly>
                             
                               </div>
                             </div>
                             <br>
                             <div class="row">
             
                               <div class="col-4">
                                 <label for="password"  class="form-label">Nueva Contraseña   </label>
                              <input placeholder=" ingrese su contraseña" id="password "type="password" class="form-control" name="password" required>
                             </div>

                             <div class="col-8">
                              <label for="nuevopassword"  class="form-label">Ingrese de nuevo su contraseña   </label>
                           <input placeholder=" ingrese su contraseña" id="nuevopassword "type="password" class="form-control" name="nuevopassword" required>
                        
                          </div>
                    
                               </div>
                               <br>
                            <div class="card-action right-align">
                             <button type="submit" class="btn btn-primary btn-lg" onclick="showProgress()">Guardar</button>
                            
                   
                   </div>  
                  </form>
             </div>
        
           </div>
         </div>
       </div>
       </div>
   
      </article>

    <br><br><br><br>

    <a  class="btn btn-danger" aria-current="page" href="/logout"> salir</a>

  </nav>

</aside>
</section>
</body>
@endsection
<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script>
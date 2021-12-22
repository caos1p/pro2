
@extends('usuario.layaut.layaut')

@section('contenido')

 <section >
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
  <p style="text-align: center; font-size: 20px;color: red;padding: 1%;font-weight: 700">Bienvenido: Dr. {{$persona[0]->nombre}} {{$persona[0]->apellidopaterno}} {{$persona[0]->apellidomaterno}}</p>

   <article style="width: 50%;float: left;text-align: center">

    <div class="cuadrado" style="width: 350px;height: 350px;background: rgb(4, 2, 66);border: 1px solid #000;margin: 10% 25%  ">
      <br><br><br><br>
      <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$usuario[0]->id}}" style="font-size: 30px;margin: 0% 0%;color: white" href="">Editar Usuario <br><i style="font-size: 100px" class="bi bi-person-circle"></i> </a>

      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal1{{$usuario[0]->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route('usuario.update',[$usuario[0]->id])}}" method="POST">
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
   <article style="width: 50%;float: right;text-align: center">
  
    <div  style="width: 350px;height: 350px;background: rgb(65, 22, 22);border: 1px solid #0000;margin:10% 25% ">
      <br><br><br><br>
      <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2{{$usuario[0]->id}}" style="font-size: 30px;margin: 0% 0%;color: white" href="">Editar Contraseña <br> <i style="font-size: 100px" class="bi bi-key"></i> </a>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal2{{$usuario[0]->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('usuario.update',[$usuario[0]->id])}}" method="POST">
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
 </section>
@endsection

<script>
  window.setTimeout(function() { $("#alert").alert('close'); }, 5000);

</script>
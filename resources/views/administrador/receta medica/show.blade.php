@extends('administrador.layaut')

@section('contenido')

 <div class="row">
    <div class="col s12 m10 offset-m1 l6 offset-113 x16 offset-x13">
        <div id="panel-left" class="card">
           <div class="card-content">
               <span class="card-title primary-text-color primary-text-style">
                   Datos Personales
               </span>
               <div class="row">
                <div class="col s12 divider"></div>
                </div>
            

               <div class="row">
                   <div class="col s12 m5">
                       <p class="primary-text-color secondary-text-style">Nombre :</p>
                   </div>
                   <div class="col s8 offset-s2 m7 ">
                       <p class="secondary-text-color">{{$personas->nombre}}</p>
                   </div>
                   <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">Apellido:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->persona->apellido}}</p>
                  </div>
                   <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">ci:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->persona->ci}}</p>
                  </div>
                  <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">direccion:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->persona->direccion}}</p>
                  </div>
                  <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">telefono:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->persona->telefono}}</p>
                  </div>

                  <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">Email:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->email}}</p>

                  </div>
                  <div class="col s12 m5">
                    <p class="primary-text-color secondary-text-style">Password:</p>
                  </div>
                  <div class="col s8 offset-s2 m7">
                    <p class="secondary-text-color">{{$personas->password}}</p>
                  </div>
              
         

                 <div class="card-action right-aling">
                   <a href="{{route('usuarioindex')}}">cancelar</a>
                 </div>
                </div>
            </div>
        </div>
     </div>
    </div>
@endsection

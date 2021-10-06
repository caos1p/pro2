@extends('layaut')

@section('contenido')



<div class="container-fluid" >
  <div id="carouselExampleInterval" class="carousel carousel-dark slide" data-bs-ride="carousel"  >
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000" style="text-align: center">
        <img class="img-fluid"  style="object-fit: scale-down;height: 550px;"  src="https://www.nubimed.com/wp-content/uploads/consultorio-medico-online.jpg"   alt="">
       
        <div class="carousel-caption d-none d-md-block">
            <div class="row justify-content-around" style="color: white">
                <div class="col-lg-8 col-md-7 col-sm-11 text-white text-shadow-1 mt-4">
            <h1 class="fw-600 ls--2 mt-5" style="text-align: left">
                <span class="fw-400 ls--3 small">Servicio de</span><br/>
                Consulta Médica Online
			</h1>
            <hr class="separator-150x5 bg-primary mx-0 my-45"/>
            <h5  style="text-align: left" class="ls--2">Accede a nuestros especialistas para una consulta o segunda opinión médica a través de  <u>Telemedicina</u>.</h5>
            <h5  style="text-align: left" class="ls--2 pr-2">Agenda tu turno en 3 pasos y abona online. </h5>
            <img   height="70px" src="https://1000marcas.net/wp-content/uploads/2019/12/logo-Paypal.png" alt="Formas de Pago" class="d-block"/>

        </div>
        </div>
    </div>
    </div>
      <div class="carousel-item" data-bs-interval="3000" style="text-align: center">
        <img class="img-fluid"  style="object-fit: scale-down;height: 550px;"  src="https://d500.epimg.net/cincodias/imagenes/2015/07/13/lifestyle/1436803920_301116_1436804218_noticia_normal.jpg"   alt="">
        <div class="carousel-caption d-none d-md-block" style="text-align: center;">
            <div class="row justify-content-around">
                <div class="col-lg-7 col-md-7 col-sm-11 text-white text-shadow-1 mt-4">
            <h1 class="fw-600 ls--2 mt-5" style="text-align: left">
                <span class="fw-400 ls--3 small">Servicio de</span><br/>
                Consulta Médica Online
			</h1>
            <hr class="separator-150x5 bg-primary mx-0 my-45"/>
            <h5  style="text-align: left" class="ls--2">Accede a nuestros especialistas para una consulta o segunda opinión médica a través de  <u>Telemedicina</u>.</h5>
            <h5  style="text-align: left" class="ls--2 pr-2">Agenda tu turno en 3 pasos y abona online.</h5>
            <img  style="text-align: left"  height="70px" src="https://1000marcas.net/wp-content/uploads/2019/12/logo-Paypal.png" alt="Formas de Pago" class="d-block"/>
          </div>
        </div>
    </div> 
    </div>

    </div>
    <button  class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"style="color: black"  aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>



<section class="container-fluid " id="hospital" style="background-color: rgb(191, 247, 247)">
    <div class="row justify-content-center py-5">
          <div class="col-xl-8">
              <h2 class="text-center text-uppercase fw-600">Ten tu consulta en pocos pasos</h2>
        <hr class="separator-linea bg-primary mx-auto"/>
          </div>
      </div>
    <div class="row pb-3">
      <div class="col-sm-12 col-md-6 col-lg-3 text-center step">
        <img src="https://hospitalprivado.com.ar/frontend/landing-ads/images/step-1.png" alt="Hospital Privado Cordoba" class="d-block mx-auto"/>
        <p class="ls--2 lh-150"><strong>Completa el formulario</strong> y selecciona el servicio sobre el cual deseas recibir más información, ya sea consulta por telemedicina o segunda opinión médica.</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 text-center step">
        <img src="https://hospitalprivado.com.ar/frontend/landing-ads/images/step-2.png" alt="Hospital Privado Cordoba" class="d-block mx-auto"/>
        <p class="ls--2 lh-150"><strong>Aguarda el contacto</strong> de nuestros asesores, con quienes coordinarán contigo la consulta.</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 text-center step">
        <img src="https://hospitalprivado.com.ar/frontend/landing-ads/images/step-3.png" alt="Hospital Privado Cordoba" class="d-block mx-auto"/>
        <p class="ls--2 lh-150">Para confirmar tu cita médica online, <strong>abona el monto</strong> establecido de 15BS mediante la forma de pago indicada.</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 text-center step">
        <img src="https://hospitalprivado.com.ar/frontend/landing-ads/images/step-4.png" alt="Hospital Privado Cordoba" class="d-block mx-auto"/>
        <p class="ls--2 lh-150">¡<strong>Recibe la consulta</strong> por telemedicina de nuestro especialista en el día y horario acordado!</p>
      </div>
  
    </div>
  </section>
  <br>
  <section> 
    <div class="row">
        <div class="col-6" style="text-align: right">
            <a class="btn btn-primary btn-lg" href="login" role="button">INGRESAR AHORA</a>
        </div>
        <div class="col-6">
      

          <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            NUEVO USUARIO
          </button>
          
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Registro</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container-sm">
       
                    <form class="row g-3" action="{{route('usuario.store')}}" method="POST">
                      @csrf
                     
                      
                  
                         
                        <div class="col-sm-6">
                          <label for="nombre">Nombre    </label>
                            <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" required>
                         
                            @error('nombre')
                             <span class="error">{{$message}}</span>
                            @enderror
                     
                        </div>
          
                        <div class="col-sm-6">
                          <label for="correo">Correo   </label>
                         <input id="correo " class="form-control"  type="email"  name="email" value= "{{old('email')}}" required>          
                         @error('email')
                         <span class="error">{{$message}}</span>
                         @enderror
                        </div>
              
                    
                        <div class="col-sm-12">
                          <label for="password">Contraseña   </label>
                       <input id="password "type="password" class="form-control" name="password" value="{{old('password')}}" required>
                        @error('password')
                        <span class="error">{{$message}}</span>
                        @enderror
                      </div>
          
                     <div class="card-action right-align">
                      <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
                     
            
            </div>  
           </form>
          </div>
          
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                </div>
              </div>
            </div>
          </div>




        </div>
    </div>
</section>
 
  <section class="container py-5" id="hospital">
    <div class="row py-5">
        <div class="col-lg-8">
            <h2 class="text-uppercase fw-600">Abocados a ofrecer al mundo una medicina de excelencia</h2>
            <hr class="separator-linea bg-primary ml-0 my-4"/>
            <p class="mb-4">Nuestro Hospital es un <strong>centro asistencial de referencia en Latinoamérica</strong> y cuenta con todas las especialidades médicas y con diferentes áreas de complejidad a cargo de profesionales destacados con logros únicos en la región.</p>
  <p class="mb-4">Como institución, nuestro espíritu está puesto en expandir los límites geográficos y acercar nuestros servicios a distintas regiones de América Latina, para llevar a otros países medicina de calidad. Es por ello que <strong>recibimos pacientes de diversas nacionalidades</strong> y ponemos a su disposición todas las especialidades médicas para realizar controles médicos de rutina, telemedicina, segunda atención médica o atención de mediana o alta complejidad, brindándoles un acompañamiento personalizado.</p>
        </div>
        <div class="col-lg-4">
  <img  height="400px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlBOEqnHIRy6729l5Kr6sU3ZWBLomW2FXArbcV4Jmto9hM2Q4PvZ42GuF_NPSf0K6GQ-0&usqp=CAU" alt="Hospital Privado Cordoba" class="d-block w-100 mb-3"/>
        </div>
    </div>
</section>
<br>
<footer class="pt-5 pb-4" style="background: rgb(58, 53, 49)">
    <section class="container">
        <div class="row">
        
            <div class="col">
                <p style="text-align: center;font-family: Arial, Helvetica, sans-serif;color: white">© 2019 Hospital Privado . <br class="d-block d-md-none"/>Todos los derechos reservados</p>
            </div>
        </div>
    </section>
</footer>
@endsection
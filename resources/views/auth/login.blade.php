@extends('layaut')

@section('contenido')
@if(session('message'))
<div class="alert alert-primary" id="alert" style="text-align: center">
    {{ session('message') }}
</div>
@endif
<br>
<body background="https://media.istockphoto.com/photos/black-stethoscope-on-blue-background-picture-id1179610553?k=20&m=1179610553&s=612x612&w=0&h=5K_35veKTFsS4KEe2piat8EP_9nizrUuPrltqBhW5bw=">
    
</body>
<div class="container">
<div class="row"  style="color: white">
  
    <div class="col-sm-4"></div>
<div class=" col-sm-4" style="background-color:  rgb(1, 16, 31)">
<div class="row" style="align-content: center">
   
    <h2 style="color: rgb(250, 246, 246); width: 100%;padding: 3%; text-align: center ;height: 60px;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Ingresar A Mi Cuenta </h2><hr>
   <br>
    <form action="login" method="POST">
     @csrf
 
      <br>
    <div class="row " style="width: 100%;">
    <div class="col-12" style="text-align: left" >
       <h5> Email:  <i class="bi bi-envelope"></i></h5>
       <input required  style="color: rgb(17, 16, 16);font-size: 25px;width: 100%;border-color: rgb(247, 244, 244)" id="email" type="text" class="validate" name="email" placeholder="">

    </div>
       <br>
       <br>
       
       
     
       <div class="col-12" style="text-align: left" >
        <h5> Password:     <i class="bi bi-lock-fill"></i> </h5>
    
       <input required style="color: rgb(7, 7, 7);font-size: 25px;width: 100%;border-color: red" id="password" type="password" class="validate" name="password" placeholder="" >
     </div>
    </div>
       <br>
       
       
       <button style="width: 100%; background: rgb(155, 135, 127);height: 70px;padding: 2%; color: white;font-size: 40px;font-family: 'Courier New', Courier, monospace" class="btn btn-primary btn-lg">Iniciar</button>
  <br>
  <br>
       
       <h5>si no tienes una cuenta puedes crearla aquí.</h5>
       <a class="btn btn-primary btn-lg" href="paciente/create">REGISTRAR NUEVO</a>

     



    </form>
    
</div>
<br>
</div>


</div>

</div>
@endsection
<script>
   window.setTimeout(function() { $("#alert").alert('close'); }, 5000);
 
 </script>
 
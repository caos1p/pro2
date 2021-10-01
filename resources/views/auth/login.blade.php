@extends('layaut')

@section('contenido')
<br>
<body background="https://media.istockphoto.com/photos/black-stethoscope-on-blue-background-picture-id1179610553?k=20&m=1179610553&s=612x612&w=0&h=5K_35veKTFsS4KEe2piat8EP_9nizrUuPrltqBhW5bw=">
    
</body>
<div class="container">
<div class="row">
    
    <div class="col-sm-4"></div>
<div class=" col-sm-4" style="background-color:  rgb(177, 205, 231)">
<div class="row" style="align-content: center">
   
    <h3 style="color: rgb(247, 242, 242); width: 100%; text-align: center ;background-color: rgb(78, 60, 53);height: 60px;">Ingreso Seguro </h3>
   
    <hr style="color: red">
    <form action="login" method="POST">
     @csrf
      <div  style="margin: 0% 3%;">
        <div  style="width: 100% ;text-align: center;">
             <img height="80px" src="https://cdn0.iconfinder.com/data/icons/bubbly-icons/512/User_Account_Avatar_Person_Profile_Login_Persona-512.png" >
        </div> 
    </div>
       <br>
    <div class="row " style="width: 100%;">
    <div class="col-12" style="text-align: left" >
       <h5> eMail:  <i class="bi bi-envelope"></i></h5>
       <input required style="color: rgb(17, 16, 16);font-size: 25px;width: 100%" id="email" type="email" class="validate" name="email" placeholder="">

    </div>
       <br>
       <br>
       <br>
       <br>
     
       <div class="col-12" style="text-align: left" >
        <h5> Password:     <i class="bi bi-lock-fill"></i> </h5>
    
       <input style="color: rgb(7, 7, 7);font-size: 25px;width: 100%" id="password" type="password" class="validate" name="password" placeholder="" required>
     </div>
    </div>
       <br>
       <br>
       
       <button style="width: 100%; background: rgb(58, 11, 20);height: 40px;color: white" class="">Iniciar</button>
  
       
    </form>
    <br>
</div>
<br>
</div>
</div>
</div>
@endsection
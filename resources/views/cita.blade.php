@extends('home')

@section('contenido')

<div style="margin: 5% 38%; background: rgb(163, 162, 223)" class="card" id="main">
    
    <h2 style="color: rgb(247, 242, 242); width: 100%; text-align: center; margin: 0% 0%">LOGIN</h2>
    <hr style="color: red">
    <form action="login" method="POST">
     @csrf
      <div style="margin: 0% 3%;">
        <div  style="width: 100% ;text-align: center;"> <i class="bi bi-person " style="font-size: 40px"></i></div> 
    
       <br>
       <i class="bi bi-envelope"></i>
       <input required style="color: rgb(17, 16, 16);font-size: 25px" id="email" type="email" class="validate" name="email" placeholder="Email">
     </div>
       <br>
       <br>
       <div style="margin: 0% 3%">
        <i class="bi bi-lock-fill"></i>       <input style="color: rgb(7, 7, 7);font-size: 25px" id="password" type="password" class="validate" name="password" placeholder="Password" required>
     </div>
       <br>
       <br>
       
       <button style="width: 100%; margin: 3% 0%; background: rgb(231, 198, 204);height: 40px;" class="">Iniciar</button>
  
       
    </form>
    <br>
   </div>
@endsection
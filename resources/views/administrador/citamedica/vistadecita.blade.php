@extends('administrador.layaut.layaut')

@section('contenido')
<body style="background-image:url(https://st4.depositphotos.com/1907633/20973/i/1600/depositphotos_209738132-stock-photo-health-care-medical-services-concept.jpg)">

<div class="card" style="margin: 3% 20%;padding: 4%;background: rgb(47, 71, 63);color: white">
<div class="col ">
<p style="text-align: center;font-size: 27px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Bienvenido:   {{auth()->user()->name}}</p></div><hr>

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
    <p  class="secondary-text-color">{{$nombre}}</p>
  </div>
</div>
<div style="text-align:right ">
<a  class="btn btn-danger" style="width: 20%;"  href="">Editar</a>
</div>
</div>
</body>
@endsection
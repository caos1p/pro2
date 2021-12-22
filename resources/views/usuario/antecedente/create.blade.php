@extends('usuario.layaut.layaut')

@section('contenido')

<h4 style="text-align: center">Antecedentes</h4>
   <div class="container"  >
       
          <form action="{{route('antecedente.store')}}" method="POST">
            @csrf
            <input  type="hidden"  type="text" class="form-control" name="id" value="{{$id}}">
            <h5 style="font-weight: 400" >Antecedentes Heredo-Familiares    </h5>
            <div class="row" style="font-size: 12px">
              <label  for="inputPassword" class="col-sm-2 col-form-label">Abuelos Vivos:</label>
            <div class="col-sm-2" >
                <input required id="motivo" type="text" class="" name="abuelosvivos" value="{{old('abuelosvivos')}}">
            </div>
            <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padecen:</label>
            <div class="col-sm-2">
                <input required id="motivo" type="text" class="" name="enfermedadquepadeceabuelos" value="{{old('enfermedadquepadeceabuelos')}}">
            </div>
          </div>
          <div class="row" style="font-size: 12px">
            <label  for="inputPassword" class="col-sm-2 col-form-label">Padre Vivo:</label>
          <div class="col-sm-2" >
              <input required  id="motivo" type="text" class="" name="padrevivo" value="{{old('padrevivo')}}">
          </div>
          <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padece:</label>
          <div class="col-sm-2">
              <input required id="motivo" type="text" class="" name="enfermedadquepadecepadre" value="{{old('enfermedadquepadecepadre')}}">
          </div>
        </div>
        <div class="row" style="font-size: 12px">
          <label  for="inputPassword" class="col-sm-2 col-form-label">Madre Vivo:</label>
        <div class="col-sm-2" >
            <input required id="motivo" type="text" class="" name="madrevivo" value="{{old('madrevivo')}}">
        </div>
        <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padece:</label>
        <div class="col-sm-2">
            <input required id="motivo" type="text" class="" name="enfermedadquepadecemadre" value="{{old('enfermedadquepadecemadre')}}">
        </div>
      </div>
      <div class="row" style="font-size: 12px">
        <label  for="inputPassword" class="col-sm-2 col-form-label">Hermanos Vivos:</label>
      <div class="col-sm-2" >
          <input required id="motivo" type="text" class="" name="hermanosvivos" value="{{old('hermanosvivos')}}">
      </div>
      <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padecen:</label>
      <div class="col-sm-2">
          <input required id="motivo" type="text" class="" name="enfermedadquepadecehermano" value="{{old('enfermedadquepadecehermano')}}">
      </div>
    </div>
    <div class="row" style="font-size: 12px">
      <label  for="inputPassword" class="col-sm-2 col-form-label">Otros:</label>
    <div class="col-sm-2" >
        <input required id="motivo" type="text" class="" name="otros" value="{{old('otros')}}">
    </div>
  </div>
            
<br><br>             
  <h5 style="font-weight: 400" >Antecedentes Personales No Patologicos   </h5>

  <div class="row" style="font-size: 12px">
    <label for="inputPassword" style="font-size: 18px;font-weight: 300"class="">Alimentacion</label>

    <label  for="inputPassword" class="col-sm-2 col-form-label">Nro de comida al dia</label>
  <div class="col-sm-2" >
      <input required id="motivo" type="text" class="" name="comida" value="{{old('comida')}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Cantidad:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="cantidad" value="{{old('cantidad')}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Calidad:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="calidad" value="{{old('calidad')}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Litros de agua al dia:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="agua" value="{{old('agua')}}">
  </div>
</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Habitacion</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Piso</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="piso" value="{{old('piso')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Ventilacion:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="ventilacion" value="{{old('ventilacion')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Iluminacion:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="iluminacion" value="{{old('iluminacion')}}">
</div>

<label  for="inputPassword" class="col-sm-2 col-form-label">Enque duerme:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="duerme" value="{{old('duerme')}}">
</div>
</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Habitos Higienicos</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Baño diario</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="bañodiario" value="{{old('bañodiario')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Lavado de manos:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="lavadomanos" value="{{old('lavadomanos')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Cambio de ropa:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="cambioderopa" value="{{old('cambioderopa')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Higiene Bucal:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="higienebucal" value="{{old('higienebucal')}}">
</div>

</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Inmunizacion</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Infancia</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="infancia" value="{{old('infancia')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Reciente:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="reciente" value="{{old('reciente')}}">
</div>
</div>

<label  style="font-weight: 300"   for="inputPassword" class="">Toxicomanias</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Alcoholismo</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="alcoholismo" value="{{old('alcoholismo')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Tabaquismo:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="tabaquismo" value="{{old('tabaquismo')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Drogadiccion</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="drogadiccion" value="{{old('drogadiccion')}}">
</div>
</div>

<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Otros</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="otros" value="{{old('otros')}}">
</div>
</div>
<br>
 <br>           
<h5 style="font-weight: 400" >Antecedentes Personales Patologicos   </h5>

<div class="row" style="font-size: 12px">

  <label  for="inputPassword" class="col-sm-2 col-form-label">Antecedentes Quirurgicos</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="antecedentesquirurgicos" value="{{old('antecedentesquirurgicos')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Transfuciones:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="transfuciones" value="{{old('transfuciones')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Alergias:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="alergias" value="{{old('alergias')}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Efermedades:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="enfermedades" value="{{old('enfermedades')}}">
</div>
</div>
<br>
<button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
<br>
 </form>
</div>


@endsection



  

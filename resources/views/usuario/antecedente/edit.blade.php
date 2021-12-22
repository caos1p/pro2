@extends('usuario.layaut.layaut')

@section('contenido')

<h4 style="text-align: center">Antecedentes</h4>
   <div class="container"  >
       
          <form action="{{route('antecedente.update')}}" method="POST">
            @csrf
            @method("put")
            <input  type="hidden"  type="text" class="form-control" name="id" value="{{$id}}">

            <h5 style="font-weight: 400" >Antecedentes Heredo-Familiares    </h5>
            <div class="row" style="font-size: 12px">
              <label  for="inputPassword" class="col-sm-2 col-form-label">Abuelos Vivos:</label>
            <div class="col-sm-2" >
                <input required id="motivo" type="text" class="" name="abuelosvivos" value="{{$antecedentefamiliar[0]->abuelosvivos}}">
            </div>
            <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padecen:</label>
            <div class="col-sm-2">
                <input required id="motivo" type="text" class="" name="enfermedadquepadeceabuelos" value="{{$antecedentefamiliar[0]->enfermedadquepadeceabuelos}}">
            </div>
          </div>
          <div class="row" style="font-size: 12px">
            <label  for="inputPassword" class="col-sm-2 col-form-label">Padre Vivo:</label>
          <div class="col-sm-2" >
              <input required  id="motivo" type="text" class="" name="padrevivo" value="{{$antecedentefamiliar[0]->padrevivo}}">
          </div>
          <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padece:</label>
          <div class="col-sm-2">
              <input required id="motivo" type="text" class="" name="enfermedadquepadecepadre" value="{{$antecedentefamiliar[0]->enfermedadquepadecepadre}}">
          </div>
        </div>
        <div class="row" style="font-size: 12px">
          <label  for="inputPassword" class="col-sm-2 col-form-label">Madre Vivo:</label>
        <div class="col-sm-2" >
            <input required id="motivo" type="text" class="" name="madrevivo" value="{{$antecedentefamiliar[0]->madrevivo}}">
        </div>
        <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padece:</label>
        <div class="col-sm-2">
            <input required id="motivo" type="text" class="" name="enfermedadquepadecemadre" value="{{$antecedentefamiliar[0]->enfermedadquepadecemadre}}">
        </div>
      </div>
      <div class="row" style="font-size: 12px">
        <label  for="inputPassword" class="col-sm-2 col-form-label">Hermanos Vivos:</label>
      <div class="col-sm-2" >
          <input required id="motivo" type="text" class="" name="hermanosvivos" value="{{$antecedentefamiliar[0]->hermanosvivos}}">
      </div>
      <label  for="inputPassword" class="col-sm-2 col-form-label">Enfermedad que padecen:</label>
      <div class="col-sm-2">
          <input required id="motivo" type="text" class="" name="enfermedadquepadecehermano" value="{{$antecedentefamiliar[0]->enfermedadquepadecehermano}}">
      </div>
    </div>
    <div class="row" style="font-size: 12px">
      <label  for="inputPassword" class="col-sm-2 col-form-label">Otros:</label>
    <div class="col-sm-2" >
        <input required id="motivo" type="text" class="" name="otros" value="{{$antecedentefamiliar[0]->otros}}">
    </div>
  </div>
            
<br><br>             
  <h5 style="font-weight: 400" >Antecedentes Personales No Patologicos   </h5>

  <div class="row" style="font-size: 12px">
    <label for="inputPassword" style="font-size: 18px;font-weight: 300"class="">Alimentacion</label>

    <label  for="inputPassword" class="col-sm-2 col-form-label">Nro de comida al dia</label>
  <div class="col-sm-2" >
      <input required id="motivo" type="text" class="" name="comida" value="{{$antecedentepersonal[0]->comida}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Cantidad:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="cantidad" value="{{$antecedentepersonal[0]->cantidad}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Calidad:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="calidad" value="{{$antecedentepersonal[0]->calidad}}">
  </div>
  <label  for="inputPassword" class="col-sm-2 col-form-label">Litros de agua al dia:</label>
  <div class="col-sm-2">
      <input required id="motivo" type="text" class="" name="agua" value="{{$antecedentepersonal[0]->agua}}">
  </div>
</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Habitacion</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Piso</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="piso" value="{{$antecedentepersonal[0]->piso}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Ventilacion:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="ventilacion" value="{{$antecedentepersonal[0]->ventilacion}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Iluminacion:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="iluminacion" value="{{$antecedentepersonal[0]->iluminacion}}">
</div>

<label  for="inputPassword" class="col-sm-2 col-form-label">Enque duerme:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="duerme" value="{{$antecedentepersonal[0]->duerme}}">
</div>
</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Habitos Higienicos</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Baño diario</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="bañodiario" value="{{$antecedentepersonal[0]->bañodiario}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Lavado de manos:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="lavadomanos" value="{{$antecedentepersonal[0]->lavadomanos}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Cambio de ropa:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="cambioderopa" value="{{$antecedentepersonal[0]->cambioderopa}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Higiene Bucal:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="higienebucal" value="{{$antecedentepersonal[0]->higienebucal}}">
</div>

</div>
<label  style="font-weight: 300"   for="inputPassword" class="">Inmunizacion</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Infancia</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="infancia" value="{{$antecedentepersonal[0]->infancia}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Reciente:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="reciente" value="{{$antecedentepersonal[0]->reciente}}">
</div>
</div>

<label  style="font-weight: 300"   for="inputPassword" class="">Toxicomanias</label>
<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Alcoholismo</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="alcoholismo" value="{{$antecedentepersonal[0]->alcoholismo}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Tabaquismo:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="tabaquismo" value="{{$antecedentepersonal[0]->tabaquismo}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Drogadiccion</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="drogadiccion" value="{{$antecedentepersonal[0]->drogadiccion}}">
</div>
</div>

<div class="row" style="font-size: 12px">
  <label  for="inputPassword" class="col-sm-2 col-form-label">Otros</label>
<div class="col-sm-2" >
    <input required id="motivo" type="text" class="" name="otros" value="{{$antecedentepersonal[0]->otros}}">
</div>
</div>
<br>
 <br>           
<h5 style="font-weight: 400" >Antecedentes Personales Patologicos   </h5>

<div class="row" style="font-size: 12px">

  <label  for="inputPassword" class="col-sm-2 col-form-label">Antecedentes Quirurgicos</label>
<div class="col-sm-2" >
    <input required  id="motivo" type="text" class="" name="antecedentesquirurgicos" value="{{$antecedentepersonal[0]->antecedentesquirurgicos}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Transfuciones:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="transfuciones" value="{{$antecedentepersonal[0]->transfuciones}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Alergias:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="alergias" value="{{$antecedentepersonal[0]->alergias}}">
</div>
<label  for="inputPassword" class="col-sm-2 col-form-label">Efermedades:</label>
<div class="col-sm-2">
    <input required id="motivo" type="text" class="" name="enfermedades" value="{{$antecedentepersonal[0]->enfermedades}}">
</div>
</div>
<br>
<button type="submit" class="btn btn-primary" onclick="showProgress()">Guardar</button>
<br>
 </form>
</div>


@endsection



  

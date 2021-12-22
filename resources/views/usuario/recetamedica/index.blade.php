  <body>
<header><p></p></header>    
 
<section >

  <article style="width: 60%;float: left;">


  <p style="font-size: 25px;font-family: Arial, Helvetica, sans-serif ;color: rgb(108, 108, 202);line-height: 15%">DR.{{$personal[0]->nombre}} {{$personal[0]->apellidopaterno}} {{$personal[0]->apellidomaterno}}</p>
  <p style="font-size: 20px;font-family: cursive;color: rgb(108, 108, 202);line-height: 15%">{{$personal[0]->especialidad->nombre}} </p>
  <p style="font-size: 20px;font-family: cursive;color: rgb(108, 108, 202);line-height: 15%"> telf. {{$personal[0]->telefono}} </p>

  <p style="font-size: 20px;color: rgb(100, 99, 96)">Fecha</p>
  <p style="font-size: 20px;line-height: 15%">{{$receta->fecha}}</p>
  <p style="font-size: 20px;line-height: 15%;color: rgb(100, 99, 96)">Nombre del paciente</p>
  <p style="font-size: 20px;font-family: Arial, Helvetica, sans-serif ;line-height: 15%">{{$cita[0]->paciente->nombre}} {{$cita[0]->paciente->apellidopaterno}} {{$cita[0]->paciente->apellidomaterno}}</p>
  <p style="font-size: 20px;font-family: cursive;color:;color: rgb(100, 99, 96);line-height: 15%">sexo </p>
  <p style="font-size: 20px;font-family: cursive;line-height: 15%">{{$cita[0]->paciente->genero}} </p>
</article>
<aside style="width: 40%;float: right;height: 100%;text-align: center">

 
    
  <img src="https://media.istockphoto.com/vectors/medical-cross-icon-vector-illustration-design-vector-id1178345163?b=1&k=20&m=1178345163&s=612x612&w=0&h=1vQuBstoEoYLEg3QxCLh2TMoE_pl8t-P1wHE-8lxAZ8=" alt="" width="200" height="150"></a>
<p style="color: blueviolet;font-size: 20px;line-height: 10%">Centro De</p>
<p style="color: blueviolet;font-size: 20px;line-height: 10%"> Especialidades Medicas</p>


</aside>

</section>


<section style="">
  <p style="font-size: 23px;text-align: left;font-weight: 100">Diagnostico: {{$diagnostico[0]->diagnostico}}</p> <hr>

<article style="margin: 5% 0%;line-height: 2%">
  <p style="font-size: 20px;text-align: left;font-weight: 700">PREESCRIPCION</p> 

  <div class="row" style="line-height: 5%" >
          <pre style="line-height: 1cm">{{$receta->prescripcion}}</pre>
   
 </div>
</article>

</section>



</body>
     
     
   
    
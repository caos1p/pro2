
@extends('usuario.layaut.layaut')

@section('contenido')
   <br>
  <div class="container" style="">
    <section>
      <article style="float: left;width: 20%">
        <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Citas De: </h4>

      </article>
      <aside  style="float: right;width: 80%;">
        <h5 style="font-weight: 800;color: blue"> {{$cita[0]->paciente->nombre}} {{$cita[0]->paciente->apellidopaterno}}  {{$cita[0]->paciente->apellidomaterno}}  </h5>
      </aside>
    </section>
    <br><br><hr>
    <section>
    @if(session('message'))
    <div class="alert alert-danger" id="alert">
        {{ session('message') }}
    </div>
@endif
    @if(session('messages'))
    <div class="alert alert-success" id="alert">
        {{ session('messages') }}
    </div>
@endif
  
  <div class="table-responsive">

   <table class=" table table-striped" id="user" style="line-height: 95%" >
         <thead  >
           
          <tr >
          
            <th >Motivo</th>
            <th >fecha</th>
            <th >hora</th>
            <th >Recetas</th>


          </tr>
        </thead>
        <tbody >
          @foreach($cita as $cit)
            <tr >
         
             <td>{{$cit->title}}</td>
             <td>{{$cit->start}}</td>
             <td>{{$cit->end}}</td>

             <td>  <a target="blank_" class="btn btn-dark btn-sm" href="{{route('imprimirreceta',[$cit->diagnostico[0]->recetamedica[0]->id])}}" class="nav-link" >Imprimir</a>
             </td>


           </tr>
          @endforeach
         </tbody>
     </table>

    </div>
  
  </div>
</section>
@endsection


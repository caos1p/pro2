
@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  Horario </h4><hr>

  
  <div class="table-responsive">
    <a  class="btn btn-primary" style="background-color:  rgb(3, 34, 15)" role="button" href="{{route('horario.create')}}">Nuevo</a>

   <table class=" table table-striped" id="user" style="line-height: 95%" >         <thead>
           
          <tr>
      
            <th>ID</th>
            <th>Turno</th>
            <th>Hora De Ingreso</th>
            <th>Hora De Salida</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody >
          @foreach($horario as $error)
            <tr>
             <td>{{$error->id}}</td>
             <td>{{$error->turno}}</td>
             <td>{{$error->horaentrada}}</td>
             <td>{{$error->horadesalida}}</td>

          
             <td  style="padding: 0%">         
              <a class="btn btn-sm btn-light" href="{{route('horario.edit',[$error->id])}}">Editar</a>

              <!-- Button trigger modal -->
             <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Eliminar
             </button>

             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
               <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <div class="modal-body">
                <h3>¿Estas seguro que quieres eliminar?</h3>
              </div>
      <div class="modal-footer">
        <a class="btn btn-sm btn-danger" href="{{route('horario.destroy',[$error->id])}}">Eliminar</a> 

      </div>
    </div>
  </div>
</div>
             </td>
           </tr>
          @endforeach
         </tbody>
     </table>
    </div>
  
  </div>
 
@endsection


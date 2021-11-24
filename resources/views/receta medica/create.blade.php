@extends('layaut')

@section('contenido')
<h3 style="text-align: center"> formulario de creacion</h3><hr>
   <div class="container-sm">
       
          <form class="row g-3" action="{{route('rol.store')}}" method="POST">
            @csrf
     
              <div class="col-md-6">
                <label for="nombre">Detalle    </label>
                  <input type="text" class="form-control" name="prescripcion" value="{{old('prescripcion')}}">
              </div>

           <div class="card-action right-align">
            <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>

  </div>  
 </form>



 <div class="table-responsive">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nuevo
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
          <form class="row g-3" action="{{route('diagnostico.store')}}" method="POST">
            @csrf   
            <input  type="hidden"  type="text" class="form-control" name="id" value="{{$id}}">
  
              <div class="col-md-6">
                <label for="nombre">nombre    </label>
                  <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
              </div>  
              
              <div class="col-md-6">
                <label for="nombre">descripcion    </label>
                  <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
              </div> 
              <div class="modal-footer">
                  <button type="submit" class="btn btn-danger" onclick="showProgress()">Guardar</button>
              </div> 
          </form>
        </div>
      
      </div>
    </div>
  </div>
 <table class=" table table-striped" id="user" style="line-height: 65%" >
       <thead>
         
        <tr>
        
          <th>NOMBRE</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody >
      
       </tbody>
   </table>
  </div>
</div>


@endsection


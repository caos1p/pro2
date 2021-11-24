
@extends('layaut')

@section('contenido')
   
  <div class="container" style="">
    <h4  style=" font-family: 'Courier New', Courier, monospace; "  >  USUARIO </h4><hr>
 

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button onclick="" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Paciente</button>
      </li>
      <li class="nav-item" role="presentation">
        <button  onclick="window.location='/usuario/medico'" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Personal</button>
      </li>
    
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    </div>

  <div class="table-responsive">
   <table class=" table table-striped" id="user" style="line-height: 65%" >
         <thead>
           
          <tr>
      
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>ROL</th>
          </tr>
        </thead>
        <tbody >
          @foreach($errors as $error)
            <tr>
             <td>{{$error->id}}</td>
             <td>{{$error->name}}</td>
             <td>{{$error->email}}</td>
             <td>{{$error->tipo}}</td>
      
           </tr>
          @endforeach
         </tbody>
     </table>
     {{$errors->links("vendor.pagination.simple-default") }}

    </div>
  
  </div>
 
@endsection


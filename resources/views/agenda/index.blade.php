@extends('home')

@section('contenido')
<div class="container" style="">
  <h4  style=" font-family: 'Courier New', Courier, monospace; "  >Agenda </h4><hr>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Agenda</button>
  </li>
  <li class="nav-item" role="presentation">
    <button onclick="window.location='/citamedica'"  class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Reunion</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
</div>
</div>
<div style="margin: 0% auto;width: 700px;color: rgb(53, 2, 2);"  id='calendar'></div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalagenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fecha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
    
        <form action="">

        <div class="col-md-6">
          <label for="titulo">Titulo    </label>
            <input id="titulo" type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
         
            @error('titulo')
             <span class="error">{{$message}}</span>
            @enderror
     
        </div>
           
          <div class="col-md-6">
            <label for="fecha">Fecha    </label>
              <input id="a" type="date" class="form-control" name="fecha" value="{{old('fecha')}}">
           
              @error('fecha')
               <span class="error">{{$message}}</span>
              @enderror
       
          </div>
       
   
            <div class="md-form md-outline">
            <input type="time" id="hora" class="form-control" placeholder="Select time" name="hora" value= "{{old('hora')}}">
            <label for="hora">Hora   </label>
            </div>
     
          </form>
      </div>
      <div class="modal-footer">
        <a style="color: rgb(5, 5, 124)" class="btn btn-danger">Ver</a>
      </div>
    </div>
  </div>
</div>

@endsection
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {


 initialView: 'dayGridMonth',
 locale:"es",
 headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,timeGridWeek,timeGridDay'
  },




  events:{ url: ('/agenda/show'),
             dataType:"json"},
                
 
  slotLabelFormat:{
             hour: '2-digit',
             minute: '2-digit',
             hour12: true
             },//se visualizara de esta manera 01:00 AM en la columna de horas
eventTimeFormat: {
               hour: '2-digit',
               minute: '2-digit',
               hour12: true
              },//y este código se visualizara de la misma manera pero en   
           
              
 
  eventClick: function(arg) {
    var id = arg.event.id;
        $.ajax({
      url: ('/agenda/edit/'+id),
      type:"get",
      dataType: 'json',

      success: function(data) {
            $('#titulo').val(data.title);
            $('#a').val(data.start);
            $('#hora').val(data.end);
            $('#modalagenda').modal("show");
        }
    });
  },



    });
   
    calendar.render();
  });

</script>



<div class="row" style=" " > 
  <p style="font-size: 15px">Consultorio Medico XYZ </p>    
  <div  style="float: right;width:30%">
    <table  style="border:2px solid #000;  padding: 0.7em;">
        
      <tr>
    
      <td style="font-size: 15px">FECHA <hr></td>
      </tr>
      <tr> <td  style="font-size: 15px">{{$date}} </td></tr>
    
    </table>
    </div>
  <p style="font-weight: 800; font-size: 25px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center">REPORTES DE VENTAS</p>

    </div>
<br><br>

  

  
    



<div class="container-fluid" style="width: 100%" >
  <table class="highlight" style="border-collapse: collapse; border: 1px solid #000;  padding: 0.3em; width: 100%;" >
    <thead>
      <tr >
      
        <th style="border: 1px solid #000;  padding: 0.3em;">Motivo</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Fecha</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Hora</th>
      
        <th style="border: 1px solid #000;  padding: 0.3em;">Nombre De Paciente</th>
  
       
   
      </tr>
    </thead>
    <tbody>
      @foreach( $proforma as $proform )
       <tr>
    
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->title}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->start}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->end}}</td>     
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->paciente->nombre }}{{$proform->paciente->apellidopaterno }}</td>
      </tr>
      @endforeach
     </tbody>
   </table>
 
 </div>



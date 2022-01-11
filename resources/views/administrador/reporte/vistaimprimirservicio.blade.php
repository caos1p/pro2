

@extends('link')

@section('contenido')



<div class="row" style=" " >     

  <p style="font-size: 15px">EL MURO </p>    
  <div  style="float: right;width:30%">
    <table  style="border:2px solid #000;  padding: 0.7em;">
        
      <tr>
    
      <td style="font-size: 15px">FECHA <hr></td>
      </tr>
      <tr> <td  style="font-size: 15px">{{$date}} </td></tr>
    
    </table>
    </div>
  <p style="font-weight: 800; font-size: 25px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center">REPORTES DE SERVICIOS</p>

    </div><br>
 

  

  
    



<div class="container-fluid" style="width: 100%" >
  <table class="highlight" style="border-collapse: collapse; border: 1px solid #000;  padding: 0.3em; width: 100%;" >
    <thead>
      <tr >
      
        <th style="border: 1px solid #000;  padding: 0.3em;">cliente</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Fecha</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Total</th>
      

@extends('link')

@section('contenido')



<div class="row" style=" " >     
  <p style="font-size: 15px">EL MURO </p>    
  <div  style="float: right;width:30%">
    <table  style="border:2px solid #000;  padding: 0.7em;">
        
      <tr>
    
      <td style="font-size: 15px">FECHA <hr></td>
      </tr>
      <tr> <td  style="font-size: 15px">{{$date}} </td></tr>
    
    </table>
    </div>
  <p style="font-weight: 800; font-size: 25px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center">REPORTES DE SERVICIOS</p>

    </div>
 <br>

  

  
    



<div class="container-fluid" style="width: 100%" >
  <table class="highlight" style="border-collapse: collapse; border: 1px solid #000;  padding: 0.3em; width: 100%;" >
    <thead>
      <tr >
        <th style="border: 1px solid #000;  padding: 0.3em;">ID</th>

        <th style="border: 1px solid #000;  padding: 0.3em;">cliente</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Fecha</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Total</th>
      
  
       
   
      </tr>
    </thead>
    <tbody>
      @foreach( $proforma as $proform )
       <tr>
        <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->id}}</td>

         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->persona->nombre}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->fechae}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->nota}}</td>     
      </tr>
      @endforeach
     </tbody>
   </table>
 
 </div>


  @endsection  
       
   
      </tr>
    </thead>
    <tbody>
      @foreach( $proforma as $proform )
       <tr>
    
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->persona->nombre}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->fechae}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->nota}}</td>     
      </tr>
      @endforeach
     </tbody>
   </table>
 
 </div>


  @endsection
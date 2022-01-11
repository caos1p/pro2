

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
  <p style="font-weight: 800; font-size: 25px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align: center">REPORTES DE COMPRAS</p>

    </div><br>
 

  

  
    



<div class="container-fluid" style="width: 100%" >
  <table class="highlight" style="border-collapse: collapse; border: 1px solid #000;  padding: 0.3em; width: 100%;" >
    <thead>
      <tr >
      
        <th style="border: 1px solid #000;  padding: 0.3em;">Proveedor</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Fecha</th>
        <th style="border: 1px solid #000;  padding: 0.3em;">Total</th>
      
        <th style="border: 1px solid #000;  padding: 0.3em;">Tipo</th>
  
       
   
      </tr>
    </thead>
    <tbody>
      @foreach( $proforma as $proform )
       <tr>
    
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->proveedor->nombre}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->fecha}}</td>
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->total}}</td>     
         <td style=" border-collapse: collapse;  border: 1px solid #000 ;  padding: 0.3em;text-align: center">{{$proform->tipo}}</td>
      </tr>
      @endforeach
     </tbody>
   </table>
 
 </div>


  @endsection
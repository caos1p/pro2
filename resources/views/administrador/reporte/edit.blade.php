@extends('layout')

@section('contenido')
<form action="{{route('cliente.update',[$cliente->id])}}" method="POST">
    @csrf
    @method("put")
    <p>
       <label for="name">name;
           <input type="text" name="name" value="{{$cliente->name}}">
           @error('name')
            <span class="error">{{$message}}</span>
           @enderror
       </label>
    </p>
    <p>
        <label for="apellido">apellido;
            <input type="text" name="apellido" value="{{$cliente->apellido}}">
            @error('apellido')
             <span class="error">{{$message}}</span>
            @enderror
        </label>
     </p>
     <p>
        <label for="tipo_documento">tipo_documento;
            <input type="text" name="tipo_documento" value="{{$cliente->tipo_documento}}">
            @error('tipo_documento')
             <span class="error">{{$message}}</span>
            @enderror
        </label>
     </p>
     <p>
        <label for="N_documento">N_documento;
            <input type="text" name="ci" value="{{$cliente->N_documento}}">
            @error('N_documento')
             <span class="error">{{$message}}</span>
            @enderror
        </label>
     </p>
     <p>
        <label for="direccion">direccion;
            <input type="text" name="direccion" value="{{$cliente->direccion}}">
            @error('direccion')
             <span class="error">{{$message}}</span>
            @enderror
        </label>
     </p>
    <p>
        <label for="telefono">telefono;
            <input type="text" name="telefono" value="{{$cliente->telefono}}">
            @error('telefono')
             <span class="error">{{$message}}</span>
            @enderror
        </label>
     </p>

    <p>
       <label for="email">Email:
        <input type="email" name="email" class="validate" value="{{$cliente->email}}">
        @error('email')
         <span class="error">{{$message}}</span>
         @enderror
       </label>
    </p>


    <p>
        <label for="password">Password:
            <input type="password" name="password" class="validate" >
            @error('password')
             <span class="error">{{$message}}</span>
             @enderror
        </label>
    </p>
    <div class="card-action right-align">
        <button type="submit" class="waves-affect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
    </div>

 </form>


@endsection

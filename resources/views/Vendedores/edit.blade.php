@extends('layout')
@section('header') VENDEDORES @endsection
@section('content')
        <form action="{{route('vendedores.update', $vendedor->id) }}" method="POST">
        @csrf 
        @method('PUT')
            <label>Nombre del Vendedor</label>
            <input type="text" name="nombre_apellido" id="Nombres y Apellidos" value="{{ $vendedor->nombre_apellido }}"/><br>
            @if($errors->has('nombre_apellido'))
                <div class="error">{{$errors->first('nombre_apellido')}}</div>
            @endif
            <label>Profesión</label>
            <input type="text" name="profesion" id="profesion" value="{{ $vendedor->profesion}}"/><br>
            @if($errors->has('profesion'))
                <div class="error">{{$errors->first('profesion')}}</div>
            @endif
            <label>Grado Académico</label>
            <input type="text" name="grado_academico" id="grado_academico" value="{{ $vendedor->grado_academico }}"/><br>
            <label>Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ $vendedor->telefono }}"/><br>
            @if($errors->has('telefono'))
                <div class="error">{{$errors->first('telefono')}}</div>
            @endif
            <button type="submit">Guardar Vendedor</button>
        </form>
    </body>
    @endsection
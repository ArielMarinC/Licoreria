@extends('layout')
@section('header') VENDEDORES @endsection
@section('content')

<div class="container">
    

        <form action="{{route('vendedores.store') }}" method="POST">
        @csrf 
            <label>Nombre del Vendedor</label>
            <input type="text" name="nombre_apellido" id="Nombres y Apellidos" value="{{ old('nombre_apellido') }}"/>
            @if($errors->has('nombre_apellido'))
                <div class="error">{{$errors->first('nombre_apellido')}}</div>
            @endif
            <br>
            <label>Profesión</label>
            <input type="text" name="profesion" id="profesion" value="{{ old('profesion') }}"/><br>
            @if($errors->has('profesion'))
                <div class="error">{{$errors->first('profesion')}}</div>
            @endif
            <label>Grado Académico</label>
            <input type="text" name="grado_academico" id="grado_academico" value="{{ old('grado_academico') }}"/><br>
            <label>Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}"><br>           
             @if($errors->has('telefono'))
                <div class="error">{{$errors->first('telefono')}}</div>
            @endif
            <button type="submit">Guardar Vendedor</button>
        </form>
</div>

@endsection


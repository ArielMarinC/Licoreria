@extends('layout')
@section('content')
<h2>Ver Vendedor</h2>
<br>
<label><strong>Nombres y Apellidos:</strong> {{ $vendedor->nombre_apellido }}</label><br>
<label><strong>Profesión:</strong> {{ $vendedor->profesion }}</label><br>
<label><strong>Grado Académico:</strong> {{ $vendedor->grado_academico }}</label><br>
<label><strong>Teléfono:</strong> {{ $vendedor->telefono }}</label><br>
@if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif 
<br>
<form action="{{ route('vendedores.destroy', $vendedor->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Vendedor')">
</form>
@endsection
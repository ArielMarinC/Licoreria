@extends('layout')
@section('content')
    <h2>Editar Vendedor</h2>
    <form action="{{ route('vendedores.update', $vendedor->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ $vendedor->nombre_apellido }}">
        <label>Profesión:</label>
        <input type="text" name="profesion" placeholder="Profesión" value="{{ $vendedor->profesion }}">
        <label>Grado Academico:</label>
        <input type="text" name="grado_academico" placeholder="Grado Academico" value="{{ $vendedor->grado_academico }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $vendedor->telefono }}">
        <input type="submit" value="Guardar">
    </form>
@endsection
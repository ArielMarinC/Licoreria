@extends('layout')
@section('content')
<div class="content">
    <x-menu/>
</div>
<form action="{{ route('clientes.store') }} method="POST>
@csrf
    <label>Clientes</label>
    <input type="text" name="nombre_apellido"/>
    @if($errors->has('nombre_apellido'))
        <div class="error">{{ $errors->first('nombre_apellido') }}</div>
    @endif
    <label>Edad</label>
    <input type="text" name="edad"/>
    @if($errors->has('edad'))
        <div class="error">{{ $errors->first('edad') }}</div>
    @endif
    <label>Teléfono</label>
    <input type="text" name="telefono"/>
    @if($errors->has('telefono'))
        <div class="error">{{ $errors->first('telefono') }}</div>
    @endif
    <label>Dirección</label>
    <input type="text" name="Dirección"/>
    @if($errors->has('direccion'))
        <div class="error">{{ $errors->first('direccion') }}</div>
    @endif
    <button type="submit">Guardar</button>
</form>
@endsection
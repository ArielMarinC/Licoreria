@extends('layout')
@section('header') VENDEDORES @endsection
@section('content')


<main>
<h1>Listado de Vendedores</h1>
<div class="actions">       
    <a class="button-link" href="/vendedores/create">Nuevo Vendedor</a>
</div>
        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Profesión</th>
                <th>Grado Académico</th>
                <th>Teléfono</th>
            </tr>
            @foreach ($vendedores as $vendedor)
            <tr>
                <td>{{ $vendedor->nombre_apellido }}</td>
                <td>{{ $vendedor->profesion }}</td>
                <td>{{ $vendedor->grado_academico }}</td>
                <td>{{ $vendedor->telefono }}</td>
                <td>
                <a href="{{ route('vendedores.edit', $vendedor->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </table>
</main>
<div>
    <p>Todos los derechos reservados Actualización I UCATEC</p>
</div>

@endsection
        
<style>
    body {
        margin: auto;
        padding: 50px;
    }
    table {
        border-collapse:collapse;
        width: 100%;
    }
    table, td, th {
        border: 1px solid black;
    }
</style>
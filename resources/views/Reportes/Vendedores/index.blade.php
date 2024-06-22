@extends('layout')
@section('header') VENDEDORES @endsection
@section('content')


<main>
<h1>Reporte de Vendedores y Profesiones</h1>
<a href="{{ route('reports.teachers.pdf')">IMPRIMIR REPORTE</a>

        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Profesión</th>
                <th>Grado Académico</th>
                <th>Teléfono</th>
                <th>Sucursal</th>
            </tr>
            @foreach ($vendedores as $vendedor)
            <tr>
                <td>{{ $vendedor->nombre_apellido }}</td>
                <td>{{ $vendedor->profesion }}</td>
                <td>{{ $vendedor->grado_academico }}</td>
                <td>{{ $vendedor->telefono }}</td>
                <td>{{ $sucursal->sucursal }}</td>
                <td>
                    @foreach ( $vendedor->tiendas as $tienda)
                    {{ $tienda->name}}<br>
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
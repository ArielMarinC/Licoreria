@extends('layout')
@section('content')
        <h2>Listado de Vendedores</h2>
        <a class="new-button" href="{{ route('vendedores.create') }}">Nuevo vendedor</a>
        <table>
        <th>Acción</th>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Profesión</th>
                <th>Grado Academico</th>
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
                    <a href="{{ route('vendedores.show', $vendedor->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
@endsection
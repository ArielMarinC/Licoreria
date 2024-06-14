<!DOCTYPE html>

<html>
    <head>
    @extends('layout')
@section('content')
        <h2>Listado de Vendedores</h2>
        <table>
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
            </tr>
            @endforeach
        </table>
@endsection
    </body>

    
</html>


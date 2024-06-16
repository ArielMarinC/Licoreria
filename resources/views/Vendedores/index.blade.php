<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
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
                <td>
                <a href="{{ route('vendedores.show', $vendedor->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>

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
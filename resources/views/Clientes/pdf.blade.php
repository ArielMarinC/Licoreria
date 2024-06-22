<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
        <h1>Listado de Clientes</h1>
        <a href="/clientes/create">Nuevo Vendedor</a>
        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
            @foreach ($vendedores as $vendedor)
            <tr>
                <td>{{ $cliente->nombre_apellido }}</td>
                <td>{{ $cliente->edad }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>
                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
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
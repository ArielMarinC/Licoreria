<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
        <h2>Listado de Clientes</h2>
        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
            @foreach ($clientes as $clientes)
            <tr>
                <td>{{ $cliente->nombre_apellido }}</td>
                <td>{{ $cliente->edad }}</td>
                <td>{{ $vendedor->telefono }}</td>
                <td>{{ $vendedor->direccion }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
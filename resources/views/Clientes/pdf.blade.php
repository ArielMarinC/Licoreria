<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Licoreria</title>
    </head>
    <body>
        <h2>Reporte Clientes</h2>
        <br>
        <table>
            <tr>
                <th>Cliente</th>
                <th>Edad</th>
                <th>Sucursal</th>
            </tr>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre_apellido }}</td>
                    <td>{{ $cliente->edad }}</td>
                    <td>
                        @foreach($cliente->tiendas as $tienda)
                            {{ $tienda->sucursal }}<br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
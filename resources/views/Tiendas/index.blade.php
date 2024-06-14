<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
        <h2>Listado de Tiendas</h2>
        <table>
            <tr>
                <th>sucursal</th>
                <th>zona</th>
                <th>horas_venta</th>
                <th>vendedor</th>
                <th>Clientes</th>
            </tr>
            @foreach ($Tiendas as $tienda)
            <tr>
                <td>{{ $tienda->msucursal }}</td>
                <td>{{ $tienda->zona }}</td>
                <td>{{ $tienda->horas_venta }}</td>
                <td>{{ $tienda->vendedor->nombre_apellido }}</td>
                <td>
                @foreach($tienda->clientes as $cliente)
                    {{ $cliente->nombre_apellido }} <br>
                @endforeach
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
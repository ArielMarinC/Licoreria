
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
                <th>Sucursal</th>
                <th>Zona</th>
                <th>Horas Venta</th>
                <th>Vendedor</th>
                <th>Clientes</th>
            </tr>
            @foreach ($tiendas as $tienda)
            <tr>
                <td>{{ $tienda->sucursal }}</td>
                <td>{{ $tienda->zona }}</td>
                <td>{{ $tienda->horas_venta }}</td>
                <td>{{ $tienda->vendedor->nombre_apellido }}</td>
                <td>
                @foreach($tienda->clientes as $cliente)
                    {{ $cliente->nombre_apellido }} <br>
                @endforeach
                </td>
                <td>
                <a href="{{ route('tiendas.show', $tienda->id) }}">Ver</a>
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
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
    <x-layout>
        <h2>Listado de Tiendas</h2>
        <table>
            <tr>
                <th>sucursal</th>
                <th>zona</th>
                <th>horas_venta</th>
                <th>Vendedor</th>
                <th>Cliente</th>
            </tr>
            @foreach ($cursos as $curso)
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
            </tr>
            @endforeach
        </table>
</x-layout>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comercial</title>
    </head>
    <body>
        <h2>Reporte Vendedores</h2>
        <br>
        <table>
            <tr>
                <th>Vendedor</th>
                <th>Profesión</th>
                <th>Sucursal</th>
            </tr>
            @foreach ($vendedores as $vendedor)
                <tr>
                    <td>{{ $vendedor->nombre_apellido }}</td>
                    <td>{{ $vendedor->edad }}</td>
                    <td>
                        @foreach($vendedor->tiendas as $tienda)
                            {{ $curso->sucursal }}<br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
<html lang="en">
    <body>
        <table>
            <tr>
                <th>Cliente</th>
                <th>Edad</th>
                <th>Sucursal</th>
            </tr>
            @foreach ($data['clientes'] as $cliente)
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
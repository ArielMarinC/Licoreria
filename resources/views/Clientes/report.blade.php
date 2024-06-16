<x-layout>
    <h2>Reporte Tiendas</h2>
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
</x-layout>
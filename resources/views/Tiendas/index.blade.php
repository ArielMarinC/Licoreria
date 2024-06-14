<!DOCTYPE html>

<x-layout>
        <h2>Listado de Tiendas</h2>
        <a class="new-button" href="{{ route('tiendas.create') }}">Nueva Tienda</a>
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
            <td>
                    <a href="{{ route('tiendas.edit', $tienda->id) }}">Editar</a>
                    <a href="{{ route('tiendas.show', $tienda->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
</x-layout>
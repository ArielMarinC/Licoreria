    <x-layout>
        <h2>Listado de Clientes</h2>
        <a class="new-button" href="{{ route('clientes.create') }}">Nuevo Cliente</a>
        <table>
        <th>Acción</th>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>
            </tr>
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre_apellido }}</td>
                <td>{{ $cliente->edad }}</td>
                <td>{{ $vendedor->telefono }}</td>
                <td>{{ $vendedor->direccion }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <a href="{{ route('clientes.show', $cliente->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
</x-layout>

@extends('layout')
@section('content')


        <main>
        <h1>Listado de Clientes</h1>
        <div class="actions">
        <a class="button-link" href="#">Nuevo Cliente</a>
        </div>
        <table>
            <tr>
                <th>Cliente</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>

            </tr>
<tbody>
    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente->nombre_apellido}}</td>
        <td>{{ $cliente->edad}}</td>
        <td>{{ $cliente->telefono}}</td>
        <td>{{ $cliente->direccion}}</td>
    </tr>
</tbody>
        </table>
</main>

@endsection

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
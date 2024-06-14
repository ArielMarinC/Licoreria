<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>
    </head>
    <body>
        <h2>Listado de Vendedores</h2>
        <table>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Profesión</th>
                <th>Grado Academico</th>
                <th>Teléfono</th>
            </tr>
            @foreach ($vendedores as $vendedores)
            <tr>
                <td>{{ $vendedor->nombre_apellido }}</td>
                <td>{{ $vendedor->profesion }}</td>
                <td>{{ $vendedor->grado_academico }}</td>
                <td>{{ $vendedor->telefono }}</td>
            </tr>
            @endforeach
        </table>
    </body>

    
</html>
<!doctype html>
<html lang="en">
    <html>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compartible" content="ie=edge">
        <titler>Cliente</titler>
    </head>
    <body>
        <form action="{{route('clientes.update', $cliente->id) }}" method="POST">
        @csrf 
        @method('PUT')
            <label>Nombre del Cliente</label>
            <input type="text" name="nombre_apellido" id="Nombres y Apellidos" value="{{ $cliente->nombre_apellido }}"/><br>
            <label>Edad</label>
            <input type="text" name="edad" id="edad" value="{{ $cliente->edad}}"/><br>
            <label>Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}"/><br>
            <label>Dirección</label>
            <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}"/><br>
            <button type="submit">Guardar Cliente</button>
        </form>
    </body>

<!doctype html>
<html lang="en">
    <html>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compartible" content="ie=edge">
        <titler>Vendedor</titler>
    </head>
    <body>
        <form action="{{route('vendedores.update', $vendedor->id) }}" method="POST">
        @csrf 
        @method('PUT')
            <label>Nombre del Vendedor</label>
            <input type="text" name="nombre_apellido" id="Nombres y Apellidos" value="{{ $vendedor->nombre_apellido }}"/><br>
            <label>Profesión</label>
            <input type="text" name="profesion" id="profesion" value="{{ $vendedor->profesion}}"/><br>
            <label>Grado Académico</label>
            <input type="text" name="grado_academico" id="grado_academico" value="{{ $vendedor->grado_academico }}"/><br>
            <label>Teléfono</label>
            <input type="text" name="telefono" id="telefono" value="{{ $vendedor->telefono }}"/><br>
            <button type="submit">Guardar Vendedor</button>
        </form>
    </body>
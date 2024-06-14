<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Licoreria</title>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>

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

<ul>
    <li><a href="{{ route('profesores.index') }}">Profesores</a></li>
    <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
    <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
</ul>
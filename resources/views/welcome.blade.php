<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Licoreria</title>

        </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">



    @php  $count = 0;@endphp
    @foreach($clientes as $cliente)
        {{ $count++ }} {{$cliente->nombre_apellido}} {{ $cliente->country }}<br>
    @endforeach
    </body>
</html>

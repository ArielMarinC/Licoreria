<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('header')</title>
    </head>
    <body>
    <div>
    @yield('menu')
    </div>
    <div>
    <ul>
            <li><a href="{{ route('vendedores.index') }}">Vendedores</a></li>
            



        </ul>

    </div>
    <div>
        @yield('content')
    </div>
    <footer>
        @yield('footer')
    </footer>
    </body>
    </html>


    <script>
        function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
}
</script>
       
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
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #e7e7e7;
        background-color: #f3f3f3;
    }
    th{
        text-transform: uppercase;
        background-color: #cbd5e0;
    }
    li {
        float: left;
    }
    li a {
        display: block;
        color: #666;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover:not(.active) {
        background-color: #ddd;
    }
    li a.active {
        color: white;
        background-color: #04AA6D;
    }
    .new-button {
   display: inline-block;
   padding: 10px 20px;
   text-decoration: none;
   background-color: #3498db;
   color: #ffffff;
   border-radius: 5px;
   transition: background-color 0.3s;
}
.new-button:hover {
   background-color: #2980b9;
}
input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    p {
        color: red;
    }
    .actions {
        padding-button: 12px;
    }
    .button-link{
        padding: 6px;
        background-color: #FFFF00;
        color: red;
        border: 8px;
    }
    .error{
        color: red;
    }

</style>


<x-layout>
<h2>Ver Cliente</h2>
<br>
<label><strong>Nombres y Apellidos:</strong> {{ $cliente->nombre_apellido }}</label><br>
<label><strong>Edad:</strong> {{ $cliente->edad }}</label><br>
<label><strong>Teléfono:</strong> {{ $cliente->telefono }}</label><br>
<label><strong>Dirección:</strong> {{ $cliente->direccion }}</label><br>
@if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif
<br>
<form action="{{ route('clientes.destroy', $cliente->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Cliente')">
</form>
</x-layout>
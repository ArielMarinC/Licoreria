<x-layout>
    <h2>Ver Tienda</h2>
    <br>
    <label>sucursal: {{ $tienda->sucursal }}</label><br>
    <label>zona: {{ $tienda->zona }}</label><br>
    <label>Horas Venta: {{ $tienda->horas_venta }}</label><br>
    <label>Vendedor: {{ $tienda->vendedor->nombre_apellido }}</label><br>
    <label>Clientes:</label>
    @if($errors->any())
    <p class="error-message">{{$errors->first('mensaje')}}</p>
@endif
<br>
<form action="{{ route('tiendas.destroy', $tienda->id) }}" method ="POST" >
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Tienda')">
</form>
    <ul>
        @foreach($tienda->clientes as $cliente)
            <li>{{ $cliente->nombre_apellido }}</li><br>
        @endforeach
    </ul>
</x-layout>
<x-layout>
<h2>Editar Tienda</h2>
<form action="{{ route('tienda.update', $tienda->id) }}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    <label>Sucursal:</label>
    <input type="text" name="sucursal" placeholder="sucursal" value="{{ $tienda->sucursal }}">
    <label>zona:</label>
    <input type="text" name="zona" placeholder="zona" value="{{ $tienda->zona }}">
    <label>Horas Venta:</label>
    <input type="text" name="horas_venta" placeholder="Horas Venta" value="{{ $tienda->horas_venta }}">
    <select id="vendedor_id" name="vendedor_id">
        @foreach($vendedores as $vendedor)
            @if($vendedor->id == $tienda->vendedor_id)
                <option value="{{$vendedor->id}}" selected> {{ $vendedor->nombre_apellido }}</option>
            @else
                <option value="{{$vendedor->id}}"> {{ $vendedor->nombre_apellido }}</option>
            @endif
        @endforeach
    </select>
    <select id="cliente_ids" name="cliente_ids[]" multiple>
        @foreach($clientes as $cliente)
            @php $valor = 0; @endphp
            @foreach($tienda->clientes as $cliente_tienda_valor)
                @if($cliente->id == $cliente_tienda_valor->id)
                    @php $valor = 1; @endphp
                @endif
            @endforeach
            @if($valor == 1)
                <option value="{{$cliente->id}}" selected> {{ $cliente->nombre_apellido }}</option>
            @else
                <option value="{{$cliente->id}}"> {{ $cliente->nombre_apellido }}</option>
            @endif
        @endforeach
    </select>
    <input type="submit" value="Guardar">
</form>
</x-layout>
<x-layout>
<h2>Nueva Tienda</h2>
<form action="{{ route('tiendas.store') }}" method ="POST">
    @csrf
    <label>Sucursal:</label>
    <input type="text" name="sucursal" placeholder="sucursal">
    <label>zona:</label>
    <input type="text" name="zona" placeholder="zona">
    <label>horas_venta:</label>
    <input type="text" name="horas_venta" placeholder="Horas_venta">
    <label>Vendedor:</label>
    <select id="vendedor_id" name="vendedor_id">
        @foreach($vendedores as $vendedor)
            <option value="{{$vendedor->id}}"> {{ $vendedor->nombre_apellido }}</option>
        @endforeach
    </select>
    <select id="cliente_ids" name="cliente_ids[]" multiple>
        @foreach($clientes as $cliente)
            <option value="{{$cliente->id}}"> {{ $cliente->nombre_apellido }}</option>
        @endforeach
    </select>
    <input type="submit" value="Guardar">
</form>
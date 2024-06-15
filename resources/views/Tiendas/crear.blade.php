<x-layout>
<h2>Nueva Tienda</h2>
<form action="{{ route('tiendas.store') }}" method ="POST">
    @csrf
    <label>Sucursal:</label>
    <input type="text" name="sucursal" placeholder="sucursal" value="{{ old('sucursal') }}">
    @error('sucursal')
    <p class="error-message">{{ $message }}</p>
@enderror
    <label>zona:</label>
    <input type="text" name="zona" placeholder="zona" value="{{ old('zona') }}">
    @error('zona')
    <p class="error-message">{{ $message }}</p>
@enderror
    <label>horas_venta:</label>
    <input type="text" name="horas_venta" placeholder="Horas_venta">
    <label>Vendedor:</label>
    <select id="vendedor_id" name="vendedor_id">
        @foreach($vendedores as $vendedor)
        @if(old('vendedor_id') == $vendedor->id)
        <option value="{{$vendedor->id}}" selected>{{$vendedor->nombre_apellido }} </option>
    @else 
        <option value="{{$vendedor->id}}">{{ $vendedor->nombre_apellido }} </option>
    @endif
@endforeach
    </select>
        @error('vendedor_id')
        <p class="error-message">{{ $message }}</p>
@enderror
    <select id="cliente_ids" name="cliente_ids[]" multiple>
        @foreach($clientes as $cliente)
        @if(old('cliente_ids') == $cliente->id)
        <option value="{{$cliente->id}}" selected>{{$cliente->nombre_apellido }} </option>
    @else 
        <option value="{{$cliente->id}}">{{ $cliente->nombre_apellido }} </option>
    @endif
    @endforeach
        </select>
    @error('cliente_ids')
        <p class="error-message">{{ $message }}</p>
@enderror
    <input type="submit" value="Guardar">
</form>
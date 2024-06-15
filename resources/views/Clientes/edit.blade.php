<x-layout>
    <h2>Editar cliente</h2>
    <form action="{{ route('cliente.update', $cliente->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres y Apellidos:</label>
        <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ $cliente->nombre_apellido }}">
        <label>edad:</label>
        <input type="text" name="edad" placeholder="Edad" value="{{ $cliente->edad }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $cliente->telefono }}">
        <label>Dirección</label>
        <input type="text" name="direccion" placeholder="Dirección" value="{{ $cliente->direccion }}">
        <input type="submit" value="Guardar">
    </form>
</x-layout>
@extends('layouts.app')

@section('content')
    <h1>Editar Bodega</h1>

    <form action="{{ route('bodegas.update', $bodega->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $bodega->nombre }}" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="{{ $bodega->direccion }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $bodega->email }}" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" value="{{ $bodega->telefono }}" required>

        <label for="persona_contacto">Persona de Contacto:</label>
        <input type="text" name="persona_contacto" value="{{ $bodega->persona_contacto }}" required>

        <label for="anno_fundacion">Año de Fundación:</label>
        <input type="number" name="anno_fundacion" value="{{ $bodega->anno_fundacion }}" required>

        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios">{{ $bodega->comentarios }}</textarea>

        <label for="tiene_restaurante">¿Tiene Restaurante?</label>
        <input type="radio" name="tiene_restaurante" value="1" {{ $bodega->tiene_restaurante ? 'checked' : '' }}> Sí
        <input type="radio" name="tiene_restaurante" value="0" {{ !$bodega->tiene_restaurante ? 'checked' : '' }}> No

        <label for="tiene_hotel">¿Tiene Hotel?</label>
        <input type="radio" name="tiene_hotel" value="1" {{ $bodega->tiene_hotel ? 'checked' : '' }}> Sí
        <input type="radio" name="tiene_hotel" value="0" {{ !$bodega->tiene_hotel ? 'checked' : '' }}> No

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection

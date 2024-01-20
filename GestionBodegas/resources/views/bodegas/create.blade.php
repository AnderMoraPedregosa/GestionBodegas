
@extends('layouts.app')

@section('content')
    <h1>Añadir Bodega</h1>

    <form action="{{ route('bodegas.store') }}" method="post">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" required>

        <label for="persona_contacto">Persona de Contacto:</label>
        <input type="text" name="persona_contacto" required>

        <label for="anno_fundacion">Año de Fundación:</label>
        <input type="number" name="anno_fundacion" required>

        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios"></textarea>

        <label for="tiene_restaurante">¿Tiene Restaurante?</label>
        <input type="radio" name="tiene_restaurante" value="1"> Sí
        <input type="radio" name="tiene_restaurante" value="0" checked> No

        <label for="tiene_hotel">¿Tiene Hotel?</label>
        <input type="radio" name="tiene_hotel" value="1"> Sí
        <input type="radio" name="tiene_hotel" value="0" checked> No

        <button type="submit">Añadir Bodega</button>
    </form>
@endsection

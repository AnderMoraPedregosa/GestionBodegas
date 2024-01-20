@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="my-4">Editar Bodega</h1>

        <form action="{{ route('bodegas.update', $bodega->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ $bodega->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" value="{{ $bodega->direccion }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $bodega->email }}" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" value="{{ $bodega->telefono }}" required>
            </div>

            <div class="mb-3">
                <label for="persona_contacto" class="form-label">Persona de Contacto:</label>
                <input type="text" class="form-control" name="persona_contacto" value="{{ $bodega->persona_contacto }}" required>
            </div>

            <div class="mb-3">
                <label for="anno_fundacion" class="form-label">Año de Fundación:</label>
                <input type="number" class="form-control" name="anno_fundacion" value="{{ $bodega->anno_fundacion }}" required>
            </div>

            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentarios:</label>
                <textarea class="form-control" name="comentarios">{{ $bodega->comentarios }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Tiene Restaurante?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_restaurante" value="1" {{ $bodega->tiene_restaurante ? 'checked' : '' }}>
                    <label class="form-check-label">Sí</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_restaurante" value="0" {{ !$bodega->tiene_restaurante ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Tiene Hotel?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_hotel" value="1" {{ $bodega->tiene_hotel ? 'checked' : '' }}>
                    <label class="form-check-label">Sí</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_hotel" value="0" {{ !$bodega->tiene_hotel ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Añadir Bodega</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('bodegas.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" required>
            </div>

            <div class="mb-3">
                <label for="persona_contacto" class="form-label">Persona de Contacto:</label>
                <input type="text" class="form-control" name="persona_contacto" required>
            </div>

            <div class="mb-3">
                <label for="anno_fundacion" class="form-label">Año de Fundación:</label>
                <input type="number" class="form-control" name="anno_fundacion" required>
            </div>

            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentarios:</label>
                <textarea class="form-control" name="comentarios"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Tiene Restaurante?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_restaurante" value="1"> Sí
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_restaurante" value="0" checked> No
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Tiene Hotel?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_hotel" value="1"> Sí
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="tiene_hotel" value="0" checked> No
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Bodega</button>
        </form>
    </div>
@endsection

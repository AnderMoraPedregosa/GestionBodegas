
@extends('layouts.app')

@section('content')
    <h1>Editar Vino</h1>

    <form action="{{ route('vinos.update', $vino->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $vino->nombre }}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value="{{ $vino->tipo }}" required>

        <label for="anno">Año:</label>
        <input type="number" name="anno" value="{{ $vino->anno }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion">{{ $vino->descripcion }}</textarea>

        <button type="submit">Guardar Cambios</button>
    </form>

    <a href="{{ route('vinos.index') }}" class="btn btn-primary">Volver al Listado</a>
@endsection


@extends('layouts.app')

@section('content')
    <h1>Añadir Vino</h1>

    <form action="{{ route('vinos.store') }}" method="post" >
        @csrf

        <label for="bodega_id">Bodega:</label>
        <select name="bodega_id">
            @foreach ($bodegas as $bodega)
                <option value="{{ $bodega->id }}">{{ $bodega->nombre }}</option>
            @endforeach
        </select>
        <br>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required>
        <br>
        <br>

        <label for="anno">Año:</label>
        <input type="number" name="anno" required>
        <br>
        <br>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>
        <br>
        <br>

        <button type="submit">Añadir Vino</button>
        <br>
        <br>
    </form>
    <br>
    <br>
    <br>
    <br>
    <a href="{{ route('vinos.index') }}" class="btn btn-primary">Volver al Listado</a>
@endsection

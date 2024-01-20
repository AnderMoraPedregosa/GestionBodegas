@extends('layouts.app')

@section('content')
    <h1>Detalles del Vino</h1>

    <table class="table" border="1">
        <tr>
            <th>ID</th>
            <td>{{ $vino->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $vino->nombre }}</td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td>{{ $vino->tipo }}</td>
        </tr>
        <tr>
            <th>Año</th>
            <td>{{ $vino->anno }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $vino->descripcion ?? 'N/A' }}</td>
        </tr>
    </table>

    <a href="{{ route('vinos.index') }}" class="btn btn-primary">Volver al Listado de vinos</a>

@endsection


@extends('layouts.app')

@section('content')
    <h1>Detalles del Vino</h1>

    <p><strong>ID:</strong> {{ $vino->id }}</p>
    <p><strong>Nombre:</strong> {{ $vino->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $vino->tipo }}</p>
    <p><strong>Año:</strong> {{ $vino->anno }}</p>
    <p><strong>Descripción:</strong> {{ $vino->descripcion ?? 'N/A' }}</p>

    <a href="{{ route('vinos.index') }}" class="btn btn-primary">Volver al Listado</a>
@endsection

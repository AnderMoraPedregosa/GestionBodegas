{{-- resources/views/bodegas/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Detalles de la Bodega</h1>

    <p><strong>Nombre:</strong> {{ $bodega->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $bodega->direccion }}</p>
    <p><strong>Email:</strong> {{ $bodega->email }}</p>
    <p><strong>Teléfono:</strong> {{ $bodega->telefono }}</p>
    <p><strong>Persona de Contacto:</strong> {{ $bodega->persona_contacto }}</p>
    <p><strong>Año de Fundación:</strong> {{ $bodega->anno_fundacion }}</p>
    <p><strong>Comentarios:</strong> {{ $bodega->comentarios }}</p>
    <p><strong>Tiene Restaurante:</strong> {{ $bodega->tiene_restaurante ? 'Sí' : 'No' }}</p>
    <p><strong>Tiene Hotel:</strong> {{ $bodega->tiene_hotel ? 'Sí' : 'No' }}</p>

    <h2>Vinos Ofertados</h2>
    <ul>
        @foreach($bodega->vinos as $vino)
            <li>
                {{ $vino->nombre }} - {{ $vino->tipo }}
                <a href="{{ route('vinos.show', $vino->id) }}">Ver</a>
                <form action="{{ route('vinos.destroy', $vino->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('vinos.create', $bodega->id) }}">Añadir Vino</a>
@endsection

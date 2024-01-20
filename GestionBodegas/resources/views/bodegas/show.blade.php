{{-- resources/views/bodegas/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Detalles de la Bodega</h1>

    <table class="table" border="1">
        <tr>
            <th>Nombre</th>
            <td>{{ $bodega->nombre }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $bodega->direccion }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $bodega->email }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $bodega->telefono }}</td>
        </tr>
        <tr>
            <th>Persona de Contacto</th>
            <td>{{ $bodega->persona_contacto }}</td>
        </tr>
        <tr>
            <th>Año de Fundación</th>
            <td>{{ $bodega->anno_fundacion }}</td>
        </tr>
        <tr>
            <th>Comentarios</th>
            <td>{{ $bodega->comentarios }}</td>
        </tr>
        <tr>
            <th>Tiene Restaurante</th>
            <td>{{ $bodega->tiene_restaurante ? 'Sí' : 'No' }}</td>
        </tr>
        <tr>
            <th>Tiene Hotel</th>
            <td>{{ $bodega->tiene_hotel ? 'Sí' : 'No' }}</td>
        </tr>
    </table>
    <h2>Vinos Ofertados</h2>
    <ul>
        @foreach($bodega->vinos as $vino)
            <li>
                {{ $vino->nombre }} - {{ $vino->tipo }}
                <a href="{{ route('vinos.show', $vino->id) }}">Ver</a>


            </li>
        @endforeach
    </ul>


    <a href="{{ route('vinos.create', $bodega->id) }}">Añadir Vino</a>
@endsection


@extends('layouts.app')

@section('content')
    <h1>Listado de Bodegas</h1>

    <table border="2">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bodegas as $bodega)
                <tr>
                    <td>{{ $bodega->nombre }}</td>
                    <td>{{ $bodega->direccion }}</td>
                    <td>{{ $bodega->email }}</td>
                    <td>{{ $bodega->telefono }}</td>
                    <td>
                        <a href="{{ route('bodegas.show', $bodega->id) }}">Ver</a>
                        <a href="{{ route('bodegas.edit', $bodega->id) }}">Editar</a>
                        <form action="{{ route('bodegas.destroy', $bodega->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de querer eliminar esta bodega?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>

    <a href="{{ route('bodegas.create') }}">Añadir Bodega</a>
@endsection


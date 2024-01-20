
@extends('layouts.app')

@section('content')
    <h1>Listado de Vinos</h1>

    <a href="{{ route('vinos.create') }}" class="btn btn-primary">Añadir Vino</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vinos as $vino)
                <tr>
                    <td>{{ $vino->id }}</td>
                    <td>{{ $vino->nombre }}</td>
                    <td>{{ $vino->tipo }}</td>
                    <td>{{ $vino->anno }}</td>
                    <td>
                        <a href="{{ route('vinos.show', $vino->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('vinos.edit', $vino->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('vinos.destroy', $vino->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar este vino?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Listado de Vinos</h1>

    @if ($bodega)
    <a href="{{ route('bodegas.show', $bodega->id) }}" class="btn btn-secondary">Volver a Detalles de Bodega</a>
@endif
    <br>
    <br>


    <table class="table" border="1">
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
                        <a href="{{ route('vinos.show', $vino->id) }}" class="btn btn-info">
                            <img src="{{ asset('images/ver.png') }}" alt="Ver">
                        </a>

                        <a href="{{ route('vinos.edit', $vino->id) }}" class="btn btn-warning">
                            <img src="{{ asset('images/editar.png') }}" alt="Editar">
                        </a>

                        <form action="{{ route('vinos.destroy', $vino->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar este vino?')">
                                <img src="{{ asset('images/borrar.png') }}"alt="Eliminar">
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.introducir')

@section('content')

<form class="TablaDatos">
    <h1>RESULTADO DE LA BUSQUEDA</h1>
<table class="Tabla">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Número de Serie</th>
            <th>Procesador</th>
            <th>RAM</th>
            <th>Capacidad de Memoria</th>
            <th>Slots</th>
            <th>Precio</th>
            <th>Piezas en Existencia</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($inventarios as $equipo)
        <tr>
            <td>{{ $equipo->marca }}</td>
            <td>{{ $equipo->num_serie }}</td>
            <td>{{ $equipo->procesador }}</td>
            <td>{{ $equipo->ram }}</td>
            <td>{{ $equipo->cap_memoria }}</td>
            <td>{{ $equipo->slots }}</td>
            <td>{{ $equipo->precio }}</td>
            <td>{{ $equipo->stock }}</td>
            <td>
                <a href="{{ route('vistas.editar', $equipo->id) }}"><i class="fas fa-pencil"></i></a>
                |
                                <a href="{{ route('vistas.destroy', $equipo->id) }}"
                                    onclick="event.preventDefault();
                                             if(confirm('¿Está seguro de que desea eliminar este equipo?')) {
                                                 document.getElementById('delete-form-{{ $equipo->id }}').submit();
                                }">
                <i class="fas fa-trash"></i>
                 </a>
        <form id="delete-form-{{ $equipo->id }}" action="{{ route('vistas.destroy', $equipo->id) }}" method="POST" >
            @csrf
            @method('DELETE')
        </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9">No hay elementos en el inventario.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</form>

@endsection

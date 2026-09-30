@extends('layouts.introducir')

@section('content')

@if(session('message'))
    <div class="notification {{ session('class') }}">
        {{ session('message') }}
    </div>
@endif
    <form class="EntradaDatos" method="POST" action="{{ route('vistas.update', $equipo->id) }}">
        @method('PUT')
        <h1>MODIFICAR EQUIPO</h1>

        @csrf
        <label>Marca: </label>
        <input type="text" name="marca" value="{{ $equipo->marca }}"/>

        <label>Numero de serie: </label>
        <input type="text" name="num_serie" value="{{ $equipo->num_serie }}"/>

        <label>Procesador: </label>
        <input type="text" name="procesador" value="{{ $equipo->procesador }}"/>

        <label>Memoria RAM (GB): </label>
        <input type="number" name="ram" class="solo-numeros" value="{{ $equipo->ram }}" placeholder="Solo numeros"/>

        <label>Memoria (GB): </label>
        <input type="number" name="cap_memoria" class="solo-numeros" value="{{ $equipo->cap_memoria }}" placeholder="Solo numeros"/>

        <label>Slots para expansión: </label>
        <input type="number" name="slots" class="solo-numeros" value="{{ $equipo->slots }}" placeholder="Solo numeros"/>

        <label>Precio MXN: </label>
        <input type="number" name="precio" class="solo-numeros" value="{{ $equipo->precio }}"placeholder="Solo numeros"/>

        <label>Piezas en existencia: </label>
        <input type="number" name="stock" class="solo-numeros" value="{{ $equipo->stock }}" placeholder="Solo numeros"/>

        <button type="submit" class="Guardar" id="CrearBt">Actualizar</button>
    </form>
@endsection
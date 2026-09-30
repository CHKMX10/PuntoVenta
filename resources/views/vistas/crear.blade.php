@extends('layouts.introducir')

@section('content')
@if(session('message'))
    <div class="notification {{ session('class') }}">
        {{ session('message') }}
    </div>
@endif

    <form class="EntradaDatos" method="POST" action="{{ route('vistas.guardar')}}">
        @csrf

        <h1>AGREGAR EQUIPO</h1>

        <label>Marca: </label>
        <input type="text" name="marca" />

        <label>Numero de serie: </label>
        <input type="text" name="num_serie" />

        <label>Procesador: </label>
        <input type="text" name="procesador" />

        <label>Memoria RAM (GB): </label>
        <input type="number" name="ram" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Memoria (GB): </label>
        <input type="number" name="cap_memoria" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Slots para expansión: </label>
        <input type="number" name="slots" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Precio MXN: </label>
        <input type="number" name="precio" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Piezas en existencia: </label>
        <input type="number" name="stock" class="solo-numeros" placeholder="Solo numeros"/>

        <button type="submit" id="CrearBt">Agregar Equipo</button>
    </form>
@endsection
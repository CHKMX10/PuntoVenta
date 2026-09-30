<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <script src="/js/SoloNumeros.js"></script>
    <script src="/js/Campos.js"></script>
    <link rel="stylesheet" href="/css/crearModificar.css"/> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro de Computo</title>
</head>
<body>
<div class="back">
    <a href="javascript:history.back()"><i class="fas fa-backward"></i></a>
    <a href="{{ route('vistas.menuUser') }}"><i class="fas fa-home"></i></a>
    <a href="{{ route('vistas.buscarUser') }}" class="right-icon"><i class="fas fa-search"></i></a>
</div>

@if(session('message'))
    <div class="notification {{ session('class') }}">
        {{ session('message') }}
    </div>
@endif
    <form class="TablaDatos">
        <h1>EQUIPOS EN INVENTARIO</h1>
<table class="Tabla">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Número de Serie</th>
            <th>Procesador</th>
            <th>RAM GB</th>
            <th>Capacidad de Memoria GB</th>
            <th>Slots</th>
            <th>Precio MXN</th>
            <th>Piezas en Existencia</th>
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
        </tr>
        @empty
        <tr>
            <td colspan="9">No hay elementos en el inventario.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</form>
</body>
</html>
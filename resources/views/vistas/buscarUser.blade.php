<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Busqueda.css">
    <title>Buscar</title>
</head>
<body>
    <div class="back">
        <a href="javascript:history.back()"><i class="fas fa-backward"></i></a>
        <a href="{{ route('vistas.menuUser') }}"><i class="fas fa-home"></i></a>
        <a href="{{ route('vistas.listaUser') }}" class="right-icon"><i class="fas fa-table"></i></a>
    </div>

    <form class="Container" action="{{ route('vistas.resultadoUser') }}" method="GET">
        <h1 for="marca">Buscar por Marca</h1>
        <input type="text" id="marca" name="marca" placeholder="Introduzca la marca">
        <button type="submit" id="BuscarBt">Buscar</button>
    </form>
</body>
</html>

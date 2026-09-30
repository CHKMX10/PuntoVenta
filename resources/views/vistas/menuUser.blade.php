<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/menu.css">
    <title>Menú</title>
</head>
<body>
    @if(session('message'))
<div class="notification {{ session('class') }}">
    {{ session('message') }}
</div>
@endif
    <div class="container">
        <h1>VENTA DE COMPUTADORAS</h1>
        <p>VARIEDAD DE EQUIPOS</p>
        <p>Jesus Ezequiel Laguna Aguilar</p>
        <div class="menu">
            <div class="iconMenu">
                <a href="{{ route('vistas.listaUser') }}">
                    <i class="fas fa-pen"></i>
                    <div class="tooltip">Consulta</div>
                </a>
            </div>
        </div>
        <p>Redes Sociales</p>
        <div class="iconos">
            <div class="icono">
                <a href="https://www.facebook.com/jesus.laguna.777?mibextid=9R9pXO"><img src="/imagenes/face.png" alt="Facebook"></a>
                <p>Facebook</p>
            </div>
            <div class="icono">
                <a href="https://instagram.com/gsusaguilar?igshid=OGQ5ZDc2ODk2ZA=="><img src="/imagenes/insta.png" alt="Instagram"></a>
                <p>Instagram</p>
            </div>
        </div>
    </div>
</body>
</html>

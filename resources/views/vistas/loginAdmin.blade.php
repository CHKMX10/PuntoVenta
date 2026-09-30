<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/crearModificar.css"/> 
    <title>Login Admin</title>
</head>
<body>
@if(session('message'))
<div class="notification {{ session('class') }}">
    {{ session('message') }}
</div>
@endif
    <form class="EntradaDatos" method="POST" action="{{ route('vistas.guardarAdmin')}}">
        @csrf

        <h1>INICIO DE SESION</h1>

        <label>Nombre de Administrador: </label>
        <input type="text" name="nombre_admin" />

        <label>Contraseña: </label>
        <input type="password" name="password" />

        <button type="submit" id="CrearBt">Iniciar Sesión</button>

        <div class="iconos">
            <div class="icono">
                <a href="{{ route('vistas.registrarAdmin')}}"><i class="fas fa-pencil"></i></a>
                <p>¿No tienes una cuenta?</p>
                <p>Registrate</p>
            </div>
            <div class="icono">
                <a href="{{ route('vistas.loginusuario')}}"><i class="fa-solid fa-user"></i></a>
                <p>Inicio Usuario</p>
            </div> 
        </div>
    </form>
</body>
</html>

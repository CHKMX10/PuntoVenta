<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/crearModificar.css"/> 
    <title>Login Usuario</title>
</head>
<body>
    @if(session('message'))
<div class="notification {{ session('class') }}">
    {{ session('message') }}
</div>
@endif
    <form class="EntradaDatos" method="POST" action="{{ route('vistas.guardarUsuarios')}}">
        @csrf

        <h1>INICIO DE SESIÓN</h1>

        <label>Nombre de Usuario: </label>
        <input type="text" name="nombre_user" />

        <label>Contraseña: </label>
        <input type="password" name="password" />

        <button type="submit" id="CrearBt">Iniciar sesion</button>

        <div class="iconos">
            <div class="icono">
                <a href="{{ route('vistas.registrarUsuario')}}"><i class="fas fa-pencil"></i></a>
                <p>¿No tienes cuenta?</p>
                <p>¡Registrate!</p>
            </div>
            <div class="icono">
                <a href="{{ route('vistas.loginAdmin')}}"><i class="fa-solid fa-user-tie"></i></a>
                <p>Inicio Admin</p>
            </div> 
        </div>
    </form>
</body>
</html>

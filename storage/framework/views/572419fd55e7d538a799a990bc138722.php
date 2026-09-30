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
<?php if(session('message')): ?>
<div class="notification <?php echo e(session('class')); ?>">
    <?php echo e(session('message')); ?>

</div>
<?php endif; ?>
    <form class="EntradaDatos" method="POST" action="<?php echo e(route('vistas.guardarAdmin')); ?>">
        <?php echo csrf_field(); ?>

        <h1>INICIO DE SESION</h1>

        <label>Nombre de Administrador: </label>
        <input type="text" name="nombre_admin" />

        <label>Contraseña: </label>
        <input type="password" name="password" />

        <button type="submit" id="CrearBt">Iniciar Sesión</button>

        <div class="iconos">
            <div class="icono">
                <a href="<?php echo e(route('vistas.registrarAdmin')); ?>"><i class="fas fa-pencil"></i></a>
                <p>¿No tienes una cuenta?</p>
                <p>Registrate</p>
            </div>
            <div class="icono">
                <a href="<?php echo e(route('vistas.loginusuario')); ?>"><i class="fa-solid fa-user"></i></a>
                <p>Inicio Usuario</p>
            </div> 
        </div>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/loginAdmin.blade.php ENDPATH**/ ?>
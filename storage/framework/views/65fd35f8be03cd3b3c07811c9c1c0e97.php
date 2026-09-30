<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/33bfb3cecc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/crearModificar.css"/> 
    <title>Registrar Admin</title>
</head>
<body>
<?php if(session('message')): ?>
<div class="notification <?php echo e(session('class')); ?>">
    <?php echo e(session('message')); ?>

</div>
<?php endif; ?>
    <form class="EntradaDatos" method="POST" action="<?php echo e(route('vistas.subirAdmin')); ?>">
        <?php echo csrf_field(); ?>

        <h1>REGISTRAR ADMINISTRADOR</h1>

        <label>Nombre de Usuario: </label>
        <input type="text" name="nombre_admin" />

        <label>Email: </label>
        <input type="email" name="email" />

        <label>Contraseña: </label>
        <input type="password" name="password" />

        <button type="submit" id="CrearBt">Registrar</button>

        <div class="iconos">
            <div class="icono">
                <a href="<?php echo e(route('vistas.loginusuario')); ?>"><i class="fas fa-pencil"></i></a>
                <p>Login Usuario</p>
            </div>
            <div class="icono">
                <a href="<?php echo e(route('vistas.loginAdmin')); ?>""><i class="fas fa-user"></i></a>
                <p>Login Admin</p>
            </div>
        </div>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/registrarAdmin.blade.php ENDPATH**/ ?>
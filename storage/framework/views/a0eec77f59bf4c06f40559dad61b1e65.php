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
    <a href="<?php echo e(route('vistas.menuUser')); ?>"><i class="fas fa-home"></i></a>
    <a href="<?php echo e(route('vistas.buscarUser')); ?>" class="right-icon"><i class="fas fa-search"></i></a>
</div>

<?php if(session('message')): ?>
    <div class="notification <?php echo e(session('class')); ?>">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
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
        <?php $__empty_1 = true; $__currentLoopData = $inventario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($equipo->marca); ?></td>
            <td><?php echo e($equipo->num_serie); ?></td>
            <td><?php echo e($equipo->procesador); ?></td>
            <td><?php echo e($equipo->ram); ?></td>
            <td><?php echo e($equipo->cap_memoria); ?></td>
            <td><?php echo e($equipo->slots); ?></td>
            <td><?php echo e($equipo->precio); ?></td>
            <td><?php echo e($equipo->stock); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="9">No hay elementos en el inventario.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
</form>



</body>
</html><?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/listaUser.blade.php ENDPATH**/ ?>
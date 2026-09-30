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
    <a href="<?php echo e(route('vistas.menu')); ?>"><i class="fas fa-home"></i></a>
    <a href="<?php echo e(route('vistas.buscar')); ?>" class="right-icon"><i class="fas fa-search"></i></a>
</div>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/layouts/introducir.blade.php ENDPATH**/ ?>
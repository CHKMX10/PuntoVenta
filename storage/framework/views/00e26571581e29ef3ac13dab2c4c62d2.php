

<?php $__env->startSection('content'); ?>
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
            <th>Acciones</th>
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
            <td>
                <a href="<?php echo e(route('vistas.editar', $equipo->id)); ?>"><i class="fas fa-pencil"></i></a>
|
                <a href="<?php echo e(route('vistas.destroy', $equipo->id)); ?>"
                    onclick="event.preventDefault();
                             if(confirm('¿Está seguro de que desea eliminar este equipo?')) {
                                 document.getElementById('delete-form-<?php echo e($equipo->id); ?>').submit();
                             }">
                     <i class="fas fa-trash"></i>
                 </a>
                 <form id="delete-form-<?php echo e($equipo->id); ?>" action="<?php echo e(route('vistas.destroy', $equipo->id)); ?>" method="POST" >
                     <?php echo csrf_field(); ?>
                     <?php echo method_field('DELETE'); ?>
                 </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="9">No hay elementos en el inventario.</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.introducir', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/lista.blade.php ENDPATH**/ ?>
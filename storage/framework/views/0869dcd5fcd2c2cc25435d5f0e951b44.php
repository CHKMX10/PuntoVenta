

<?php $__env->startSection('content'); ?>

<?php if(session('message')): ?>
    <div class="notification <?php echo e(session('class')); ?>">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>
    <form class="EntradaDatos" method="POST" action="<?php echo e(route('vistas.update', $equipo->id)); ?>">
        <?php echo method_field('PUT'); ?>
        <h1>MODIFICAR EQUIPO</h1>

        <?php echo csrf_field(); ?>
        <label>Marca: </label>
        <input type="text" name="marca" value="<?php echo e($equipo->marca); ?>"/>

        <label>Numero de serie: </label>
        <input type="text" name="num_serie" value="<?php echo e($equipo->num_serie); ?>"/>

        <label>Procesador: </label>
        <input type="text" name="procesador" value="<?php echo e($equipo->procesador); ?>"/>

        <label>Memoria RAM (GB): </label>
        <input type="number" name="ram" class="solo-numeros" value="<?php echo e($equipo->ram); ?>" placeholder="Solo numeros"/>

        <label>Memoria (GB): </label>
        <input type="number" name="cap_memoria" class="solo-numeros" value="<?php echo e($equipo->cap_memoria); ?>" placeholder="Solo numeros"/>

        <label>Slots para expansión: </label>
        <input type="number" name="slots" class="solo-numeros" value="<?php echo e($equipo->slots); ?>" placeholder="Solo numeros"/>

        <label>Precio MXN: </label>
        <input type="number" name="precio" class="solo-numeros" value="<?php echo e($equipo->precio); ?>"placeholder="Solo numeros"/>

        <label>Piezas en existencia: </label>
        <input type="number" name="stock" class="solo-numeros" value="<?php echo e($equipo->stock); ?>" placeholder="Solo numeros"/>

        <button type="submit" class="Guardar" id="CrearBt">Actualizar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.introducir', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/editar.blade.php ENDPATH**/ ?>
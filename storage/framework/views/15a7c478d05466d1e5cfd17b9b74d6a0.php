

<?php $__env->startSection('content'); ?>
<?php if(session('message')): ?>
    <div class="notification <?php echo e(session('class')); ?>">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

    <form class="EntradaDatos" method="POST" action="<?php echo e(route('vistas.guardar')); ?>">
        <?php echo csrf_field(); ?>

        <h1>AGREGAR EQUIPO</h1>

        <label>Marca: </label>
        <input type="text" name="marca" />

        <label>Numero de serie: </label>
        <input type="text" name="num_serie" />

        <label>Procesador: </label>
        <input type="text" name="procesador" />

        <label>Memoria RAM (GB): </label>
        <input type="number" name="ram" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Memoria (GB): </label>
        <input type="number" name="cap_memoria" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Slots para expansión: </label>
        <input type="number" name="slots" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Precio MXN: </label>
        <input type="number" name="precio" class="solo-numeros" placeholder="Solo numeros"/>

        <label>Piezas en existencia: </label>
        <input type="number" name="stock" class="solo-numeros" placeholder="Solo numeros"/>

        <button type="submit" id="CrearBt">Agregar Equipo</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.introducir', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PuntoVenta\resources\views/vistas/crear.blade.php ENDPATH**/ ?>

<?php $__env->startSection('contenido'); ?>
    <style>
        .avatar_diseño {
            width: 100px;
            height: 100px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #5cb85c;
        }
        .swal-height{
            height: 350px;
        }
    </style>
    <?php echo $__env->make('vacante.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>

        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalVacante()">Nueva

            Vacante
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_vacantes">
                    <thead>
                    <tr>

                        <th>Area</th>
                        <th>Vacante</th>
                        <th>Cantidad</th>
                        <th>Fecha limite</th>
                        <th>Tipo de Puesto</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $vacantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($vacante->area->nombre); ?></td>
                            <td class="badge badge-warning"><?php echo e($vacante->nombre); ?></td>
                            <td><?php echo e($vacante->cantidad); ?></td>
                            <td><?php echo e($vacante->fecha_limite); ?></td>
                            <td><?php echo e($vacante->tipo_puesto); ?></td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarVacante('<?php echo e($vacante->id); ?>')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/vacante.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/vacante/index.blade.php ENDPATH**/ ?>
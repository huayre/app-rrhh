
<?php $__env->startSection('contenido'); ?>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered table-sm" id="tabla_empleados" style="border: #1b7e5a solid 1px">
                    <thead>
                    <?php $numasistencia = count($asistencia) ?>
                    <tr  class="table-success">
                        <th>EMPLEADO</th>
                        <?php $__currentLoopData = $asistencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asistencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th><?php echo e($asistencia->dia); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($empleados->nombre.' '.$empleados->apellido); ?></td>
                            <?php for($i=1;$i<=$numasistencia;$i++): ?>
                                <?php $num = rand(0,1) ?>
                                <?php if($num == 1): ?>
                                    <td><i class="fa fa-check text-success"></i></td>
                                <?php else: ?>
                                    <td>
                                        <i class="fa fa-times text-danger"></i>
                                    </td>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/asistencia.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/asistencia/reporte.blade.php ENDPATH**/ ?>
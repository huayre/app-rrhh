
<?php $__env->startSection('contenido'); ?>
    <?php echo $__env->make('asistencia.create_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleado()">Nueva Asistencia
        </button>
    </div>
    <div class="text-center">
        <input type="date" class="form-control-sm" id="fechaInicio">
        <input type="date" class="form-control-sm" id="fechaFin">
        <button class="btn btn-success">Buscar</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_empleados">
                    <thead>
                    <tr>
                        <th></th>
                        <th>DIA</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $contado = 1 ?>
                        <?php $__currentLoopData = $asistencia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asistencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><small class="badge badge-info"><?php echo e($contado++); ?></small></td>
                                <td><?php echo e($asistencia->dia); ?></td>
                                <td>
                                    <button class="btn btn-default p-1"><i
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
    <script src="<?php echo e(asset('js/asistencia.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xampp\Recurso Humanos - SI\app-rrhh\resources\views/asistencia/index.blade.php ENDPATH**/ ?>
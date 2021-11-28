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
    <?php echo $__env->make('postulante.create_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalEmpleado()">Nuevo
            Postulante
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
                        <th>Vacante</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Nro. Celular</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $postulantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postulante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="badge badge-warning"><?php echo e($postulante->vacante->nombre); ?></td>
                            <td><?php echo e($postulante->nombre . ' '. $postulante->apellido); ?></td>
                            <td><?php echo e($postulante->num_dni); ?></td>
                            <td><?php echo e($postulante->num_celular); ?></td>
                            <td><?php echo e($postulante->correo); ?></td>
                            <td>
                                <?php if(!$postulante->status_vacante): ?>
                                    <span class="badge badge-info">en proceso</span>
                                <?php else: ?>
                                    <span class="badge badge-success">seleccionado</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarEmpleado('<?php echo e($postulante->id); ?>')"><i
                                        class="fa fa-trash-o text-danger"></i></button>
                                <button class="btn btn-default p-1"><i class="fa fa-edit text-dark"></i></button>
                                <a href="<?php echo e($postulante->url_copia_dni); ?>" target="_blank" class="btn btn-default p-1"><i class="fa fa-address-card text-primary"></i></a>
                                <button class="btn btn-default p-1" onclick="aprobarSeleccionPersonal('<?php echo e($postulante->id); ?>')"><i class="fa fa-check text-success"></i></button>
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
    <script src="<?php echo e(asset('js/postulante.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/postulante/index.blade.php ENDPATH**/ ?>
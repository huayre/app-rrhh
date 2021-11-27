
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
    <?php echo $__env->make('areas.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>
        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalFuncion()">Nuevo Área</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_area">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ÁREA</th>
                            <th>DESCRIPCIÓN</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $item=1 ?>
                    <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><small class="badge badge-success"><?php echo e($item++); ?></small></td>
                            <td><small class="badge badge-dark"><?php echo e($area->nombre); ?></small></td>
                            <td><?php echo e($area->descripcion); ?></td>
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarArea('<?php echo e($area->id); ?>')"><i
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
    <script src="<?php echo e(asset('js/area.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/areas/index.blade.php ENDPATH**/ ?>

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
    <?php echo $__env->make('funciones.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div>

        <button type="button" class="btn btn-primary btn-rounded btn-fw mb-3" onclick="abrirModalFuncion()">Nueva

            Funcion
        </button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="tabla_funciones">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Nombres</th>

                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $funciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($funcion->id); ?></td>
                            <td><?php echo e($funcion->nombre); ?></td>
                            
                            <td>
                                <button class="btn btn-default p-1" onclick="eliminarFuncion('<?php echo e($funcion->id); ?>')"><i
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
    <script src="<?php echo e(asset('js/funcion.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectosistemasinformacion\app-rrhh\resources\views/funciones/index.blade.php ENDPATH**/ ?>